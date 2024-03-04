<?php require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';


//simulated database (JSON FIEL)
$accountsFile = $_SERVER['DOCUMENT_ROOT'] . '/handlers/accountsData.json';
$currentData = json_decode(file_get_contents($accountsFile), true);

//learn how to check the login inputs agains the data in json file.
// Check if input username/password match the data in $currentData
$usernameDB = '';
$passwordDB = '';


foreach ($currentData as $account) {
		if ($account['username'] === $_POST['username']) {
				$usernameDB = $account['username'];
				$passwordDB = $account['password'];
				break;
		}
}


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
			$_SESSION['message']['loggedIn'] = "Usernameand/or password is incorrect. Or your account doesn't match our database";
			header('Location: /index.php');
			exit;
		}

} else {
	$_SESSION['status']['loggedIn'] = "n";
	$_SESSION['message']['loggedIn'] = "Enter your username and password to log in";
	header('Location: /index.php');
	exit;
}


if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['BTN_Signin']) && isset($_POST['Email'])){
    if($usernameDB == $_POST['username'] && $passwordDB == $_POST['password'] && $EmailaddressDB == $_POST['Email']) {
        $_SESSION['status']['SignedIn'] = "y";
        $_SESSION['status']['time'] = date('Y-m-d H:i:s');
        $_SESSION['user']['username'] = $_POST['username'];
        $_SESSION['message']['SignedIn'] = "Congrats, you are signed in.";
        header('Location: /views/game/NewGame.php');
        exit;
    } else {
      $_SESSION['status']['SignedIn'] = "n";
      $_SESSION['message']['SignedIn'] = "Username and/or password did not match our records.";
      header('Location: /index.php');
      exit;
    }

} else {
  $_SESSION['status']['SignedIn'] = "n";
  $_SESSION['message']['SignedIn'] = "You did not sign in correctly. Try again.";
  header('Location: /index.php');
  exit;
}



// Pretty var-dump of the $_POST array
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

?>