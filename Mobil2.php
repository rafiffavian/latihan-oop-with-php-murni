<?php 

	class Mobil2{

		public $namaMobil;
		public $spion;
		public $roda;
		public $bahanBakar;
		public $kapasitasPenumpang;
		private $kecepatanMaksimal;

		public function __construct($namaMobil,$spion,$roda,$kapasitasPenumpang,$bahanBakar)
		{
			$this->namaMobil = $namaMobil;
			$this->spion = $spion;
			$this->roda = $roda;
			$this->bahanBakar = $bahanBakar;
			$this->kapasitasPenumpang = $kapasitasPenumpang;
		}

		public function cetak()
		{
			echo "\n=======Mobil $this->namaMobil=============\n";

			echo "Jumlah Spion : $this->spion \n";
			echo "Jumlah Roda : $this->roda \n";
			echo "Jumlah kapasitas : $this->kapasitasPenumpang \n";
			echo "Jumlah bahan bakar : $this->bahanBakar \n";
			echo "kecepatanMaksimal : $this->kecepatanMaksimal \n";
			
			echo "\n====================\n";
		}

		public function setKecepatanMaksimal($kecepatanMaksimal)
		{
			$this->kecepatanMaksimal = $kecepatanMaksimal;
		}

	}

 ?>