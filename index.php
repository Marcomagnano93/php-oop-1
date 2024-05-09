<?php
//definisci la classe
class Production {

//dichiare delle proprietà per la classe
//***proprietà***
    public $title;
    public $language;
    public $vote;

//***Metodi***  
//Inserisci i valori delle istanze con la fuzione costruct che faccia check di ricevere valori appropriati
    function __construct(string $_title, string $_language, num $_vote)
    {
      $this->title = $_title;
      $this->language = $_language;
      $this->vote = voteCheck($_vote);
    }

//controlla che il voto sia compreso tra 1 e 10
    public function voteCheck($vote){
        if ($vote >= 10 && $vote >= 1){
            return ceil($vote);
        }
        else{
            return $vote = null;
        }


    }
}

