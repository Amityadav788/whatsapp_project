<?php 

include('./connection.php');

$query =" SELECT chat.sender_id, chat.msg, users.name, users.image FROM `chat` INNER JOIN `users` ON chat.sender_id = users.id";
$result =mysqli_query($connection,$query);
$output =[];

while($row =mysqli_fetch_assoc($result)){

    $output[] =$row;

}

ob_start();
$id =$_SESSION['id'];
include('./template/chat_template.php');
$html =ob_get_clean();

$response['is_success'] = true;
$response['chat'] = $html;

print_r(json_encode($response));
exit;


?>