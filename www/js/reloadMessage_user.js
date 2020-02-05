var methodeMessage_checkCount = 0;
var materielMessage_checkCount = 0;
var maladeMessage_checkCount = 0;
var mainoeuvreMessage_checkCount = 0;
var milieuMessage_checkCount = 0;
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

            if (data.className == "validated"){
              if (parentId =="methodeMessage"){
                methodeMessage_checkCount++;
                page5Advancement[0][0] = methodeMessage_checkCount;
                $('.advancement_stat').text(page5Advancement[0][0]);
                if (page5Advancement[0][0] >= page5Advancement[0][1]){
                  page5Advancement[0] = true;
                  $("#methode").remove();
                }
              }else{
                if (parentId =="materielMessage"){
                  materielMessage_checkCount = materielMessage_checkCount+1;
                  page5Advancement[1][0] = materielMessage_checkCount;
                  $('.advancement_stat').text(page5Advancement[1][0]);
                  if (page5Advancement[1][0] >= page5Advancement[1][1]){
                    page5Advancement[1] = true;
                    $("#materiel").remove();
                  }

                }else{
                  if (parentId =="maladeMessage"){
                    maladeMessage_checkCount = maladeMessage_checkCount+1;
                    page5Advancement[2][0] = maladeMessage_checkCount;
                    $('.advancement_stat').text(page5Advancement[2][0]);
                    if (page5Advancement[2][0] >= page5Advancement[2][1]){
                      page5Advancement[2] = true;
                      $("#malade").remove();
                    }
                  }else{
                    if (parentId =="mainoeuvreMessage"){
                      mainoeuvreMessage_checkCount = mainoeuvreMessage_checkCount+1;
                      page5Advancement[3][0] = mainoeuvreMessage_checkCount;
                      $('.advancement_stat').text(page5Advancement[3][0]);
                      if (page5Advancement[3][0] >= page5Advancement[3][1]){
                        page5Advancement[3] = true;
                        $("#mainoeuvre").remove();
                      }
                    }else{
                      if (parentId =="milieuMessage"){
                        milieuMessage_checkCount = milieuMessage_checkCount+1;
                        page5Advancement[4][0] = milieuMessage_checkCount;
                        $('.advancement_stat').text(page5Advancement[4][0]);
                        if (page5Advancement[4][0] >= page5Advancement[4][1]){
                          page5Advancement[4] = true;
                          $("#milieu").remove();
                        }
                      }else{
                        console.log("Error");
                      }
                    }
                  }
                }
              }
            }
            console.log(page5Advancement);
            if (page5Advancement[0] == true && page5Advancement[1] == true && page5Advancement[2] == true && page5Advancement[3] == true && page5Advancement[4] == true)
            {
              //redirection
              var root = "localhost";
              $(location).attr('href',"http://"+root+"/IFSI/www/finalPage_win.php");
            }
          }
        }
      });
      reloadMessage();
    }, 4000);
  });
}
reloadMessage();
