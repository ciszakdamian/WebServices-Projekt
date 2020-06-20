<form action="filmy.php" method="get">
  <label for="film_id">ID FILMU:</label>
  <input type="text" id="film_id" name="film_id">
  <input type="submit" value="Szukaj">
</form>


<?php
require_once('conf.php');
 
//echo $_GET['film_id']; # id_filmu

if(isset($_GET['film_id']))
{
    $path = 'movies/'.$_GET['film_id'];
}
else
{
    $path = 'movies';
}

try{

$res = $client->request('GET', $path, [
        'headers' => $headers
    ]);
 
    $json = $res->getBody();
    $json = json_decode($json, true);

    if(isset($_GET['film_id']))
    {
        $json = array($json);
    }

    //print_r($json);

    foreach ($json as &$value) {
        echo 'ID filmu: '.$value['id'].'<br>';
        echo 'Tytuł filmu: '.$value['title'].'<br>';
        echo 'Kategoria: '.$value['category'].'<br>';
        echo 'Rok produkcji: '.$value['year_of_production'].'<br>';
        echo 'Opis: '.$value['plot_description'].'<br>';
        echo 'Cena: '.$value['price'].'<br>';
        echo '<a href="filmy_update.php?film_id='.$value['id'].'">Aktualizuj</a> <a href="filmy_delete.php?film_id='.$value['id'].'">Usuń</a><br><br>';
    }

}
catch(Exception $ex){
    echo 'Błąd: ' . $ex->getMessage();
}

    ?>

<div>
<br>
    <a href="index.php">POWRÓT</a>
</div>