<?php
//array scalar agama
$ar_agama = [1=>'Islam','Kristen Katholik','Kristen Protestan','Hindu','Budha','Khonghuchu'];
$ar_jabatan = [1=>'Manager','Asisten Manager','Kepala Bagian','Staf'];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <form class="border border-light p-5" method="POST">

<p class="h4 mb-4 text-center">Form Inputt Pegawai</p>

<label for="nama">Nama</label>
<input type="text" name="nama" class="form-control mb-4" placeholder="Nama Mahasiwa">

<label for="matkul">Agama</label>
<select class="browser-default custom-select mb-4" name="agama">
    <option value="" disabled="" selected="">-- Pilih Agama --</option>
    <?php
    foreach ($ar_agama as $id => $agama){
        ?>
        <option value="<?= $id ?>"><?= $agama ?></option>
        <?php
    }
    ?>
</select>   
<br/>
<label for="nilai">Jabatan</label>

<?php
foreach($ar_jabatan as $jab ){


?>
<input type="radio" name="jabatan" value="<?= $jab ?>" class="form-check-input" /><?= $jab ?>
<?php } ?>
</br>
<button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>

<!-- <div class="text-center">
    <p>Not a member?
        <a href="">Register</a>
    </p>

    <p>or sign in with:</p>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a>
</div> -->
</form>
<?php 
//tangkap request form

$nama = $_POST['nama'];
$pelajaran = $_POST['matkul'];
$nilai = $_POST['nilai'];
$tombol = $_POST['proses'];
//tetntukan kelulusan
$ket = ($nilai >= 60 )?"lulus":"Gagal"; 
//tentukan grade nilai

if($nilai >= 85 && $nilai <=100)$grade = ' A';
else if($nilai >= 75 && $nilai <=85)$grade = ' B';
else if($nilai >= 60 && $nilai <=75)$grade = ' C';
else if($nilai >= 30 && $nilai <=60)$grade = ' D';
else if($nilai >= 0 && $nilai <=30)$grade = ' E';
else $grade = '';

//tentukan predikat

switch($grade){
    case 'A' : $predikat = 'Memuaskan';break;
    case 'B' : $predikat = 'Bagus';break;
    case 'C' : $predikat = 'Cukup';break;
    case 'D' : $predikat = 'Kurang';break;
    case 'E' : $predikat = 'Buruk';break;
    default: $predikat = '';
}

if(isset($tombol)){ ?>
<div class="alert alert-primary" role="alert">
<div class="body">
 Nama Mahasiswa : <?= $nama; ?>
 <br/>Matakuliah :<?= $pelajaran; ?>
 <br/>Nilai : <?= number_format($nilai, 2, ',', '.'); ?>
 <br/>Keterangan : <?= $ket; ?>
 <br/>Grade : <?= $grade; ?>
 <br/>Predikat : <?=  $predikat; ?>
</div>
</div>
<?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


