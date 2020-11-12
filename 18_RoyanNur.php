<?php 
//Array Numerik dan Assosiatif
//$namaanak = ["Satria", "Arsyi", "Dhika", "Evan", "Fabian", "Irfan"];

//Tampilkan Array
// print_r($namaanak);

// Array Numerik

$namaanak = [
["Nama" => "Satria", "Kelas" => "RPL 1"],
["Nama" => "Arsyi", "Kelas" => "RPL 2"],
["Nama" => "Dhika", "Kelas" => "RPL 3"], 
["Nama" => "Evan", "Kelas" => "RPL 4"],
["Nama" => "Fabian", "Kelas" => "RPL 5"], 
["Nama" => "Irfan", "Kelas" => "RPL 6"]
];

 //Tampilkan Array
 foreach ($namaanak as $na) {
        echo "Nama : <b>".$na["Nama"],"</b>";
        echo " Kelas : <b>".$na["Kelas"], "</b><br>";
    }
 ?>