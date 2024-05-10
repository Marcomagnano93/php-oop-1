<?php
class Movie extends Production {
    public $profit;
    public $duration;

    function __construct(string $_title, string $_language, $_vote, Genre $_genre, $_profit, $_duration)
    {

        parent::__construct($_title, $_language, $_vote, $_genre);

        $this->profit = $_profit;
        $this->duration = $_duration;
    }
}