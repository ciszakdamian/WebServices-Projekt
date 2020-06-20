<form action="wytwornie_delete.php" method="get">
  <label for="iid">ID WYTWÓRNI:</label>
  <input type="text" id="iid" name="iid">
  <input type="submit" value="Usuń">
</form>

<?php
require_once('conf.php');

if(isset($_GET['iid']))
{
    $path = 'production_companies/'.$_GET['iid'];

    try{

    $res = $client->request('DELETE', $path, [
        'headers' => $headers
    ]);
 
    $json = $res->getBody();
    $json = json_decode($json, true);

    print_r($json);

    echo 'Usunięto osobę o ID: '.$_GET['iid'].'!';
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