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
