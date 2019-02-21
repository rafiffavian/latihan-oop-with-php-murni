<?php 
	
	class Pesawat extends Kendaraan implements TransportasiInterface{

		public function jenisTransportasi(){

			return "udara";
		}
		
		public function kapasitasPenumpang(){
			return "200 Orang";
		}
		
		public function harga(){

			return 10000;
		}
		
		public function totalHarga($jumlahPenumpang){

			return $this->harga() * $jumlahPenumpang;
		}	
	}
 ?>