<?php

class kucing {
    public function berlari(){
        return "Kucing sedang berlari";
    }

    public function makan (){
        return "Kucing sedang makan";
    }
    
    public function tidur (){
        return "Kucing sedang Tidur";
    }
}

$kucingKu = new Kucing();
echo $kucingKu->berlari();

?>