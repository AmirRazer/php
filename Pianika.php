<?php
require_once 'MusikTekan.php';
require_once 'MusikTiup.php';

class Pianika implements MusikTekan,MusikTiup{
    public function tiup(){
        echo '</br>Pianika  ditiup Saja Suaranya pfut....puft';
    }
    public function tekan(){
        echo '</br>Pianika  ditiup lalu di tekan suaranya net...nott..net..not';
    }
}
?>