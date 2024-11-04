<?php


if(check_method('GET')){
    $id = $_GET['id'] ?? null;
    if($id){
        if(delete('posts',"$id")){
            set_session("success","data deleted successfuly");
        }
    }
}

redirect("posts");

