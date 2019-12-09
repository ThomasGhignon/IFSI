function start_verif(path)
{
  $(document).ready(function(){
    $(".main").submit(function(event){
      event.preventDefault();
      var inputData = $("input").val();
      console.log(inputData);
      if(inputData == "")
      {
        showError("Veuillez choisir un nom de service", "red");
        $('.input').css('border-color','red');
      }
      else
      {
        //redirection
        $(location).attr('href',"http://localhost/IFSI/www/"+path+".php?valName="+inputData+"");
      }
    });
  });
}
