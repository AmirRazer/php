<?php
//array scalar (1 dimensi)
$b1 = ['kode'=>'a1','buah'=> 'apel','harga'=>25000,'jml'=>5];
$b2 = ['kode'=>'a2','buah'=> 'anggur','harga'=>45000,'jml'=>4];
$b3 = ['kode'=>'a3','buah'=> 'belimbing','harga'=>15000,'jml'=>10];
$b4 = ['kode'=>'a4','buah'=> 'bengkuang','harga'=>10000,'jml'=>8];
$b5 = ['kode'=>'a5','buah'=> 'cerry','harga'=>35000,'jml'=>12];
$b6 = ['kode'=>'a6','buah'=> 'anggun','harga'=>45000,'jml'=>15];

$ar_judul = ['No','Kode','Buah','Harga/Kg','Jumlah Beli','Harga Kotor',
'Diskon','Jumlah Beli'];

//array assosiative (> 1 dimensi)
$buah2an = [$b1,$b2,$b3,$b4,$b5,$b6];
//aggregate function in array
$jumlah_transaksi = count($buah2an);
$jml_kg = array_column($buah2an,'jml');
$jumlah_kg = array_sum($jml_kg);
$max_kg = max($jml_kg);
$min_kg = min($jml_kg);
$rata2 = $jumlah_kg / $jumlah_transaksi;
//keterangan
$keterangan = [
  'Jumlah Transaksi' =>$jumlah_transaksi,
  'Total Kg'=>$jumlah_kg,
  'Kg Tertinggi'=> $max_kg,
  'Jml Kg Terendah'=>$min_kg,
  'Rata2'=> $rata2
];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center">Daftar Buah</h3>
    <table class="table table-striped">
    <thead>
        <tr>
        <?php
        foreach($ar_judul as $jdl){
        ?>
        <th><?= $jdl ?></th>
        <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach($buah2an as $buah){
        //cari harga kotor
        $bruto = $buah['harga']* $buah['jml'];
        $diskon = ($buah['buah']=='anggur' && $buah['jml']>=10) ? 0.2 : 0.1;
        $hrg_diskon =$diskon * $bruto;
        $netto = $bruto -$hrg_diskon
    ?>
        <tr>
        <td><?= $no ?> </td>
        <td><?= $buah['kode'] ?>  </td>
        <td><?= $buah['buah'] ?>  </td>
        <td><?= $buah['harga'] ?> </td>
        <td><?= $buah['jml'] ?> </td>
        <td><?= $bruto ?> </td>
        <td><?= $hrg_diskon ?> </td>
        <td >Rp. <?=number_format ($netto,0,',','.') ?> </td>
    
        </tr>
    <?php $no++; } ?>
    </tbody>
    <tfoot>
    <?php
    foreach($keterangan as $ket => $hasil){
    ?>
        <tr>
        <th colspan="7"><?= $ket ?></th>
        <th><?= $hasil ?></th>

        </tr>
    <?php } ?>
    </tfoot>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>