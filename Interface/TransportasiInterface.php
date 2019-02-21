<?php 
	
	interface TransportasiInterface{

		public function jenisTransportasi();
		
		public function kapasitasPenumpang();
		
		public function harga();
		
		public function totalHarga($jumlahPenumpang);

	}

 ?>