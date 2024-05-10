<?php
class Production {
    //***propreties***
        public $title;
        public $language;
        public $vote;
        public $genre;
    
    //***Methods***  
        function __construct(string $_title, string $_language, $_vote, Genre $_genre)
        {
          $this->title = $_title;
          $this->language = $_language;
          $this->vote = $this->voteCheck($_vote);
          $this->genre = $_genre;
        }
    
        public function voteCheck($vote){
            if ($vote <= 10 && $vote >= 1){
                return ceil($vote);
            }
            else{
                return $vote = null;
            }
        }

        public function setGenre(Genre $_genre){
          $this->genre = $_genre;
        }
    }