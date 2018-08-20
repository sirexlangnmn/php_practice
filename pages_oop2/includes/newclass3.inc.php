<?php

	class NewClass {
		// Properties and Methods goes here
		public $data = 'No data found';

		public function setData($new_data) {
			 $this->data = $new_data;
		}

		public function getData() {
			return $this->data;
		}

	}


	/*
		Pagkaintindi ko:
		public $data = 'No data found';
		Kapag walang natanggap na data, yan ang default value.

		si setData, sya ang tatanggap ng input data. Tapos ma-overwrite nya pansamantala yung default value. Pag walang new data, default value ni $data nag lalabas.
		Kaya pag binura ko yung $object->setData("This is New Data 2"); sa index.php at wala syang nakuhang data, lalabas ang default value ni $data.

		si getData naman ang taga kuha ng laman ng $data. Paki basa na lang uli yung explanation ko flow ni setData para malaman kung ano ang output ni getData.


	*/

?>