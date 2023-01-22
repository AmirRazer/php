<?php
require 'Bank.php';
//ciptakan objek
$amir = new Bank('001','Amir',50000000000);
$mahmud = new Bank('002','Mahmud',7000000);
$bagus = new Bank('003','Bagus',20000000);
$hasan = new Bank('004','Hasan',10000000);

//use member class
// echo $mahmud->nama;
$amir->menabung(300000);
$mahmud->menabung(300000);

$bagus->menarik(300000);
$hasan->menarik(300000);

echo '<h3 align="center>'.Bank::BANK.'</h3>';
$amir->mencetak();
$mahmud->mencetak();
$bagus->mencetak();
$hasan->mencetak();
echo 'Jumlah Nasabah'.Bank::$jml;


?>