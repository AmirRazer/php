<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';

$d1 = new Dosen('Budi Santoso','Laki Laki','111','S.kom,.M.kom.');
$d2 = new Dosen('Siti Aminah','Perempuan','112','S.T,.M.T.');
$m1 = new Mahasiswa('Sri Rezki','Perempuan',5,'TI');
$m2 = new Mahasiswa('Amir','Laki Laki',5,'TI');

$data = [$d1,$d2,$m1,$m2];
foreach($data as $d){
    echo $d->mencetak();
}


?>