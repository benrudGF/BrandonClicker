<?php require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bare - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/public/css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Responsive navbar-->
    <?php
    require_once __DIR__ . '/../../components/Navigation.php';
     $navigation = new Navigation();
     $navigation->render();
     ?>

    <!-- Page content-->
    <div id="pageContent" class="container">

         <!DOCTYPE html>
         <html>
           <head>
             <title>Timer Page</title>
           </head>
           <body>
               <?php
               if (isset($_SESSION['message']['loggedIn'])) {
                   echo $_SESSION['message']['loggedIn'];
                   $_SESSION['message']['loggedIn'] = '';
               }
               ?>
               
             <h1>Timer/clicker</h1>
             <div id="timer">30</div>
             <div id="score">0</div>
             <hr>
             <button id="clicker">Click Me!</button>
             <!-- Add the reset button -->
             <button id="reset">Reset</button>
             <script>
               var isTimerRunning = false;
               var countdown;

               document.getElementById('clicker').addEventListener('click', function() {
                   if (!isTimerRunning) {
                       var timer = document.getElementById('timer');
                       countdown = setInterval(function() {
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
                 if (parseInt(document.getElementById('timer').textContent) !== 0) {
                     score.textContent = parseInt(score.textContent) + 1;
                 }
             });

             // Reset button functionality
             document.getElementById('reset').addEventListener('click', function() {
                 clearInterval(countdown); // Stop the countdown
                 document.getElementById('timer').textContent = '30'; // Reset the timer
                 document.getElementById('score').textContent = '0'; // Reset the score
                 isTimerRunning = false; // Set the timer running state to false
             });
             </script>
           </body>
         </html>

        <!-- Include the external game.js file -->
        <script src="game.js"></script>

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
