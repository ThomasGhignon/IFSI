function showError(message, color)
{
  $('.errorMessage_container').append('<div class="errorMessage errorMessage_'+color+'"><span>Erreur :&nbsp;</span><span>'+message+'</span></div>');
  setTimeout(function()
  {
    if ($('.errorMessage_container') != '')
    {
      $('.errorMessage_container').empty();
    }
  }, 4000);
}

