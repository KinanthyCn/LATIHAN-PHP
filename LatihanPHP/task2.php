

<?php
$anggota = array("Kinanthy" => "494423", "Ashila" => "49878", "Salma" => "49321");
foreach($anggota as $nama => $nim) {
    if($nim % 2 == 0){
        echo "Nama : " . $nama . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Bagian : Back-End Developer" . "<br><br>";
    } else {
        echo "Nama : " . $nama . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Bagian : Front-End Developer" . "<br><br>";
    }
}
?>