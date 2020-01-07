function adminSelect()
{
  $(document).ready(function(){
    $('nav span').click(function(){
      $('nav span').parent().removeClass('is-select');
      $(this).parent().addClass('is-select');
    });
  });
}
adminSelect();
