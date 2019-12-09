function M_step2Verif()
{
  $(document).ready(function(){
    $('.main').submit(function(event){
      event.preventDefault();
        var req = $("#selectMethode").val();
        console.log(req);
        var methodeArray = [];

        var reqMethode = selectArray(methodeArray, "#methodeSelect_", 5);
        var reqMateriel = selectArray(methodeArray, "#materielSelect_", 1);
        var reqMalade = selectArray(methodeArray, "#maladeSelect_", 2);
        var reqMainDoeuvre = selectArray(methodeArray, "#mainDoeuvreSelect_", 9);
        var reqMilieu = selectArray(methodeArray, "#milieuSelect_", 5);
    });
  });
}
M_step2Verif();

function selectArray(array, id, nb)
{
  for (var i = 0; i < nb; i++)
    {
      array[i] = $(id+i).val();
    }
    console.log(array);
    return array;
}
