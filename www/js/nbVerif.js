function nb_verif(root, path, code)
{
  $(document).ready(function(){
    $(".main").submit(function(event){
      event.preventDefault();
      var inputData = $("input").val();
      if(inputData == code)
      {
        //redirection
        $(location).attr('href',"http://"+root+"/IFSI/www/"+path+".php");
      }
      else
      {
        showError("Le code n'est pas correct", "red");
      }
    });
  });
}

