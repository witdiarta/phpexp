<?php
function pembulatan($uang, $pembulat) {
 
 $bulat = $uang % $pembulat;
 
 $akhir = $uang + ($pembulat-$bulat);
 
 return $akhir;
}

$uang = 42225;

$pembulat = 500;

$bayar = 50000;

//sebelum pembulatan pembulatan
echo 'Sub Total : Rp. '.number_format($uang, 2, ',', '.').'<br><br>';

// nilai pembulatan
$dibulatkan = pembulatan($uang, $pembulat) - $uang;

echo 'Pembulatan : Rp. '.number_format($dibulatkan, 2, ',', '.').'<br><br>';

// setalah pembulatan
echo 'Total : Rp. '.number_format(pembulatan($uang, $pembulat), 2, ',', '.').'<br><br>';

// pembayaran
echo 'Bayar : Rp. '.number_format($bayar, 2, ',', '.').'<br><br>';

// pengembalian
$kembali = $bayar - pembulatan($uang, $pembulat);

echo 'Kembali : Rp. '.number_format($kembali, 2, ',', '.').'<br><br>';

echo 'Mohon pembulatan diikhlaskan untuk pembelian mobil dan rumah baru pemilik toko';
?>