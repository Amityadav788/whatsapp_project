$(document).ready(function(){

  setInterval(displayHello, 1000);

  function displayHello(){

    console.log('chulbul');

    let url = 'http://localhost/whatsapp_chat/chat_history.php';

    $.ajax({

      type: "GET",
      url: url,

      success: function(data)
      {

        let response =jQuery.parseJSON(data);

        if(response.is_success == true){
          console.log(response.chat);
          jQuery('.msger-chat').html(response.chat);
        }
      }

    })
  }


  $("#chatForm").submit(function(e){

    e.preventDefault();
    let msg = jQuery('.msger-input').val();
    let sender_id = jQuery('.sender_id').val();
    alert(sender_id);

    let data = {'sender_id':sender_id , 'msg':msg };
    let url ='http://localhost/whatsapp_chat/chat_server.php';

    $.ajax({
      type: "POST",
      url: url,
      data: data, // serializes the form's elements.
      success: function(data)
      {
        
          let response = jQuery.parseJSON(data);

          if(response.is_success == true){
            alert('message saved successfully!');
            window.location.reload();
          }

      


      }
  });

});
  
});
