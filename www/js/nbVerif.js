function nb_verif(root, path, code)
{
  $(document).ready(function(){
    $(".main").submit(function(event){
      event.preventDefault();
      var inputData = $("input").val();
      if(inputData == code)
      {
        localStorage.setItem("page2_time", localStorage.getItem("time"));
        //redirection
        $(location).attr('href',"http://"+root+"/IFSI/www/"+path+".php");
      }
      else
      {
        $('.input').css('border-color','red');
        showError("Le code n'est pas correct", "red");
        var nbError = localStorage.getItem("page2_error");
        nbError++;
        localStorage.setItem("page2_error", nbError);
      }
    });
  });
}

