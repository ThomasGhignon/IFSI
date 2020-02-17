function initFlickity()
{
  $(document).ready(function(){
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      // disable previous & next buttons and dots
      prevNextButtons: false,
      pageDots: false,
      draggable: false,
      groupCells:1
    });

    var $carousel = $('.main-carousel ').flickity();

    $('.button-group').on( 'click', '.button', function() {
      var index = $(this).index();
      $carousel.flickity( 'select', index);
      $('.typeM>p').text($(this).text());
      if (page5Advancement[index] == true)
      {
        $('.validatedMessage').addClass("validatedMessage_show").removeClass("validatedMessage_hide");
        $('.statContainer').hide();
      }
      else
      {
        $('.validatedMessage').addClass("validatedMessage_hide").removeClass("validatedMessage_show");
        $('.statContainer').show();
        $('.advancement_stat').text(page5Advancement[index][0]).show();
        $('.advancement_goal').text(page5Advancement[index][1]).show();
      }
      $('.admin_goal').text(page5Advancement[index][1]);
    });
  });
}
initFlickity();
