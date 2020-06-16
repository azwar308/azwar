<?php
$nilai = 7;
$keterangan = 'Nilai anda $nilai';
switch (true)
{
	case ($nilai <60) :
		$predikat = 'Selamat anda tidak lulus hahaha <br/>';
		break;
	case ($nilai >=60 && $nilai <= 69) :
		$predikat = 'C <br/>';
		break;
	case ($nilai >=70 && $nilai <= 79) :
		$predikat = 'B <br/>';
		break;
	case ($nilai >=80 && $nilai <=100) :
		$predikat = 'A <br/>';
	default : 
		$predikat = 'Masukkan nilai yang sesuai';
}
echo $keterangan . $predikat;