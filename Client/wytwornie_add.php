<form action="wytwornie_add.php" method="get">
  <label for="company">Nazwa:</label>
  <input type="text" id="company" name="company">
    <br>
  <label for="country">Kraj:</label>
  <input type="text" id="country" name="country">
  <br>
  <label for="year_of_founded">Data założenia:</label>
  <input type="number" id="year_of_founded" name="year_of_founded">
  <br><br>
  <input type="submit" value="Dodaj">
</form>


<?php
require_once('conf.php');

if(!empty($_GET['company']) && !empty($_GET['country']) && !empty($_GET['year_of_founded']))
{
    $path = 'production_companies?company='.$_GET['company'].'&country='.$_GET['country'].'&year_of_founded='.$_GET['year_of_founded'];

    try{

    $res = $client->request('POST', $path, [
        'headers' => $headers
    ]);
 
    $json = $res->getBody();
    $json = json_decode($json, true);

    print_r($json);
    echo '<br>';
    echo 'Dodano pomyślnie!';

    }
    catch(Exception $ex){
        echo 'Błąd: ' . $ex->getMessage();
    }

}
else
{
    echo 'Uzupełnij wszystkie pola formularza!';
}
    ?>

<div>
<br>
    <a href="index.php">POWRÓT</a>
</div>