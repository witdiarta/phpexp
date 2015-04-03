<?php 

function CekPendaftaran($todays_date,$start_date,$end_date) {
 
$start_date = strtotime($start_date);
 
$end_date = strtotime($end_date);
 
$todays_date = strtotime($todays_date); 

if ($todays_date >= $start_date && $todays_date <= $end_date) {
 
return 0; //BUKA
 
}
 
else { 

if($todays_date < $start_date) { return 1; //BELUM 

}
 
else { return 2; //LEWAT 

} } }
 
//Cara memanggilnya 

$DATE_NOW = date("Y-m-d H:m:s"); 

$START_DATE ='2013-05-15 00:00:00';
 
$END_DATE ='2013-05-20 13:00:00';
 
$CekStatus=CekPendaftaran($DATE_NOW,$START_DATE,$END_DATE); // Sekarang $CekStatus memiliki nilai array yang terdiri dari 3 (0 atau 1 atau 2) 

if($CekStatus==1) // 1 BELUM BUKA 

{ echo "Belum Buka"; // Tuliskan pesan jika belum dibuka 
}
 
elseif($CekStatus==2) // 2 SUDAH TUTUP
 
{ 
echo "Sudah Tutup"; // Tuliskan pesan jika sudah ditutup 
} 

elseif($CekStatus==0) //0 SEDANG BUKA
 
{ echo "Sedang Buka"; //Munculkan form jika sedang dibuka
 
} 

?> 