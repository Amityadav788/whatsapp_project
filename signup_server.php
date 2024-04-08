<?php

include('./connection.php');

$req =['name', 'email', 'password', 'phone', ];

$error =[];
$url ='';

foreach($req as $key => $value){

    if(empty($_POST[$value])){

        $error[] =$value. " is required ";

    }

    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){

        $temp =$_FILES['image']['tmp_name'];
        $name =$_FILES['image']['name'];
        $path =pathinfo($name);
        
        $ext =$path['extension'];
        $basename =$path['basename'];
        $unique_name =time().'.'.$ext;
        $destination ='./uploads/'.$unique_name;
        $is_uploaded =move_uploaded_file($temp,$destination);
        

    }
}

if(count($error) == 0){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $phone =$_POST['phone'];

    $query =" INSERT INTO users (`name`, `email`, `password`, `phone`, `image`) VALUES ('$name', '$email', '$password', '$phone', '$unique_name')";
    $result =mysqli_query($connection,$query);

    $_SESSION['success'] =' request is valid ';
    $url ="http://localhost/whatsapp_chat/login.php";

} else{

    $_SESSION['error'] = $error;
    $url ="http://localhost/whatsapp_chat/sign.php";

}

header("location:".$url);
exit;




?>