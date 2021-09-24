<?php

// connect to database
$conn = mysqli_connect('localhost', 'elliot', 'test1234', 'pizza_shop');

//check connection
if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}

?>