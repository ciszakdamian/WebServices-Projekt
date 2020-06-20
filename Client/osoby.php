<form action="osoby.php" method="get">
  <label for="iid">ID OSOBY:</label>
  <input type="text" id="iid" name="iid">
  <input type="submit" value="Szukaj">
</form>


<?php
require_once('conf.php');
 
//echo $_GET['film_id']; # id_filmu

if(isset($_GET['iid']))
{
    $path = 'persons/'.$_GET['iid'];
}
else
{
    $path = 'persons';
}

try{

$res = $client->request('GET', $path, [
        'headers' => $headers
    ]);
 
    $json = $res->getBody();
    $json = json_decode($json, true);

    if(isset($_GET['iid']))
    {
        $json = array($json);
    }

    //print_r($json);

    foreach ($json as &$value) {
        echo 'ID osoby: '.$value['id'].'<br>';
        echo 'Imię: '.$value['name'].'<br>';
        echo 'Nazwisko: '.$value['surname'].'<br>';
        echo 'Płeć: '.$value['gender'].'<br>';
        echo 'Data urodzenia: '.$value['birth_date'].'<br>';
        echo '<a href="osoby_update.php?iid='.$value['id'].'">Aktualizuj</a> <a href="osoby_delete.php?iid='.$value['id'].'">Usuń</a><br><br>';
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