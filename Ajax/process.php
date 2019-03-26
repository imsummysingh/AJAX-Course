<?php

//creating connection
$conn = mysqli_connect('localhost','root','','ajaxtest');


echo 'processing............';

//check for get variable
if(isset($_GET['name'])){
    echo 'GET: your name is '. $_GET['name'];
}

//check for post variable
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    //echo 'POST: your name is '. $_POST['name'];

    $query = "INSERT INTO USERS(name) Values ('$name')";

    if(mysqli_query($conn,$query)){
        echo 'USER ADDED';
    }
    else{
        echo 'ERROR: '. mysqli_error($conn);
    }
}

?>