function countdownParam(time)
{
  $(document).ready(function(){
    var duree = time;
    countdown(duree);
  });
}

function countdown(duree)
{
  localStorage.setItem("time", duree);
  s=duree;
  m=0;h=0;
  if(s<0)
  {

  }
  else
  {
    if(s>59)
    {
      m=Math.floor(s/60);
      s=s-m*60
    }

    if(m>59)
    {
      h=Math.floor(m/60);
      m=m-h*60
    }

    if(s<10)
    {
      s="0"+s
    }

    if(m<10)
    {
      m="0"+m
    }
  }

  duree=duree-1;
  $('#timer').html("<span>"+m+":"+s+"</span>")
  window.setTimeout("countdown("+duree+");",1000);
}
