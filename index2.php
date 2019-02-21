<?php 
	
	require "Interface/TransportasiInterface.php";
	require "Kendaraan.php";
	require "Kereta.php";
	require "Pesawat.php";
	require "KapalLaut.php";

	// $jumlahPenumpang = 4;
	// $angkutanPublik = new Pesawat;

	// echo "Kapasitas Penumpang: ". $angkutanPublik->kapasitasPenumpang()."\n";
	// echo "Harga Satuan Tiket : ". $angkutanPublik->harga(). "\n";
	// echo "Total Harga Tiket : ". $angkutanPublik->totalHarga($jumlahPenumpang). "\n";

	$kapalFerry = new KapalLaut;
	$kapalFerry->setWarna("Hijau");

	$kapalRoro = new KapalLaut;
	$kapalRoro->setWarna("Biru");

	echo "Kapal Ferry Warna :".$kapalFerry->getWarna(). "\n";
	echo "Kapal Roro Warna :".$kapalRoro->getWarna(). "\n";

 ?>