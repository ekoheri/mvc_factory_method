<?php
class route {
	private $request = array();
	private $url_string = '';

	public function __construct() {
		$this->fecth_url_string();
		$this->SetRoute( $this->url_string);
	}

	/*
	*  __get adalah magic method bawaan PHP yg berfungsi untuk pemanggilan $router->GetAction() dirubah 
	*  menjadi $router->action 
	*/
	public function __get( $name ) {
		if( method_exists( $this, 'Get' . $name ))
			return $this->{'Get' . $name}();
		else
			return null;
	}

	private function fecth_url_string(){
            	$path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : @getenv('PATH_INFO');            
            	if (trim($path, '/') != '' && $path != "/".pathinfo(__FILE__, PATHINFO_BASENAME)) {
                	$this->url_string = $path;
                	return;
            	}
           	$path =  (isset($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : @getenv('QUERY_STRING');    
            	if (trim($path, '/') != '') {
                	$this->url_string = $path;
                	return;
            	}
	}

	private function SetRoute( $route ) {
		$route = trim( $route, '/' );
		$this->request = explode( '/', $route );
	}

	private function GetController() {
		$controller = '';		
		if( isset( $this->request[0] ))
			$controller = $this->request[0];
		return $controller;
	}

	private function GetMethod() {
		$method = '';		
		if( isset( $this->request[1] ))
			$method = $this->request[1];
		return $method;
	}

	private function GetParams() {
		if( count( $this->request ) > 2 )
			return array_slice ( $this->request, 2 );
		else
			return array();
	}

	private function GetPost() {
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}

	private function GetRequest() {
		return $this->request;
	}
}
?>
