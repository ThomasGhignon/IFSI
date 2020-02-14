function startCountdown(timestamp, barre, root, path)
{
  $(document).ready(function(){
    $(".buttonVideo").click(function(){
      localStorage.setItem("time", timestamp);
      progressGame(timestamp, barre, root, path);
    });
  });
}
