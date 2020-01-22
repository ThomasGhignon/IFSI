function admin_notifNewMessage()
{
  $(document).ready(function(){
    $('.button').click(function(){
      if ($(this).hasClass("flickiButton-select")) {
        $(this).removeClass("flickiButton-select");
      }
    });
  });
}
admin_notifNewMessage();
