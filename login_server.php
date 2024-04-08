<?php

include('./connection.php');

$req =['email', 'password'];

$error =[];
$url ='';

foreach($req as $key => $value){

    if(empty($_POST[$value])){

        $error[] =$value. " is required ";

    }
}

if(count($error) == 0){

    $email =$_POST['email'];
    $pass =$_POST['password'];

    $query =" SELECT * FROM `users`  WHERE `email`='$email' AND `password`='$pass' ";
    $result =mysqli_query($connection,$query);
    $row =mysqli_fetch_assoc($result);

    $_SESSION['id'] =$row['id'];
    $_SESSION['success'] =' request is valid ';
    $url ="http://localhost/whatsapp_chat/chat.php";


} else{

    $_SESSION['error'] =$error; 
    $url ="http://localhost/whatsapp_chat/login.php";

}


header("location:".$url);
exit;

?>