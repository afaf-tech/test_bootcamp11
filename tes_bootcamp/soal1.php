<?php
 class Bio{
	public $data = [];
	 
	public function nama($nama){
 		$this->data['name'] = $nama;
 		return $this;
 	}
	
	public function umur($umur){
 		$this->data['age'] = $umur;
 		return $this;
 	}
	
	public function alamat($alamat){
 		$this->data['address'] = $alamat;
 		return $this;
 	}
	 
	public function hobi($hobi = array()){
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}

	public function menikah($menikah){
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
	
	public function sekolah($sekolah = array()){
 		$this->data['list_school'] = $sekolah;
 		return $this;
 	}
	
	public function kemampuan($kemampuan = array()){
 		$this->data['skills'] = $kemampuan;
 		return $this;
 	}
	
	public function minat_koding($minat_koding){
 		$this->data['interest_in_coding'] = $minat_koding;
 		return $this;
 	}
	 
	public function konjson(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}
 }

$biodata 	= new Bio();
$nama		= "Agung Maulana";
$umur		= 19;
$alamat		= "Jl. Pasar Ciluar Darmabakti No.10 RT.02 RW.01 Kec. Sukaraja Kab. Bogor Prov. Jawa Barat";
$hobi		= ['Ngoding','Gaming','Cycling'];
$sekolah	= [
				"name"     => "SMA Negeri 10 Wajo",
				"year_in"  => "2015",
				"year_out" => "2018",
				"major"    => "IPA"
			  ];
$kemampuan  = [
				"skill_name" => "Web and Java Dekstop",
				"level"      => "beginner"
			  ];

print_r($biodata->nama($nama)
				->umur($umur)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
				->kemampuan($kemampuan)
				->minat_koding(true)
				->konjson()
);

?>