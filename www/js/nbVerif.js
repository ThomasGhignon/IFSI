function nb_verif(root, path, code)
{
  $(document).ready(function(){
    /*var progress_countdown = ""*/
    $(".main").submit(function(event){
      event.preventDefault();
      var inputData = $("input").val();
      if(inputData == code)
      {
        localStorage.setItem("page2_time", localStorage.getItem("time"));
        //redirection
        var getTime = localStorage.getItem("page2_time");
        progressGame(getTime, "55", root, path);
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

