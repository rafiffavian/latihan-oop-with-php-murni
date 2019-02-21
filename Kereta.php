<?php 

	class Kereta extends Kendaraan implements TransportasiInterface{

		public function jenisTransportasi(){

			return "Darat";
		}
		
		public function kapasitasPenumpang(){
			return "1000 Orang";
		}
		
		public function harga(){

			return 800;
		}
		
		public function totalHarga($jumlahPenumpang){

			return $this->harga() * $jumlahPenumpang;
		}	
	}

 ?>