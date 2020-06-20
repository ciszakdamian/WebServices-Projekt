<form action="filmy_delete.php" method="get">
  <label for="film_id">ID FILMU:</label>
  <input type="text" id="film_id" name="film_id">
  <input type="submit" value="Usuń">
</form>

<?php
require_once('conf.php');

if(isset($_GET['film_id']))
{
    $path = 'movies/'.$_GET['film_id'];

    try{

    $res = $client->request('DELETE', $path, [
        'headers' => $headers
    ]);
 
    $json = $res->getBody();
    $json = json_decode($json, true);

    print_r($json);

    // EXAMPLE: 'http://127.0.0.1:8000/api/movies/10'

    echo 'Usunięto film ID: '.$_GET['film_id'].'!';
    }
    catch(Exception $ex){
        echo 'Błąd: ' . $ex->getMessage();
    }
}

    ?>




<div>
<br>
    <a href="index.php">POWRÓT</a>
</div>