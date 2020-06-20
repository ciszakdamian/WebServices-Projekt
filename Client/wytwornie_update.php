<form action="wytwornie_update.php" method="get">
  <label for="iid">ID WYTWÓRNI:</label>
  <input type="text" id="iid" name="iid">
  <input type="submit" value="Szukaj">
</form>

<?php
require_once('conf.php');


if(isset($_GET['iid']) && !empty($_GET['company']) && !empty($_GET['country']) && !empty($_GET['year_of_founded']))
{
    $path = 'production_companies/'.$_GET['iid'].'?company='.$_GET['company'].'&country='.$_GET['country'].'&year_of_founded='.$_GET['year_of_founded'];

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
    $path = 'production_companies/'.$_GET['iid'];


    try{


    $res = $client->request('GET', $path, [
        'headers' => $headers
    ]);


        $json = $res->getBody();
        $json = json_decode($json, true);
    
        //print_r($json);
       
        echo '<br>';

            echo '<form action="wytwornie_update.php" method="get">';
            echo '<input value="'.$json['id'].'" type="hidden" id="iid" name="iid">';
            echo '<label for="company">Nazwa:</label>';
            echo '<input value="'.$json['company'].'" type="text" id="company" name="company">';
            echo '<br>';
            echo '<label for="country">Kraj:</label>';
            echo '<input value="'.$json['country'].'" type="text" id="country" name="country">';
            echo '<br>';
            echo '<label for="year_of_founded">Data założenia:</label>';
            echo '<input value="'.$json['year_of_founded'].'" type="number" id="year_of_founded" name="year_of_founded">';
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