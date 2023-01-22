<?php
require_once 'Gitar.php';
require_once 'Piano.php';
require_once 'Seruling.php';
require_once 'Pianika.php';

$gitar = new Gitar();
$piano = new Piano();
$seruling = new Seruling();
$pianika = new Pianika();

$gitar->petik();
$piano->tekan();
$seruling->tiup();
$pianika->tiup();
$pianika->tekan();


?>