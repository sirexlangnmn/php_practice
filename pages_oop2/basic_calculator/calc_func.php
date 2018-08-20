<?php

class Calculate {
	public $num1;
	public $num2;
	public $mdas;

	public function __construct($num1, $num2, $mdas) {
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->mdas = $mdas;
	}

	public function calcMethod() {
		switch ($this->mdas) {
			case 'mul':
				$result = $this->num1 * $this->num2; 
				break;

			case 'div':
				$result = $this->num1 / $this->num2; 
				break;
				
			case 'add':
				$result = $this->num1 + $this->num2; 
				break;
				
			case 'sub':
				$result = $this->num1 - $this->num2; 
				break;			
			
			default:
				$result = 'Error';
				break;
		}
		return $result;
	}

}

?>