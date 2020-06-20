<form action="osoby_update.php" method="get">
  <label for="iid">ID OSOBY:</label>
  <input type="text" id="iid" name="iid">
  <input type="submit" value="Szukaj">
</form>

<?php
require_once('conf.php');


if(isset($_GET['iid']) && !empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['gender']) && !empty($_GET['birth_date']))
{
    $path = 'persons/'.$_GET['iid'].'?name='.$_GET['name'].'&surname='.$_GET['surname'].'&gender='.$_GET['gender'].'&birth_date='.$_GET['birth_date'];

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
    $path = 'persons/'.$_GET['iid'];


    try{


    $res = $client->request('GET', $path, [
        'headers' => $headers
    ]);


        $json = $res->getBody();
        $json = json_decode($json, true);
    
        //print_r($json);
       
        echo '<br>';

            echo '<form action="osoby_update.php" method="get">';
            echo '<input value="'.$json['id'].'" type="hidden" id="iid" name="iid">';
            echo '<label for="name">Imię:</label>';
            echo '<input value="'.$json['name'].'" type="text" id="name" name="name">';
            echo '<br>';
            echo '<label for="surname">Nazwisko:</label>';
            echo '<input value="'.$json['surname'].'" type="text" id="surname" name="surname">';
            echo '<br>';
            echo '<label for="gender">Płeć:</label>';
            echo '<input value="'.$json['gender'].'" type="text" id="gender" name="gender">';
            echo '<br>';
            echo '<label for="birth_date">Data urodzenia:</label>';
            echo '<input value="'.$json['birth_date'].'" type="date" id="birth_date" name="birth_date">';
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