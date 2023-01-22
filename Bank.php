<?php
class Bank{
    //member1 variabel
    protected $norek;
    public $nama;
    private $saldo;
    //variabel kostanta dan ststic di dalam kelas
    static $jml=0;
    const BANK='Bank Syariah Amir Mahmud';

    //member 2 konstruktor
    public function __construct($no,$nasabah,$saldo){
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->norek = $saldo; 
        self::$jml++;

    }
    //member 3 method2
    public function menabung($uang){
        $this->saldo += $uang;
    }
    public function menarik($uang){
        $this->saldo -= $uang;
    }
    public function mencetak(){
        echo '<b><u>'.self::BANK.'</u></b>';
        echo '<br/>No. Rekening: '.$this->$norek;
        echo '<br/>Nama Nasabah: '.$this->$nama;
        echo '<br/>Saldo: Rp. : '.number_format($this->$norek,0,',','.');
        echo '<hr/>';
    }
}
?>