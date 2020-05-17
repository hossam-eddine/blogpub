<?php

class livre{
  public $titre;
  public $auteur;
  public $nobre_page;
  public   $date_sortie;
  function __construct($titre,$auteur,$nobre_page,$date_sortie){
      $this->titre=$titre;
      $this->auteur=$auteur;
      $this->nobre_page=$nobre_page;
      $this->date_sortie=$date_sortie;

  }
  function getlivre(){
      echo "titre:".$this->titre."<br>"."auteur".$this->auteur."<br>"."nbre".$this->nobre_page."<br>        ";
  }
  function setlivre($date_sortie){
    
    $this->date_sortie=$date_sortie;

}
function __destruct(){
    echo "ba7";
}

}
class compte{
    public $numero;
    public $solde;
    public $propriete;
    public   static $cp=0;
    


public function __construct($numero,$solde){
    $this->numero=$numero;
    $this->solde=$solde;
    self::$cp++;
       
}


public  static function cont(){
    return self:: $cp;
}
   /*  function getsolde(){
        return $this ->solde;
    }
    function getnumero(){
        return $this ->numero;
    }
    function depiter($M){
        while($M< $this ->solde){
            $this ->solde = $this ->solde - $M;
        }
    }
    function crediter($M){
        $this ->solde = $this ->solde + $M;
    }
    function  toString(){
        echo "numero de compte :" .$this ->numero. "<br>";
        echo "solde :" .$this ->sode. "<br>";
    } */

   
}
  $c1=new compte(12,23);
  $c2=new compte(12,23);
  echo $c2->cont();

?>