<?php

	class NewClass {
		
		public static $firstname = 'Federex';
		public static $surname = 'Potolin';


		public static $firstname1 = 'Joyce';
		public static $surname1 = 'Vallesta';


		public static function staticMethod0() {
			return self:: $firstname1;
		}

		public static function staticMethod1() {
			return self:: $surname1;
		}


	}


	

?>