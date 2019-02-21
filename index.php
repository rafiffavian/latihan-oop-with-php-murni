<?php 

	require('Kendaraan.php');
	require('Mobil.php');
	require('Mobil2.php');
	require('Bermotor.php');
	require('TidakBermotor.php');


	//menggunakan construct

	// $mobilSedan = new Mobil2("sedan",2,4,4,"bensin");
	// $mobilSedan->bahanBakar="solar";
	// $mobilSedan->setKecepatanMaksimal(100);

	// $mobilTruk = new Mobil2("Truk",3,4,5,"solar");

	// $mobilBus = new Mobil2("Bus",1,2,3,"solar");

	// $mobilSedan->cetak(); //encapsulasi, yg rumit di bungkus, yg harusnya banyak jadi dikit
	// $mobilTruk->cetak();
	// $mobilBus->cetak();


	// $mobilSedan = new Mobil(); //kiri objek, kanan class
	// $mobilSedan->spion = 2;
	// $mobilSedan->roda = 4;
	// $mobilSedan->kapasitasPenumpang = 4;
	// $mobilSedan->bahanBakar = "Bensin";



	// $mobilTruk = new Mobil();
	// $mobilTruk->spion = 2;
	// $mobilTruk->roda = 8;
	// $mobilTruk->kapasitasPenumpang = 2;
	// $mobilTruk->bahanBakar = "Solar";

	// $mobilBus = new Mobil();
	// $mobilBus->spion = 2;
	// $mobilBus->roda = 8;
	// $mobilBus->kapasitasPenumpang = 12;
	// $mobilBus->bahanBakar = "Solar";

	// echo "Mobil Sedan Jumlah Spion : $mobilSedan->spion \n";
	// echo "Mobil Sedan Jumlah Roda : $mobilSedan->roda \n";
	// echo "Mobil Sedan Jumlah kapasitas : $mobilSedan->kapasitasPenumpang \n";
	// echo "Mobil Sedan Jumlah bahan bakar : $mobilSedan->bahanBakar \n";
	
	// echo "\n====================\n";

	// echo "Mobil Truk Jumlah Spion : $mobilTruk->spion \n";
	// echo "Mobil Truk Jumlah Roda : $mobilTruk->roda \n";
	// echo "Mobil Truk Jumlah kapasitas : $mobilTruk->kapasitasPenumpang \n";
	// echo "Mobil Truk Jumlah bahan bakar : $mobilTruk->bahanBakar \n";

	// echo "\n====================\n";

	// echo "Mobil Truk Jumlah Spion : $mobilBus->spion \n";
	// echo "Mobil Truk Jumlah Roda : $mobilBus->roda \n";
	// echo "Mobil Truk Jumlah kapasitas : $mobilBus->kapasitasPenumpang \n";
	// echo "Mobil Truk Jumlah bahan bakar : $mobilBus->bahanBakar \n";

	$mobil = new Bermotor;
	// $mobil->warna = "Hitam";
	// $mobil->berat = "1 kuintal";
	// $mobil->roda = 4;
	// $mobil->setWarna("Hitam");
	// $mobil->setRoda("4");
	// $mobil->setBerat("1 kuintal");

	echo $mobil->getWarna()."\n";
	echo $mobil->caraJalan()."\n";

	$sepeda = new TidakBermotor;

	echo $sepeda->caraJalan()."\n";

 ?>