<?php
class products {
	private $method;
	private $args = array();
	private $config = array();
	public function SetMethodConfig($value){
		$this->config = $value;
	}
	public function method($value){
		$this->method = $this->config[$value];
		return $this;
	}
	public function parameter($value = array() ){
		$this->args = $value;
		return $this;
	}
	public function run($return = false){
		if ($return == true)
			return call_user_func_array(array($this, $this->method), $this->args);
		else
			call_user_func_array(array($this, $this->method), $this->args);
		$this->args = array();
	}
}
?>
