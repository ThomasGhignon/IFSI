function addTextarea()
{
  $(document).ready(function(){
    $(".textareaButton").click(function(){
      var name = $(this).attr('name');
      console.log(name);
      $("."+name+"Area").append('<textarea placeholder="Lorem ipsum..." name="" id="" cols="30" rows="3"></textarea>');
    });
  });
}
addTextarea();

function removeTextarea()
{
  $(document).ready(function(){
    $(".textareaButtonRemove").click(function(){
      var name = $(this).attr('name');
      console.log(name);
      $(this).parent('div')remove();
    });
  });
}
removeTextarea();
