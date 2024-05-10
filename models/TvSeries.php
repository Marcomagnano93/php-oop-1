<?php
class Series extends Production{

    public $seasons;

    function __construct(string $_title, string $_language, $_vote, Genre $_genre, $_seasons)
    {
    
        parent::__construct($_title, $_language, $_vote, $_genre);
        $this->seasons = $_seasons;

    }
}
