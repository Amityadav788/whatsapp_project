<?php

include('./connection.php');

$response['is_success'] =false;

$sender_id =$_POST['sender_id'];
$msg =$_POST['msg'];

$query =" INSERT INTO chat(`sender_id`, `msg`) VALUES ('$sender_id', '$msg')";
$result =mysqli_query($connection,$query);

if($result == true){

    $response['is_success'] =true;

}

print_r(json_encode($response));
exit;







?>