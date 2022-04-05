<?php

class Zwierze {
  public $pies = "Owczarek niemiecki";
  public $kot = "Kot bengalski";


  public function pies()
  {
    return $pies;
  }

  public function kot()
  {
    return $kot;
  }

}

$zwierze = new Zwierze();
echo $zwierze->pies . " " . $zwierze->kot;

?>