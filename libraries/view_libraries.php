<?php
class view_libraries extends products {
	public function load ($filename, $parameter=array(), $return_string = false) {
		if(is_array($parameter))
			extract ($parameter);

		ob_start();
		include 'applications/views/'.$filename.'.php';
		$html = ob_get_contents();
		ob_end_clean();
		if($return_string) return $html;
		else echo $html;
	}
}
?>
