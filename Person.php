<?php
class Person {
//memberi variabel
public $nama;
public $gender;
//member2 constructor

public function __construct($nama,$gender){
    $this->nama = $nama;
    $this->gender = $gender;
}
public function mencetak(){
    echo 'Nama: ' .$this->nama;
    echo '<br/> Jenis Kelamin: '.$this->gender;
    
}

}

?> 