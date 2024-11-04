<?php

    $conn = mysqli_connect("localhost","root","","clean_blog");
    if(!$conn){
        die("Connection Failed : " . mysqli_connect_error());
    }



