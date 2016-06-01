<?php
class controller1 extends controllers{
	function __construct(){
		$this->configuration = 'controller1_config';		
	}
	function index(){
		$data = array();
		$data['nama'] = 'eko heri';

		$data['mahasiswa'] = $this->getInstance('model')->method('select')->run(true);
		$this->getInstance('view')->method('show')->parameter(array('view1', $data))->run(); 
	}
}
?>
