<!DOCTYPE html>
<html>
  <head>
    <title>Timer Page</title>
  </head>
  <body>
    <h1>Timer/clicker</h1>
    <div id="timer">30</div>
    <div id="score">0</div>
    <hr>
    <button id="clicker">Click Me!</button>
    <script>
      var isTimerRunning = false;
      document.getElementById('clicker').addEventListener('click', function() {
          if (!isTimerRunning) {
              var timer = document.getElementById('timer');
              var countdown = setInterval(function() {
                  timer.textContent = parseInt(timer.textContent) - 1;
                  if (parseInt(timer.textContent) === 0) {
                      clearInterval(countdown);
                  }
              }, 1000);
              isTimerRunning = true;
          }
      });


    document.getElementById('clicker').addEventListener('click', function() {
        var score = document.getElementById('score');
        score.textContent = parseInt(score.textContent) + 1;
    });
    </script>
  </body>
</html>