function nb_verif(path, code)
{
  $(document).ready(function(){
    $(".main").submit(function(event){
      event.preventDefault();
      var inputData = $("input").val();
      if(inputData == code)
      {
        //redirection
        $(location).attr('href',"http://localhost/IFSI/www/"+path+".php");
      }
      else
      {
        showError("Le code n'est pas correct", "red");
      }
    });
  });
}

