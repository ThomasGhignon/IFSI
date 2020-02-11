function start_verif(root)
{
  $(document).ready(function(){
    console.log(localStorage);
    $(".main").submit(function(event){
      event.preventDefault();
      var inputData = $("input").val();
      if(inputData == "")
      {
        showError("Veuillez choisir un nom de service", "red");
        $('.input').css('border-color','red');
      }
      else
      {
        localStorage.setItem("time","3600");
        localStorage.setItem("sessionName", inputData);
        localStorage.setItem("page2_time", "");
        localStorage.setItem("page2_error", "0");
        localStorage.setItem("page3_time", "");
        localStorage.setItem("page3_error", "0");
        localStorage.setItem("page4_time", "");
        localStorage.setItem("page4_error", "0");
        localStorage.setItem("page5_time", "");
        localStorage.setItem("page5_error", "0");
        //redirection
        $(location).attr('href',"http://"+root+"/IFSI/www/page2NbDoc.php");
      }
    });
  });
}
