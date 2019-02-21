<?php 

	require "Interface/TransportasiInterface.php";
	require "Kendaraan.php";
	require "Kereta.php";
	require "Pesawat.php";
	require "KapalLaut.php";

	KapalLaut::setWarna2("Hijau");
	echo "Kapal Roro Warna : " .KapalLaut::getWarna2()."\n";
	
	KapalLaut::setWarna2("Biru");

	echo "Kapal Ferry Warna : " .KapalLaut::getWarna2()."\n";

 ?>