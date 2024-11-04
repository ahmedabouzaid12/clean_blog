<?php


function set_session($key, $value){
    $_SESSION[$key] = $value; // Remove quotes around $key
}

function get_session($key){
    return $_SESSION[$key] ?? null; // Remove quotes around $key
}

function has_session($key){
    return isset($_SESSION[$key]); // Remove quotes around $key
}

function remove_session($key){
    unset($_SESSION[$key]); // Remove quotes around $key
}

function flash_session($key){
    if(has_session($key)){
        $value = get_session($key);
        remove_session($key);
        return $value;
    }
    return null;
}