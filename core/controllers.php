<?php
class controllers {
	public function __set($name, $value){
		if(strtolower($name) == 'configuration')
			factory::setConfig($value); 
	}
	public function getInstance($value){
		return factory::factoryMethod($value);
	}
}
?>
