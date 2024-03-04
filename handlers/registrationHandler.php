<?php require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordV'])&& isset($_POST['BTN_Signup'])){
	if ($_POST['password'] === $_POST['passwordV']) {
		$_SESSION['status']['registered'] = "y";
		$_SESSION['message']['loggedIn'] = "Congrats, you registered correctly. You can log in now.";


		$accountsFile = $_SERVER['DOCUMENT_ROOT'] . '/handlers/accountsData.json';
		$currentData = json_decode(file_get_contents($accountsFile), true);


		// Check if the user already exists
		$exists = false;
		foreach ($currentData as $account) {
				if ($account['email'] === $_POST['email'] || $account['username'] === $_POST['username']) {
						$exists = true;
						break;
				}
		}

		$uid = max(array_column($currentData, 'uid')) + 1;

		
		if (!$exists) {
				// Append new user data
				$currentData[] = [
						'email' => $_POST['email'],
						'username' => $_POST['username'],
						'password' => $_POST['password'],
						'uid' => $uid
				];

				// Save the updated data back to the JSON file
				file_put_contents($accountsFile, json_encode($currentData, JSON_PRETTY_PRINT));

		}

		

		// echo '<pre>';
		// var_dump($currentData);
		// echo '</pre>';
		
		
		header('Location: /index.php');
		exit;
	} else {
		// Passwords do not match
		$_SESSION['message']['signupError'] = 'Passwords do not match.';
		header('Location: /views/account/register.php');
		exit;
	}
}



// Pretty var-dump of the $_POST array
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

?>