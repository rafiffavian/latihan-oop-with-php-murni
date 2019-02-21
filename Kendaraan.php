<?php 
	class Kendaraan{

		//ciri fisik
		protected $roda;
		protected $warna;
		protected $berat;

		//non fisik
		private $kecepatan;
		private $emisi;

		public function caraJalan()
		{
			return "Cara jalan kendaraan";
		}

		public static function cobaStatic($roda, $warna, $berat)
		{
			echo "Jumlah Roda $roda \n";
			echo "Warna $warna \n";
			echo "Berat $berat Kg \n";
		}

	}
 ?>