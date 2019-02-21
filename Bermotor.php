<?php 
	
	// require('Kendaraan.php');

	class Bermotor extends Kendaraan{

		public function setWarna($warna)
		{
			$this->warna = $warna;
		}
		public function getWarna()
		{
			return $this->warna;
		}
		public function setRoda($roda)
		{
			$this->roda = $roda;
		}
		public function setBerat($berat)
		{
			$this->berat = $berat;
		}
		public function caraJalan()
		{
			return "jalan pake kaki";
		}

	}
 ?>