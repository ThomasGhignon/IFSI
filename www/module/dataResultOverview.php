<?php
$request = $bdd->query('SELECT * FROM data_result ORDER BY ID DESC LIMIT 1 ');

while($resultData = $request->fetch()){
  $name_show = $resultData['name'];
  $page2_time_show = $resultData['page2_time'];
  $page2_error_show = $resultData['page2_error'];
  $page3_time_show = $resultData['page3_time'];
  $page3_error_show = $resultData['page3_error'];
  $page4_time_show = $resultData['page4_time'];
  $page4_error_show = $resultData['page4_error'];
  $page5_time_show = $resultData['page5_time'];
  $page5_error_show = $resultData['page5_error'];
}
?>
<div class="resultContainer">
  <div class="resultData">
    <div>
      <span>Etape 1</span>
      <span>
        <img src="img/hourglass.svg" alt="error">
        <span>
          <?php echo round($page2_time_show/60);?>
        </span>
        <span class="timeUnit">min</span>
      </span>
      <span>
        <img src="img/stop.svg" alt="error">
        <p>
          <?php echo $page2_error_show;?>
        </p>
      </span>
    </div>
    <div>
      <span>Etape 2</span>
      <span>
        <img src="img/hourglass.svg" alt="error">
        <span>
          <?php echo round($page3_time_show/60);?>
        </span>
        <span class="timeUnit">min</span>
      </span>
      <span>
        <img src="img/stop.svg" alt="error">
        <p>
          <?php echo $page3_error_show;?>
        </p>
      </span>
    </div>
    <div>
      <span>Etape 3</span>
      <span>
        <img src="img/hourglass.svg" alt="error">
        <span>
          <?php echo round($page4_time_show/60);?>
        </span>
        <span class="timeUnit">min</span>
      </span>
      <span>
        <img src="img/stop.svg" alt="error">
        <p>
          <?php echo $page4_error_show;?>
        </p>
      </span>
    </div>
    <div>
      <span>Etape 4</span>
      <span>
        <img src="img/hourglass.svg" alt="error">
        <span>
          <?php echo round($page5_time_show/60);?>
        </span>
        <span class="timeUnit">min</span>
      </span>
      <span>
        <img src="img/stop.svg" alt="error">
        <p>
          <?php echo $page5_error_show; ?>
        </p>
      </span>
    </div>
  </div>
  <div class="linkRestart">
    <div>
      <a href="http://<?php echo($ipLocal); ?>/ifsi/www/">Rejouer</a>
    </div>
  </div>
</div>
