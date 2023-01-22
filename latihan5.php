<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container px-5 my-5">
<h3 align="center">Kalkulator Ku</h3>
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="latihan5.php">
        <div class="form-floating mb-3">
            <input class="form-control" id="angka1" name="angka1" type="text" placeholder="Angka 1" data-sb-validations="required" />
            <label for="angka1">Angka 1</label>
            <div class="invalid-feedback" data-sb-feedback="angka1:required">Angka 1 is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="angka2" name="angka2" type="text" placeholder="Angka 2" data-sb-validations="required" />
            <label for="angka2">Angka 2</label>
            <div class="invalid-feedback" data-sb-feedback="angka2:required">Angka 2 is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="hasil" name="hasil" type="text" placeholder="Hasil" data-sb-validations="required" disabled 
            />
            <label for="hasil">Hasil</label>
            <div class="invalid-feedback" data-sb-feedback="hasil:required">Hasil is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary btn-sm" name="proses" type="submit"valur="+">+</button>
            <button class="btn btn-success btn-sm" name="proses" type="submit"valur="-">-</button>
            <button class="btn btn-warning btn-sm" name="proses" type="submit"valur="x">x</button>
            <button class="btn btn-danger btn-sm" name="proses" type="submit"valur="/">/</button>

        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<?php
//tangkap request
$a1 = $_POST['angka1'];
$a2 = $_POST['angka2'];
$tombol = $_POST['proses'];

// print_r($a1.'-'.$a2.'-'.$tombol);die();

//proses hitung
function hitung($a1, $a2, $tombol){
    if($tombol == '+') $hasil = $a1 + $a2;
    else if($tombol == '-') $hasil = $a1 - $a2;
    else if($tombol == '*') $hasil = $a1 * $a2;
    else if($tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;
}
//menampilkan hasil
// echo 'Hasil perhitungan =' .hitung($a1,$a2,$tombol);
//menampilkan hasil jikaa salah satu tombol sudah di klik
if(isset($tombol)){
?>
<div class="alert alert-primary" role="alert">
Hasil perhitungan  <?= $a1 ?> <?= $tombol ?> <?=$a2 ?> = <?= hitung($a1,$a2,$tombol)?>;
</div>
<?php } ?>