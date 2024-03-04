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
            require_once $_SERVER['DOCUMENT_ROOT'] . '/components/Navigation.php';
         $navigation = new Navigation();
         $navigation->render();
         ?>

        <!-- Page content-->
        <div id="pageContent" class="container">

            <div class="text-center mt-5">
                <h1>Welcome to Clicker.IO</h1>
                <h2>Choose to log In or Sign Up</h2>


               
                <form action="/handlers/registrationHandler.php" method="post">
                    <p>Enter your Emailaddress:
                    <input type="email" name="email" placeholder="Type your Emailaddress here"></p>
                    
                    <p>Enter your username:
                    <input type="text" name="username" placeholder="Type your username here"></p>

                    <p>Enter your Password:
                    <input type="password" name="password" placeholder="Type your password here"></p>

                    <p>Verify your Password:
                    <input type="password" name="passwordV" placeholder="Retype your password here"></p>
                    <p></p>


                    <input type="submit" value="Sign Up" name="BTN_Signup">

                    <hr>
                       <?php
                       if (isset($_SESSION['message']['signupError'])) {
                           echo $_SESSION['message']['signupError'];
                           $_SESSION['message']['signupError'] = '';
                       }
                       ?>


                </form>


            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

