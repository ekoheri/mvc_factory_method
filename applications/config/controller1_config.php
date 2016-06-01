<?php
$config = array();

$config['model'] = array(
	'path' => 'applications/models/mymodel.php',
	'class' => 'mymodel',
	'method' => array (
		'select' => 'selectMahasiswa', 
		'insert' => 'insertMahasiswa',
		'update' => 'updateMahasiswa',
		'delete' => 'deleteMahasiswa'
	)
);

$config['view'] = array(
	'path' => 'libraries/view_libraries.php',
	'class' => 'view_libraries',
	'method' => array (
		'show' => 'load'
	)
);
?>
