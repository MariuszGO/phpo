<?php
class samochody{

    public $marka, $rok;
    public $model;
    protected $moc; 
 

   public function wyswietl(){
        echo "MARKA: $this->marka  <br>MODEL: $this->model <br>ROK PRODUKCJI: $this->rok <br>MOC: $this->moc<br><hr>";
    }

    function __construct($ma,$mo,$r,$m){
        $this->marka = $ma;
        $this->model = $mo;
        $this -> rok = $r;
        $this -> moc = $m;
       // $this -> wyswietl();
    
    }

   



    function __destruct(){
        echo "działa destruktor";
    }
} //koniec klays samochody

class autobusy extends samochody{

    function zmien($a,$b,$c,$d){
        $this->marka = $a;
        $this->model = $b;
        $this -> rok = $c;
        $this -> moc = $d;
    }

}


  $s1 = new samochody("VW","Golf",2002,90);
  $s1 -> rok = 1999;
  $s2 = new samochody("Fiat","Panda",2001,75);
  $a1 = new autobusy("Mercedes","232asd",2012,400);

  $s1 -> wyswietl();
  $s2 -> wyswietl();
  $a1 -> wyswietl();
  $a1 -> zmien("Autosan","Sas",2021,300);
  $a1 -> wyswietl();

?>