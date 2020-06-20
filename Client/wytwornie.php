<form action="wytwornie.php" method="get">
  <label for="iid">ID WYTWÓRNI:</label>
  <input type="text" id="iid" name="iid">
  <input type="submit" value="Szukaj">
</form>


<?php
require_once('conf.php');
 
//echo $_GET['film_id']; # id_filmu

if(isset($_GET['iid']))
{
    $path = 'production_companies/'.$_GET['iid'];
}
else
{
    $path = 'production_companies';
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
        echo 'ID wytwórni: '.$value['id'].'<br>';
        echo 'Nazwa: '.$value['company'].'<br>';
        echo 'Kraj: '.$value['country'].'<br>';
        echo 'Data założenia: '.$value['year_of_founded'].'<br>';
        echo '<a href="wytwornie_update.php?iid='.$value['id'].'">Aktualizuj</a> <a href="wytwornie_delete.php?iid='.$value['id'].'">Usuń</a><br><br>';
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