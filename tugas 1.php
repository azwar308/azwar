<?php

$grade=40;

if ($grade < 60) {
	$hasil="selamat anda tidak lulus hahaha" ;}
elseif  ($grade>=60 && $grade<=69 ){
	$hasil= "C";}
elseif  ($grade>=70 && $grade<=79){
	$hasil= "B";}
elseif  ($grade>=80 && $grade<=100) {
	$hasil= "A";}
	
echo "nilai anda :$grade<br>";
echo "hasil:$hasil";

	
	



