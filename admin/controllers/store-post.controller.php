<?php
require_once BASE_PATH."core/validation.php";
$errors = [];

if (check_method("POST")) {
    $title = sanitize_input('title');
    $content = sanitize_input('content');

    
    if (required($title)) {
        $errors['title'] = "Title is required";
    } elseif (min_input($title, 3)) {
        $errors['title'] = "Title must be at least 3 characters long";
    } elseif (max_input($title, 100)) {
        $errors['title'] = "Title must not exceed 100 characters";
    }

    
    if (required($content)) {
        $errors['content'] = "Content is required";
    } elseif (min_input($content, 10)) {
        $errors['content'] = "Content must be at least 10 characters long";
    }

    
    $file_error = validate_file('choose_file');
    if ($file_error !== true) {
        $errors['choose_file'] = $file_error;
    }

    
    if (empty($errors)) {
        
        $file_name = $_FILES['choose_file']['name'];
        $file_tmp = $_FILES['choose_file']['tmp_name'];
        $upload_dir = BASE_PATH . "uploads/";
        
        
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        
        $file_path = $upload_dir . $file_name;
        if (move_uploaded_file($file_tmp, $file_path)) {
            
            $result = insert('posts', [
                'title' => $title,
                'content' => $content,
                'choose_file' => $file_name, 
            ]);

            if ($result) {
                set_session("success", "Post sent successfully");
            }
        } else {
            $errors['choose_file'] = "Failed to upload file";
        }
    }

    
    if (!empty($errors)) {
        set_session("errors", $errors);
    }

    header("Location: " . admin_url("add-post"));
    exit;

} else {
    require_once "views/404.views.php";
}
?>
