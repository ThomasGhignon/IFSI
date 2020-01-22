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

                if($(".button_"+data.typeM).hasClass("flickiButton-select")){

                }
                else{
                  $(".button_"+data.typeM).addClass("flickiButton-select");
                }
              }
            }
          });
      reloadMessage();
    }, 1000);
  });
}
reloadMessage();
