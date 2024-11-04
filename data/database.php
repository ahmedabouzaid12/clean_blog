<?php

    $conn = mysqli_connect("localhost","root","","clean_blog");
    if(!$conn){
        die("Connection Failed : " . mysqli_connect_error());
    }




require_once('./connection.php');
require_once('./categories.table.php');
require_once('./posts.table.php');
require_once('./users.table.php');
require_once('./messages.table.php');
