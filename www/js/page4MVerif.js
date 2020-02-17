var nbError = localStorage.getItem("page4_error");

function M_step2Verif(root, path)
{
  $(document).ready(function(){
    $('.main').submit(function(event){
      event.preventDefault();
      var typeM_Array = [];

      /*select nombre d'entrée possible*/
      var nbSelect_0 = $("#methode").children("select").length;
      var nbSelect_1 = $("#materiel").children("select").length;
      var nbSelect_2 = $("#malade").children("select").length;
      var nbSelect_3 = $("#mainoeuvre").children("select").length;
      var nbSelect_4 = $("#milieu").children("select").length;

      /*tableau 1D*/
      var array_methode = [];
      var array_materiel = [];
      var array_malade = [];
      var array_mainoeuvre = [];
      var array_milieu = [];

      /*récupération des valeurs pour le tableau 1D*/
      for (var i = 0; i < nbSelect_0; i++) {
        array_methode[i] = $("#methodeSelect_"+i+">option:selected").text();
      }
      var array_materiel= [];
      for (var i = 0; i < nbSelect_1; i++) {
        array_materiel[i] = $("#materielSelect_"+i+">option:selected").text();
      }
      var array_malade = [];
      for (var i = 0; i < nbSelect_2; i++) {
        array_malade[i] = $("#maladeSelect_"+i+">option:selected").text();
      }
      var array_mainoeuvre = [];
      for (var i = 0; i < nbSelect_3; i++) {
        array_mainoeuvre[i] = $("#mainoeuvreSelect_"+i+">option:selected").text();
      }
      var array_milieu = [];
      for (var i = 0; i < nbSelect_4; i++) {
        array_milieu[i] = $("#milieuSelect_"+i+">option:selected").text();
      }
      /*création tableau 2D*/
      typeM_Array[0] = array_methode;
      typeM_Array[1] = array_materiel;
      typeM_Array[2] = array_malade;
      typeM_Array[3] = array_mainoeuvre;
      typeM_Array[4] = array_milieu;

      retrieveArrayOrigin(typeM_Array, root, path);
    });
  });
}
/*M_step2Verif("localhost");*/

/*récupération bonnes données (pour le moment pas stocké dans une base)*/
function retrieveArrayOrigin(userArray, root, path)
{
  $.ajax({
    url : "module/page4Check.php",
    type : "POST",
    success : function(jsonArray){
      if (jsonArray != "")
      {
        var dataOrigin = JSON.parse(jsonArray);
        checkData(dataOrigin, userArray, root, path);
      }
    }
  });
}

/*comparatif des tableau origin et user*/
function checkData(data, userArray, root, path)
{
  var assetArray = [[],[],[],[],[]];
  for (var i = 0; i < 5; i++)
  {
    for (var j = 0; j < userArray[i].length; j++)
    {
      assetArray[i][j] = "";
    }
  }

  //boucle tableau 2D : userArray
  for (var i = 0; i < 5; i++) //longueur de data et userArray = 5 car 5 M
  {
    for (var j = 0; j < userArray[i].length; j++) //Pour chaque tableau correspondant aux response de chaque M
    {

      for (var z = 0; z < data[i].length; z++)
      {
        //vérification correspondance
        if (userArray[i][j] == data[i][z])
        {
          var cpt = 0;
          /*vérifier si condition pas déjà vérifié pour la même phrase*/
          for (var p = 0; p < userArray[i].length; p++)
          {
            if (userArray[i][j] == userArray[i][p])
            {
              cpt++;
              if (cpt>=2)
              {
                assetArray[i][p] = false;
              }
            }
          }
          if (cpt == 1)
          {
            assetArray[i][j] = true;
          }
        }
      }
    }
  }
  refreshView(assetArray, root, path);
}

function refreshView(array, root, path)
{
  var cpt = 0;
  for (var i = 0; i < 5; i++)
  {
    for (var j = 0; j < array[i].length; j++)
    {
      if (array[i][j] != true)
      {
        var step = j+1;
        $('.selectM_'+i+'>select:nth-of-type('+step+')').css('border-color','red');
        cpt++;
      }
      else
      {
        var step = j+1;
        $('.selectM_'+i+'>select:nth-of-type('+step+')').css('border-color','green');
      }
    }
  }
  if (cpt == 0)
  {
    localStorage.setItem("page4_time", localStorage.getItem("time"));
    if (nbError)
    {
      localStorage.setItem("page4_error", nbError);
    }
    else
    {
      localStorage.setItem("page4_error", "0");
    }
    var getTime = localStorage.getItem("page4_time");
    progressGame(getTime, "17", root, path);
  }
  else
  {
    showError("vous avez "+cpt+" erreur(s)", "red");
    nbError++;
  }
}
