<?php 

class komputer{

	public $prosesor;
	public $memory;

	public function __construct($prosesor, $memory = "12gb")
	{
		$this->prosesor = $prosesor;
		$this->memory = $memory;
	}
	public function getcetak(){
		return "$this->prosesor, $this->memory";
	}


}


$komputersaya = new komputer("core i7", "8 GB");
echo $komputersaya->prosesor;
echo "|";
echo $komputersaya->memory;



 ?>