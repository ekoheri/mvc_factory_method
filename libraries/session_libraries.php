<?php
class session_libraries extends products {
	function __construct() {
		if(!session_start()) session_start();
	}

	function set($key,$val) {
	   $_SESSION[$key] = $val;
	}

	function _unset(){
	   
	   $_SESSION = array();
	}

	function get($key) {
	   
	   if(!empty($_SESSION[$key])){
	   	return $_SESSION[$key];
	   }else{
	   	return false;
	   }
	}

	function set_data($data = array()) {
	   if(is_array($data))
	   {
		  foreach($data as $key=>$val)
		  {
		  $_SESSION[$key] = $val;
		  }
	   }
	}
	function sess_destroy(){
	session_destroy();
	}
}//end of the class..
?>
