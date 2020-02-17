function adminProgress()
{
  $(document).ready(function(){
    setTimeout( function(){
      $.ajax({
        url : "module/adminProgressView.php",
        type : "GET",
        success : function(jsonArray){
          if (jsonArray != "")
          {
            var data = JSON.parse(jsonArray);
            var countdown = data.countdown;
            var progress_barre = data.progress_barre;

            countdownParam(countdown);
            sideBarre_change(progress_barre+"%");
          }
        },
        error : function(){
          $(location).attr('href',"http://"+root+"/IFSI/www/error.php");
        }
      });
      adminProgress();
    }, 4000);
  });
}
adminProgress();
