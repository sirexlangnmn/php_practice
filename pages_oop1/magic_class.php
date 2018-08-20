<?php
	class Person {
		private $name;
		private $email;	
	

		public function __construct($name, $email) {
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__ . ' Created <br />';
		}

		public function __destruct() {
			echo __CLASS__ . ' Destroyed <br />';
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return 'Name: ' . $this->name .'<br />';
		}



		public function setEmail($email) {
			$this->email = $email;
		}

		public function getEmail() {
			return 'Email: ' . $this->email .'<br />';
		}

	}

	$person = new Person('Federex Potolin', 'asd@gmailcom');


	echo $person->getName();
	echo $person->getEmail();



?>