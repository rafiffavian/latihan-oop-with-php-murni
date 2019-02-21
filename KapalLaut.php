<?php 

	class KapalLaut extends Kendaraan implements TransportasiInterface{

		private static $warna2;

		public function setWarna($warna)
		{
			$this->warna = $warna;
		}
		public function getWarna()
		{
			return $this->warna;
		}

		public function jenisTransportasi(){

			return "Laut";
		}
		
		public function kapasitasPenumpang(){
			return "500 Orang";
		}
		
		public function harga(){

			return 400;
		}
		
		public function totalHarga($jumlahPenumpang){

			return $this->harga() * $jumlahPenumpang;
		}	

		public static function setWarna2($warna)
		{
			self::$warna2= $warna;
		}
		public function getWarna2()
		{
			return self::$warna2;
		}
	}

 ?>