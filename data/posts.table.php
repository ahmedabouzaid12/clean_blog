<?php

$sql = "CREATE TABLE IF NOT EXISTS `posts`(
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `title` VARCHAR(255) NOT NULL,
        `content` TEXT NOT NULL ,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
        


    )";
    //execution
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "elgadwal EL POSTS etaamal <br>";
    }
    $sql = "INSERT INTO `posts` (`title`,`content`,`image`) VALUES 
    ('first post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('scond post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('third post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'), 
    ('fourth post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('fifte post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('first post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('scond post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('third post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'), 
    ('fourth post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('fifte post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('first post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('scond post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('third post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'), 
    ('fourth post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.'),
    ('fifte post','Lorem ipsum, dolor sit amet consectetur adipisicing elit.')
    
    ";

mysqli_query($conn,$sql);