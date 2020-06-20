<form action="role.php" method="get">
  <label for="iid">ID ROLI:</label>
  <input type="text" id="iid" name="iid">
  <input type="submit" value="Szukaj">
</form>


<?php
require_once('conf.php');
 
//echo $_GET['film_id']; # id_filmu

if(isset($_GET['iid']))
{
    $path = 'casts/'.$_GET['iid'];
}
else
{
    $path = 'casts';
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
        echo 'ID roli: '.$value['id'].'<br>';
        echo 'ID filmu: <a href="filmy.php?film_id='.$value['movies_id'].'">'.$value['movies_id'].'</a><br>';
        echo 'ID osoby: <a href="osoby.php?iid='.$value['persons_id'].'">'.$value['persons_id'].'</a><br>';
        echo 'Rola: '.$value['role'].'<br>';
        echo '<a href="role_update.php?iid='.$value['id'].'">Aktualizuj</a> <a href="role_delete.php?iid='.$value['id'].'">Usuń</a><br><br>';
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