<?php
require_once BASE_PATH."core/validation.php";
$errors = [];

if (check_method("POST")){
    $name = sanitize_input('name');
    $email = sanitize_input('email');
    $phone = sanitize_input('phone');
    $message = sanitize_input('message');
    
    // name ==> required , string (a-z,A-Z,0-9) , min:3 , max : 200
    if(required($name)){
        $errors['name'] = "Name is required";
    } elseif(min_input($name, 3)){
        $errors['name'] = "Name must be at least 3 characters long";
    } elseif(max_input($name, 20)){
        $errors['name'] = "Name must not exceed 20 characters";
    }

    // email ==> required , email
    if(required($email)){
        $errors['email'] = "Email is required";
    } elseif(is_email($email)){
        $errors['email'] = "Invalid email format";
    }

    // phone ==> required , numeric , max: 20
    if(required($phone)){
        $errors['phone'] = "Phone number is required";
    } elseif(!is_numeric_input($phone)){
        $errors['phone'] = "Phone number must be numeric";
    } elseif(max_input($phone, 20)){
        $errors['phone'] = "Phone number must not exceed 15 digits";
    }

    // message ==> required , string (a-z,A-Z,0-9) , min:10 , max : 1000
    if(required($message)){
        $errors['message'] = "Message is required";
    } elseif(min_input($message, 10)){
        $errors['message'] = "Message must be at least 10 characters long";
    } elseif(max_input($message, 1000)){
        $errors['message'] = "Message must not exceed 1000 characters";
    }

    if(empty($errors)){
        // insert Data
        $result = insert('messages',[
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'content' => $message
        ]);
        if($result){
            set_session("success","message sent successfuly");
            
        }
    }else{
        set_session("errors",$errors);
        
    }
    header("Location: ".BASE_URL."index.php?page=contact");
    exit;

} else {
    require_once "views/404.views.php";
}
