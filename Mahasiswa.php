<?php
require_once'Person.php';
class Mahasiswa extends Person{

//memberi variabel
public $semester;
public $jurusan;
//member2 constructor

public function __construct($nama,$gender,$semester,$jurusan){
    parent::__construct($nama,$gender);
    $this->semester = $semester;
    $this->jurusan = $jurusan;
}
public function mencetak(){
    parent::mencetak();
    echo 'Semester: ' .$this->semester;
    echo '<br/>Jurusan: '.$this->jurusan;
    echo '<hr/>';
    
}

}

?>