<?php
class controller1 extends controllers{
	function __construct(){
		$this->configuration = 'controller1_config';	
	}
	     
	function getbiodata(){
		$data = array();
		$data['mahasiswa'] = $this->getInstance('model')->method('select')->run(true);
		echo json_encode($data['mahasiswa'], JSON_PRETTY_PRINT);
	}
	function insertbiodata(){
		$json = json_decode(file_get_contents("php://input"));
		
		if(!is_object($json)) exit;

		$data = array(
			'nim' => $json->nim,
			'nama' => $json->nama,
			'jurusan' => $json->jurusan
		);

		$hasil = $this->getInstance('model')->method('insert')->parameter(array($data))->run(true);
		
		if($hasil == 1){
			$response = array(
				"Success" => true,
				"Info" => "Sukses menambah data"
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
		}
	}
	function updatebiodata(){
		$json = json_decode(file_get_contents("php://input"));
		
		if(!is_object($json)) exit;

		$data = array(
			'nim' => $json->nim,
			'nama' => $json->nama,
			'jurusan' => $json->jurusan
		);

		$hasil = $this->getInstance('model')->method('update')->parameter(array($data))->run(true);
		
		if($hasil == 1){
			$response = array(
				"Success" => true,
				"Info" => "Sukses menambah data"
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
		}
	}
	function hapusbiodata(){
		$json = json_decode(file_get_contents("php://input"));
		
		if(!is_object($json)) exit;

		$data = array(
			'nim' => $json->nim
		);

		$hasil = $this->getInstance('model')->method('delete')->parameter(array($data))->run(true);
		if($hasil == 1){
			$response = array(
				"Success" => true,
				"Info" => "Sukses menghapus data"
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
		}	
	}		
}
?>
