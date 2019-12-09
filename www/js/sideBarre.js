function sideBarre_change(progress/*, old*/)
{
  //$('.hiddenBarre').css("height", old);
  $(document).ready(function(){
    $('.hiddenBarre').animate({height: progress}, "slow");
  });
}
