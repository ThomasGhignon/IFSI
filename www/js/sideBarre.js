function sideBarre_change(progress)
{
  $(document).ready(function(){
    $('.hiddenBarre').animate({height: progress}, "slow");
  });
}
