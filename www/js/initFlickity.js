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
      $('.advancement_stat').text(page5Advancement[index][0]);
      $('.advancement_goal').text(page5Advancement[index][1]);
      $('.admin_goal').text(page5Advancement[index][1]);
    });
  });
}
initFlickity();
