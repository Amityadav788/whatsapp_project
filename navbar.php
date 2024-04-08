<?php

include('./connection.php');

$query =" SELECT COUNT(id) as total_count FROM `users` ";
$result =mysqli_query($connection,$query);
$count ='';

while($row =mysqli_fetch_assoc($result)){

    $count =$row['total_count'];

}





?>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="http://localhost/whatsapp_chat/sign.php">Sign Up</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/whatsapp_chat/users_list.php">Users list(<?php echo $count; ?>)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/whatsapp_chat/login.php">Login</a>
      </li>
</div>
    <ul class="navbar-nav">
     <div class="collapse navbar-collapse" id="navbarNav">


     </div>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/whatsapp_chat/logout.php">Logout</a>
      </li>
    </ul>
    </ul>
  
</nav>