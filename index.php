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
         require_once 'components/Navigation.php';
         $navigation = new Navigation();
         $navigation->render();
         ?>

        <!-- Page content-->
        <div id="pageContent" class="container">
            <div class="text-center mt-5">
                <h1>Welcome to Clicker.IO</h1>
                <h2>Get ready to test your clicking speed!!!</h2>
                
                
                <h2>LogIn or SignUp to start playing</h2>
                
                <form action="/handlers/loginHandler.php" method="post">
                    
                    <p>Enter your username:</p>
                    <input type="text" name="username" placeholder="Type your username here">
    
                    <p>Enter your Password:</p>
                    <input type="password" name="password" placeholder="Type your password here">
                    <p></p>

                    
                    <input type="submit" value="Log In" name="BTN_login">

                    <hr>
                       <?php
                       if (isset($_SESSION['message']['loggedIn'])) {
                           echo $_SESSION['message']['loggedIn'];
                           $_SESSION['message']['loggedIn'] = '';
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

