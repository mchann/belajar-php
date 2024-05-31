<?php

class kucing2 {

    public $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function berlari (){
        return  $this->nama . " sedang Berlari";
    }

    public function makan (){
        return  $this->nama . " sedang Makan";
    }
    
    public function tidur (){
        return  $this->nama . " sedang Tidur";
    }
}

$kucingKu = new Kucing("Moo");
echo $kucingKu->berlari();

?>