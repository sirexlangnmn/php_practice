<?php
	class Person {
		private $name;
		private $email;	
	
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

	$person = new Person;


	$person->setName('Federex Potolin');
	$person->setEmail('asd@gmail.com');


	echo $person->getName();
	echo $person->getEmail();


?>