<?php
namespace App;
class Matriz{
	public $matriz = array();
	public $fil;
	public $col;

	public function __construct($m, $n){
		$this->fil=$m;
		$this->col=$n;
	}
	public function fill_one(){

		$this->matriz = array(
    		array('o','i','e'),
    		array('i','i','x'),
    		array('e','x','e')
    	);
	}
	public function fill_two(){
	
		$this->matriz = array(
    		array('e','i','o','i','e','i','o','e','i','o')
    	);
	}
	public function fill_three(){

		$this->matriz = array(
    		array('e','a','e','a','e'),
    		array('a','i','i','i','a'),
    		array('e','i','o','i','e'),
    		array('a','i','i','i','a'),
    		array('e','a','e','a','e')
    	);
	}
	public function fill_four(){

		$this->matriz = array(
    		array('o','x'),
    		array('i','o'),
    		array('e','x'),
    		array('i','i'),
    		array('o','x'),
    		array('i','e'),
    		array('e','x'),
    	);
	}
}

?>