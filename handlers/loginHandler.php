<?php require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';


//simulated database
$usernameDB = "Brandon";
$passwordDB = "Shark";


if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['BTN_login'])){
		if($usernameDB == $_POST['username'] && $passwordDB == $_POST['password']) {
				$_SESSION['status']['loggedIn'] = "y";
				$_SESSION['status']['time'] = date('Y-m-d H:i:s');
				$_SESSION['user']['username'] = $_POST['username'];
				$_SESSION['message']['loggedIn'] = "Congrats, you are logged in.";
				header('Location: /views/game/NewGame.php');
				exit;
		} else {
			$_SESSION['status']['loggedIn'] = "n";
			$_SESSION['message']['loggedIn'] = "Username and/or password did not match our records.";
			header('Location: /index.php');
			exit;
		}

} else {
	$_SESSION['status']['loggedIn'] = "n";
	$_SESSION['message']['loggedIn'] = "You did not log in correctly. Try again.";
	header('Location: /index.php');
	exit;
}






// Pretty var-dump of the $_POST array
echo '<pre>';
var_dump($_POST);
echo '</pre>';

?>