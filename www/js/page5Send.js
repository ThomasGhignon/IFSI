function sendMessage()
{
  $(document).ready(function(){
    $('.inputSubmit').click(function(e){
      e.preventDefault();

      var valId = $(this).parents('form').attr('id');
      var message = $('#'+valId+'>textarea').val();
      console.log(message);

      if (message !="")
      {
        $.ajax({
          url : "module/page5_sendTraitement.php",
          type : "POST",
          data : "valId=" + valId + "&message=" + message
        });
        $('#'+valId+'>textarea').val('');
      }
      else{
        console.log("Erreur : pas de message !!!")
      }
    });
  });
}
sendMessage();
