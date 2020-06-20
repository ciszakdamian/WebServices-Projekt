<form action="role_update.php" method="get">
  <label for="iid">ID ROLI:</label>
  <input type="text" id="iid" name="iid">
  <input type="submit" value="Szukaj">
</form>

<?php
require_once('conf.php');


if(isset($_GET['iid']) && !empty($_GET['movies_id']) && !empty($_GET['persons_id']) && !empty($_GET['role']))
{
    $path = 'casts/'.$_GET['iid'].'?movies_id='.$_GET['movies_id'].'&persons_id='.$_GET['persons_id'].'&role='.$_GET['role'];

    try{

    $res = $client->request('PUT', $path, [
        'headers' => $headers
    ]);


        $json = $res->getBody();
        $json = json_decode($json, true);
    
        print_r($json);
        echo '<br>';
    
        echo 'Zaktualizowano<br><br>';

    }
    catch(Exception $ex){
        echo 'Błąd: ' . $ex->getMessage();
    }
 

}


if(isset($_GET['iid']))
{
    $path = 'casts/'.$_GET['iid'];


    try{


    $res = $client->request('GET', $path, [
        'headers' => $headers
    ]);


        $json = $res->getBody();
        $json = json_decode($json, true);
    
        //print_r($json);
       
        echo '<br>';

            echo '<form action="role_update.php" method="get">';
            echo '<input value="'.$json['id'].'" type="hidden" id="iid" name="iid">';
            echo '<label for="movies_id">ID filmu:</label>';
            echo '<input value="'.$json['movies_id'].'" type="number" id="movies_id" name="movies_id">';
            echo '<br>';
            echo '<label for="persons_id">ID osoby:</label>';
            echo '<input value="'.$json['persons_id'].'" type="number" id="persons_id" name="persons_id">';
            echo '<br>';
            echo '<label for="role">Rola:</label>';
            echo '<input value="'.$json['role'].'" type="text" id="role" name="role">';
            echo '<br><br>';
            echo '<input type="submit" value="Aktualizuj">';
            echo '</form>';
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