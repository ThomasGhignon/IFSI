function dataSend(root, path)
{
  $(document).ready(function(){
    $.ajax({
      url : "module/dataResultInsert.php",
      type : "POST",
      data : "sessionName="+localStorage.getItem("sessionName")+"&page2_time="+localStorage.getItem("page2_time")+"&page2_error="+localStorage.getItem("page2_error")+"&page3_time="+localStorage.getItem("page3_time")+"&page3_error="+localStorage.getItem("page3_error")+"&page4_time="+localStorage.getItem("page4_time")+"&page4_error="+localStorage.getItem("page4_error")+"&page5_time="+localStorage.getItem("page5_time")+"&page5_error="+localStorage.getItem("page5_error"),
      success : function(){
        $(location).attr('href',"http://"+root+"/IFSI/www/"+path+".php");
      },
      error : function(){
        $(location).attr('href',"http://"+root+"/IFSI/www/error.php");
      }
    });
  });
}
