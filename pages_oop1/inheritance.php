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


	class Customer extends Person {
		private $balance;

		public function __construct($name, $email, $balance) {
			$this->balance = $balance;
			parent::__construct($name, $email, $balance);
			echo 'A new ' . __CLASS__ . ' has been created ';
		}

		public function setBalance($balance) {
			$this->balance = $balance;
		}

		public function getBalance() {
			return 'Balance: ' . $this->balance .'<br />';
		}
	}

	$customer = new Customer('Federex Potolin', 'asd@gmailcom', 300);

	echo $customer->getBalance();




?>