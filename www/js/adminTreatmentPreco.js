function ctrl_adminTreatment()
{
  $(document).ready(function(){
    $('body').on("click", '.messageContainer input', function(){
      var inputVal = $(this).attr("name");
      var inputClass = $(this).attr("class");
      var input = $(this);
      var classM = $(this).parents(".messageContainer").attr("id");

      if ($(this).attr("class") == "input_validated") {
        view_adminTreatment("validated", "treatment", inputClass, inputVal, input);
        updateClassMessage(inputVal, "validated", classM);
      }
      if ($(this).attr("class") == "input_incomplete") {
        view_adminTreatment("incomplete", "treatment", inputClass, inputVal, input);
        updateClassMessage(inputVal, "incomplete", classM);
      }
      if ($(this).attr("class") == "input_declined") {
        view_adminTreatment("declined", "treatment", inputClass, inputVal, input);
        updateClassMessage(inputVal, "declined", classM);
      }
    });
  });
}
ctrl_adminTreatment();

function view_adminTreatment(status, allStatus, inputClass, inputVal, input)
{
  $("#"+inputVal).addClass(status);
  $("#"+inputVal).removeClass(allStatus);
  $(input).addClass(inputClass+"-select");
  $("input[name='"+inputVal+"']").not($(input)).remove();
}

function updateClassMessage(id, status, typeM)
{
  $.ajax({
      url : "module/updateClassMessage.php?id="+id+"&stat="+status+"&typeM="+typeM+"",
      type : "GET",
  });
}
