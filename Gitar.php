<?php
require_once 'MusikPetik.php';

class Gitar implements MusikPetik{
    public function petik(){
        echo 'Gitar dipetik Suaranya Jreng...Jreng...Jrett...';
    }
}
?>