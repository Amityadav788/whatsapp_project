<?php

include('./connection.php');

$query =" SELECT * FROM `users` ";
$result =mysqli_query($connection,$query);
$output =[];

while($row =mysqli_fetch_assoc($result)){

    $output[] =$row;

}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include('./navbar.php'); ?>

<div class="container">
  <h2></h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($output as $key => $value){ ?>
        <tr>     
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['email'];?></td>    
            <td><?php echo $value['password'];?></td> 
            <td><?php echo $value['phone'];?></td>
            <td><?php echo $value['image'];?></td>
            <td>
                <?php if($value['is_active'] == 1){ ?>
                <a type="button" class="btn btn-danger" href="http://localhost/whatsapp_chat/status.php?status=1&id=<?php echo $value['id']; ?>">Inactive</a>  
                <?php } else{ ?>
                <a type="button" class="btn btn-info" href="http://localhost/whatsapp_chat/status.php?status=0&id=<?php echo $value['id']; ?>">Active</a>
                <?php } ?>     
            </td>       
        </tr>
        <?php } ?>   
 
    </tbody>
  </table>
</div>

</body>
</html>
