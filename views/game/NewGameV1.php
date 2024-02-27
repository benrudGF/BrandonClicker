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

          <div class="row mt-3">
            <div class="col-sm">
                <div id="scoreGame" style="font-size:64px;">0</div>
            </div>
            <div class="col-sm">
              <h2>Player's Name</h2>
            </div>
            <div class="col-sm">
                <div id="timer" style="font-size:64px;"></div>
            </div>
          </div>
        <div class="row mt-3">
            <div class="col-sm">

            </div>
            <div class="col-sm">
              <button id="clickMe" style="font-size: 50px; padding: 10px 20px;">Click Me!</button>
              <br>
              <button id="resetMe" style="font-size: 50px; padding: 10px 20px;">Reset</button>
            </div>
            <div class="col-sm">

            </div>
          </div>




    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/public/scripts.js"></script>
    <script src="/public/js/game.js"></script>
</body>
</html>
