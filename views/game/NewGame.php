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
            <div class="text-center mt-5">
                <h1>Game Time</h1>
                <p class="lead">Click the button to start the game</p>
                <h1>Good luck, you will need it.</h1>

                <div id="timer" style="font-size:64px;">30</div>
                <script>
                    let countdown = 30;
                    const timer = setInterval(() => {
                        countdown--;
                        document.getElementById('timer').innerText = countdown;
                        if (countdown === 0) {
                            clearInterval(timer);
                            alert('Your time is Up');
                        }
                    }, 1000);
                </script>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
