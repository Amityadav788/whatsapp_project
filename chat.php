<!DOCTYPE html>

<?php 

include('./connection.php');

if(!isset($_SESSION['id'])){

    header("location:http://localhost/whatsapp_chat/sign.php");
    exit;
}

?>

<html>
<head>

<?php include('./partials/head.php'); ?>

</head>

<body>

<?php include('./partials/header.php'); ?>

<?php include('./main.php'); ?>



<?php include('./partials/footer-script.php'); ?>
<?php include('./partials/footer.php'); ?>

</body>
</html>