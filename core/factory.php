<?php
class factory {
	private static $instance = array();
	private static $configuration;
	public static function setConfig($value){
		self::$configuration = $value;
	}
	public static function factoryMethod($key){
		if(!isset(self::$instance[$key])) {
			require 'applications/config/'.self::$configuration.'.php';
			extract($config[$key]);
			require $path;
			self::$instance[$key] = new $class;
		}
		self::$instance[$key]->SetMethodConfig($config[$key]['method']);
		return self::$instance[$key];
	}
}
?>
