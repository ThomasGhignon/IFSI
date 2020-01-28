function M_step2Verif()
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

        /*for (var i = 0; i < 5; i++) {
          var nb = "nbSelect_"+i;
          console.log(nb);
          typeM_Array[i] = selectRetrieve(name, i);
        }*/

        /*création tableau 2D*/
        typeM_Array[0] = array_methode;
        typeM_Array[1] = array_materiel;
        typeM_Array[2] = array_malade;
        typeM_Array[3] = array_mainoeuvre;
        typeM_Array[4] = array_milieu;

        /*var jsonArray = JSON.stringify(typeM_Array);*/

        /*obj=new Object();
        obj["nom"]= 'pierre';
        obj["age"]= '33';
        var jsondata = JSON.stringify(obj);
        console.log(obj);*/

        retrieveArrayOrigin(typeM_Array);
    });
  });
}
M_step2Verif();

/*récupération bonnes données (pour le moment pas stocké dans une base)*/
function retrieveArrayOrigin(userArray)
{
  $.ajax({
      url : "module/page4Check.php",
      type : "POST",
      success : function(jsonArray){
        if (jsonArray != "")
        {
          var dataOrigin = JSON.parse(jsonArray);
          checkData(dataOrigin, userArray);
        }
      }
  });
}

/*comparatif des tableau origin et user*/
function checkData(data, userArray)
{
  for (var i = 0; i < data.length; i++) { /*longueur de data = 5 car 5 M*/
    for (var j = 0; j < userArray[i].length; j++) { /*Pour chaque tableau correspondant aux response de chaque M*/

      for (var z = 0; z < data[i].length; z++) {
        if (userArray[i][j] == data[i][z])
        {
          console.log("good :"+userArray[i][j]+" = "+data[i][z]);
          /*vérifier si condition pas déjà vérifié pour la même phrase*/
          for (var e = j-1; e < userArray[i].length; e++) { /*je suis pas sur (il faut regarder en arrière ou en avant ?) !!!!!!!!!!!!!*/
            if (userArray[i][j] == userArray[i][e])
            {
              console.log("error : "+userArray[i][j])
              /*userArray[i][j] = false;*/
            }
            console.log(userArray[i][j], userArray[i][e]);
            /*attribut une valeur à la place de la phrase contenue dans userArray selon les indices correspondants chez data*/
            /*else
            {
              userArray[i][j] = i+z;
              console.log(userArray[i][j] = i+z);
            }*/
          }
        }
      }


    }
  }
}

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


