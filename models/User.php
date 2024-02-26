<?php

class User {
		private $username;
		private $passwordHash;
		private $firstName;
		private $lastName;
		private $email;
		private $profilePicture;
		private $bio;

		public function __construct($username, $passwordHash, $firstName, $lastName, $email, $profilePicture, $bio) {
				$this->username = $username;
				$this->passwordHash = $passwordHash;
				$this->firstName = $firstName;
				$this->lastName = $lastName;
				$this->email = $email;
				$this->profilePicture = $profilePicture;
				$this->bio = $bio;
		}

		// Example of a method: Update the user's bio
		public function updateBio($newBio) {
				$this->bio = $newBio;
		}

		// Add more methods related to user behavior here
}
