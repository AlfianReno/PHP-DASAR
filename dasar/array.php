<?php 

$buah =['mangga', 'jeruk', 500, 'apel', 300, 2.5];

var_dump($buah);
echo "<br>";
echo $buah[1];
echo "<br>";

foreach ($buah as $key => $value) {
    # code...
    echo $key . "=>" . $value;
    echo "<br>";
}

// Array asosiatif

$harga = ['mangga'=>300, 'apel'=>200, 'jeruk'=>100];

var_dump($harga);

echo "<br>";

foreach ($harga as $key => $value) {
    # code...
    echo $key . " harganya " . $value;
    echo "<br>";

    
}

echo $harga ['mangga'];

$isi = array_keys($harga);
var_dump($isi);
echo "<br>";
echo $isi [0];


?>