function testSelect()
{
  $(document).ready(function(){
    $(".selectMethode>option").click(function(){
      var classOption =$(this).attr('value');
      console.log(classOption);
    });
  });
}
testSelect();
