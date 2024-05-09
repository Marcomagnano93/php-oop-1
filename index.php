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
    function __construct(string $_title, string $_language, $_vote)
    {
      $this->title = $_title;
      $this->language = $_language;
      $this->vote = $this->voteCheck($_vote);
    }

//controlla che il voto sia compreso tra 1 e 10
    public function voteCheck($vote){
        if ($vote <= 10 && $vote >= 1){
            return ceil($vote);
        }
        else{
            return $vote = null;
        }


    }
}

//crea due Istanze

$rambo = new Production('Rambo', 'en, it', 7.6);

// var_dump($rambo);
$et = new Production('E.T.', 'en, it, esp', 5.2);
// var_dump($et);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <div class="container-fluid text-center py-5">
        <h1>Movies</h1>
    </div>
</header>
<main>
    <div class="container my-5">
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Language avaible</th>
      <th scope="col">Vote</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $rambo->title ?></td>
      <td><?php echo $rambo->language ?></td>
      <td><?php echo $rambo->vote ?>/10</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $et->title ?></td>
      <td><?php echo $et->language ?></td>
      <td><?php echo $et->vote ?>/10</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</main>


</body>
</html>