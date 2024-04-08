<main class="cd__main">
         <!-- Start DEMO HTML (Use the following code into your project)-->
         <section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i><?php $id = $_SESSION['id']; ?> 
           <?php if($value['sender_id'] = $id){ ?>
           <?php echo $_SESSION['name']; ?>
           <?php } ?>
    </div>


    <div class="msger-header-options">
      <span><a class="btn btn-submit" type="button" href="http://localhost/whatsapp_chat/logout.php">Logout</a></span>
      
    </div>
  </header>

  <?php 
  
  $id =$_SESSION['id'];
  $query =" SELECT chat.sender_id, chat.msg, users.name, users.image FROM `chat` INNER JOIN `users` ON chat.sender_id = users.id";
  $result =mysqli_query($connection, $query);
  $output =[];
  while($row =mysqli_fetch_assoc($result)){

    $output[] = $row;

  }

  ?>

    
  <main class="msger-chat">

  <?php foreach($output as $key => $value){ ?>

  <?php if($value['sender_id'] != $id){ ?>

     
    <div class="msg left-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)">
       <img class="img-circle" width="70" height="80" src="../whatsapp_chat/uploads/<?php echo $value['image']; ?>" />
      </div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name"><?php echo $value['name']; ?></div>
          <div class="msg-info-time">12:45</div>
        </div>

        <div class="msg-text">
          <?php echo $value['msg']; ?>
        </div>
      </div>
    </div>

    <?php } else{ ?>

    <div class="msg right-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)">
       <img class="img-circle" width="70" height="80" src="../whatsapp_chat/uploads/<?php echo $value['image']; ?>" />
      </div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name"><?php echo $value['name']; ?></div>
          <div class="msg-info-time">12:46</div>
        </div>

        <div class="msg-text">
        <?php echo $value['msg']; ?>
        </div>
      </div>
    </div>
  <?php } ?> 
  <?php } ?> 
  </main>

  <form class="msger-inputarea" id="chatForm">
    <input type="text" class="msger-input" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
    <input type="hidden" id="custId" class="sender_id"  name="sender_id" value="<?php echo $_SESSION['id']; ?>">
  </form>
</section>
        
      </main>