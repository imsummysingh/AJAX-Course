<?php

$conn = mysqli_connect('localhost','root','','ajaxtest');

$query = "SELECT * FROM users";

//GET RESULTS
$result = mysqli_query($conn,$query);

//Fetch Result
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($users);

?>