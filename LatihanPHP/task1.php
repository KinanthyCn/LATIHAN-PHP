<?php

$nickName = "Kinan"; 
$jumlahHurufNama = strlen($nickName); 
$today = date("d"); 

if ($jumlahHurufNama == ($today - 2)) {
    echo "Berhasil";
} elseif ($jumlahHurufNama < $today) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}
?>
