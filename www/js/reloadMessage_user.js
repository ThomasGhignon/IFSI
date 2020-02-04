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
                var parentId = $("#"+data.id).parent().attr("id");
                $("#"+data.id).addClass(data.className);
                $("#"+data.id).removeClass(oldClass);
                console.log(data.className);
                if($(".button_"+data.typeM).hasClass("flickiButton-select")){

                }
                else{
                  $(".button_"+data.typeM).addClass("flickiButton-select");
                }

                if (data.className == "validated")
                {
                  page5_checkNbValidated(parentId);
                }
              }
            }
          });
      reloadMessage();
    }, 4000);
  });
}
reloadMessage();

