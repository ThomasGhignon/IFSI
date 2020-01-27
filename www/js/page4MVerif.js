function M_step2Verif()
{
  $(document).ready(function(){
    $('.main').submit(function(event){
      event.preventDefault();
        var typeM_Array = [];

        var nbSelect_0 = $("#methode").children("select").length;
        var nbSelect_1 = $("#materiel").children("select").length;
        var nbSelect_2 = $("#malade").children("select").length;
        var nbSelect_3 = $("#mainoeuvre").children("select").length;
        var nbSelect_4 = $("#milieu").children("select").length;

        var array_methode = [];
        var array_materiel = [];
        var array_malade = [];
        var array_mainoeuvre = [];
        var array_milieu = [];

        for (var i = 0; i < nbSelect_0; i++) {
          array_methode[i] = $("#methodeSelect_"+i).val();
        }
        var array_materiel= [];
        for (var i = 0; i < nbSelect_1; i++) {
          array_materiel[i] = $("#materielSelect_"+i).val();
        }
        var array_malade = [];
        for (var i = 0; i < nbSelect_2; i++) {
          array_malade[i] = $("#maladeSelect_"+i).val();
        }
        var array_mainoeuvre = [];
        for (var i = 0; i < nbSelect_3; i++) {
          array_mainoeuvre[i] = $("#mainoeuvreSelect_"+i).val();
        }
        var array_milieu = [];
        for (var i = 0; i < nbSelect_4; i++) {
          array_milieu[i] = $("#milieuSelect_"+i).val();
        }

        /*for (var i = 0; i < 5; i++) {
          var nb = "nbSelect_"+i;
          console.log(nb);
          typeM_Array[i] = selectRetrieve(name, i);
        }*/

        typeM_Array[0] = array_methode;
        typeM_Array[1] = array_materiel;
        typeM_Array[2] = array_malade;
        typeM_Array[3] = array_mainoeuvre;
        typeM_Array[4] = array_milieu;

        console.log(typeM_Array);
        page4CheckArray(typeM_Array)
    });
  });
}
M_step2Verif();

/*function selectRetrieve(nb, typeM)
{
  var newArray = [];
  console.log(nb, typeM);
  for (var i = 0; i < nb; i++) {
    var index = i+1;
    console.log(index);
    newArray[i] = $("."+typeM+" select:nth-of-type("+index+")").val();
  }
  console.log(newArray);
  return newArray;
}*/

function CheckArray(array)
{
  $.ajax({
      url : "module/",
      type : "POST",
      data : 'array=' + array
  });
}
