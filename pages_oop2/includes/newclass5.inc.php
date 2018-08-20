<?php

	class NewClass {
		// Properties and Methods goes here
		public $data = 'No data found' . '<br />';


		// Initialize object’s properties
		// Mag work ito once na matawag yung class
		public function __construct() {
			echo 'This class has been instantiated.' . '<br />';
		}

		public function setData($new_data) {
			 $this->data = $new_data;
		}

		public function getData() {
			return $this->data;
		}

		// Clean up resources before PHP releases the object from the memory
		public function __destruct() {
			echo 'This class has been Destructor. This is the end of class.';
		}

	}


	

?>