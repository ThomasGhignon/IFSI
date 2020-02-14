function progressGame(progressTime, progressBarre, root, path)
{
  $.ajax({
    url : "module/progressUpdate.php",
    type : "POST",
    data : "progress_countdown=" + progressTime + "&progress_barre=" + progressBarre,
    success : function(){
      $(location).attr('href',"http://"+root+"/IFSI/www/"+path+".php");
    },
    error : function(){
      $(location).attr('href',"http://"+root+"/IFSI/www/error.php");
    }
  });
}
