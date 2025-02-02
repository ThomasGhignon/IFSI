function loadMessage(path, typeOf_m)
{
  var id = $(''+path+' div:last').attr('id');
  if(fileName == "admin.php"){
    $.ajax({
      url : "module/load.php?typeOf_m="+typeOf_m+"&id="+id+"&admin="+fileName,
      type : "GET",
      success : function(html){
        var data = html;
        if(data != '')
        {
          $(path).append(html);
          if($(".button_"+typeOf_m).hasClass("flickiButton-select")){

          }
          else{
            $(".button_"+typeOf_m).addClass("flickiButton-select");
          }
        }
      }
    });
  }
  else{
    $.ajax({
      url : "module/load.php?typeOf_m="+typeOf_m+"&id=" + id,
      type : "GET",
      success : function(html){
        var data = html;
        if(data != '')
        {
          $(path).append(html);
        }
      }
    });
  }
}

function load_methode()
{
   $(document).ready(function(){
    var path = "#methodeMessage";
    var typeOf_m = "methode";
    setTimeout( function(){
        loadMessage(path, typeOf_m);
        load_methode();
    }, 4000);
  });
}
load_methode();

function load_materiel()
{
   $(document).ready(function(){
    var path = "#materielMessage";
    var typeOf_m = "materiel";
    setTimeout( function(){
        loadMessage(path, typeOf_m);
        load_materiel();
    }, 4000);
  });
}
load_materiel();

function load_malade()
{
   $(document).ready(function(){
    var path = "#maladeMessage";
    var typeOf_m = "malade";
    setTimeout( function(){
        loadMessage(path, typeOf_m);
        load_malade();
    }, 4000);
  });
}
load_malade();

function load_mainoeuvre()
{
   $(document).ready(function(){
    var path = "#mainoeuvreMessage";
    var typeOf_m = "mainoeuvre";
    setTimeout( function(){
        loadMessage(path, typeOf_m);
        load_mainoeuvre();
    }, 4000);
  });
}
load_mainoeuvre();

function load_milieu()
{
   $(document).ready(function(){
    var path = "#milieuMessage";
    var typeOf_m = "milieu";
    setTimeout( function(){
        loadMessage(path, typeOf_m);
        load_milieu();
    }, 4000);
  });
}
load_milieu();
