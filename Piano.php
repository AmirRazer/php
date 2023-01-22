<?php
require_once 'MusikTekan.php';

class Piano implements MusikTekan{
    public function tekan(){
        echo 'Piano ditekan Suaranya ting...ting...ting';
    }
}
?>