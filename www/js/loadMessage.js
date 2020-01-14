/*function loadMessage()
{
  $(document).ready(function(){
    setTimeout( function(){
        var id = $('.messageContainer div:last').attr('id');
        $.ajax({
            url : "module/load.php?id=" + id,
            type : "GET",
            success : function(html){
                $('.messageContainer').append(html);
            }
        });

        loadMessage();

    }, 1000);
  });
}
loadMessage();*/

function loadMessage(path, typeOf_m)
{
    var id = $(''+path+' div:last').attr('id');
    $.ajax({
        url : "module/load.php?typeOf_m="+typeOf_m+"&id=" + id,
        type : "GET",
        success : function(html){
            $(path).append(html);
        }
    });
}

function load_methode()
{
   $(document).ready(function(){
    var path = "#methodeMessage";
    var typeOf_m = "methode";
    setTimeout( function(){
        loadMessage(path, typeOf_m);

        load_methode();
    }, 1000);
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
    }, 1000);
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
    }, 1000);
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
    }, 1000);
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
    }, 1000);
  });
}
load_milieu();
