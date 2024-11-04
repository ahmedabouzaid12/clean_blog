<?php

// Function to check if a field is required
// Returns true if the field is empty (fails validation), false if it has a value
function required($input){
    if(empty($input)){
        return true; 
    }
    return false; 
}

// Function to check if input meets a minimum length
// Returns true if the input length is less than the minimum (fails validation), false if it meets the minimum
function min_input($input, $length){
    if(strlen($input) < $length){
        return true; 
    }
    return false; 
}

// Function to check if input meets a maximum length
// Returns true if the input length exceeds the maximum (fails validation), false if within the maximum
function max_input($input, $length){
    if(strlen($input) > $length){
        return true; 
    }
    return false; 
}

// Function to validate email format
// Returns true if the email format is invalid (fails validation), false if valid
function is_email($input) {
    if(filter_var($input, FILTER_VALIDATE_EMAIL) == false){
        return true; 
    }
    return false; 
}

// Function to check if input is numeric
// Returns true if input is not numeric (fails validation), false if numeric
function is_numeric_input($input) {
    if(!is_numeric($input)){
        return true; 
    }
    return false;
}

// Function to validate file upload
// Checks file type and file size
// Returns an error message if the file fails validation, or true if the file is valid
function validate_file($file, $allowed_types = ['image/jpeg', 'image/png'], $max_size = 2 * 1024 * 1024) {
    // Check if file was uploaded
    if (!isset($_FILES[$file]) || $_FILES[$file]['error'] != 0) {
        return "File is required";
    }

    // Check file type
    if (!in_array($_FILES[$file]['type'], $allowed_types)) {
        return "Invalid file type. Only JPEG and PNG are allowed";
    }

    // Check file size
    if ($_FILES[$file]['size'] > $max_size) {
        return "File size should not exceed 2 MB";
    }

    return true; // No errors
}
