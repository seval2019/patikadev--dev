<?php
abstract class sekil{
    public $kenar1,$kenar2,$yukseklik,$taban;
    public $karekenar;
    public $kisakenar,$uzunkenar;
    public $alan;
    public $cevre;

    abstract public function alanhesapla();
    abstract public function cevrehesapla();
    abstract  public function goster();

}
class ucgen extends sekil{
    public function alanhesapla(){
        $this->alan=($this->yukseklik*$this->taban)/2;
        return $this;
    }
    public function cevrehesapla(){
        $this->cevre=$this->kenar1 +$this->kenar2 + $this->taban ;
        return $this;
    }
    public function goster(){
        echo "Üçgen :"."<br>";
        echo "Alan :".$this->alan."<br>";
        echo "Çevre :".$this->cevre."<br><br>";
    }
}

class kare extends sekil{
    public function alanhesapla(){
        $this->alan=$this->karekenar*$this->karekenar;
        return $this;
    }
    public function cevrehesapla(){
        $this->cevre=$this->karekenar * 4 ;
        return $this;
    }
    public function goster(){
        echo "Kare :"."<br>";
        echo "Alan :".$this->alan."<br>";
        echo "Çevre :".$this->cevre."<br><br>";
    }
}

class dikdortgen extends sekil{
    public function alanhesapla(){
        $this->alan=$this->kisakenar*$this->uzunkenar;
        return $this;
    }
    public function cevrehesapla(){
        $this->cevre=($this->uzunkenar + $this->kisakenar)*2;
        return $this;
    }
    public function goster(){
        echo "Dikdörtgen :"."<br>";
        echo "Alan :".$this->alan."<br>";
        echo "Çevre :".$this->cevre."<br>";
    }
}
/****************/

$ucgen=new ucgen();
$ucgen->kenar1=12;
$ucgen->kenar2=13;
$ucgen->taban=5;
$ucgen->yukseklik=6;
echo $ucgen->alanhesapla()->cevrehesapla()->goster();

/***************/

$kare=new kare();
$kare->karekenar=7;
echo $kare->alanhesapla()->cevrehesapla()->goster();

/***************/

$dikdortgen=new dikdortgen();
$dikdortgen->kisakenar=8;
$dikdortgen->uzunkenar=5;
echo $dikdortgen->alanhesapla()->cevrehesapla()->goster();