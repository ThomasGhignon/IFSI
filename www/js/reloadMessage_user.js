function reloadMessage()
{
  $(document).ready(function(){
    setTimeout( function(){
      $.ajax({
            url : "module/evenLogRequest.php",
            type : "GET",
            success : function(jsonArray){
              if (jsonArray != "")
              {
                var data = JSON.parse(jsonArray);
                var oldClass = $("#"+data.id).attr("class");
                $("#"+data.id).addClass(data.className);
                $("#"+data.id).removeClass(oldClass);
              }
            }
          });
      reloadMessage();
    }, 1000);
  });
}
reloadMessage();
