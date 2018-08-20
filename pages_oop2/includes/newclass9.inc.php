<?php

	class Users {
		// Properties and Methods goes here
		public $firstname;
		public $surname;
		public $hairColor;
		public $eyeColor;


		public function __construct($firstname, $surname, $hairColor, $eyeColor) {
			$this->firstname = $firstname; 
			$this->surname = $surname; 
			$this->hairColor = $hairColor; 
			$this->eyeColor = $eyeColor; 
		}

		public function userData() {
			return $this->firstname . " ". $this->surname . '<br />' . $this->hairColor . " ". $this->eyeColor;
		}

		public function __destruct() {

		}


	}


	

?>