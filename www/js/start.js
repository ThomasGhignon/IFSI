function start_verif(root, path)
{
  $(document).ready(function(){
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
        //redirection
        $(location).attr('href',"http://"+root+"/IFSI/www/"+path+".php");
      }
    });
  });
}
