<form action="role_add.php" method="get">
  <label for="movies_id">ID filmu:</label>
  <input type="number" id="movies_id" name="movies_id">
    <br>
  <label for="persons_id">ID osoby:</label>
  <input type="number" id="persons_id" name="persons_id">
  <br>
  <label for="role">Rola:</label>
  <input type="text" id="role" name="role">
  <br><br>
  <input type="submit" value="Dodaj">
</form>


<?php
require_once('conf.php');

if(!empty($_GET['movies_id']) && !empty($_GET['persons_id']) && !empty($_GET['role']))
{
    $path = 'casts?movies_id='.$_GET['movies_id'].'&persons_id='.$_GET['persons_id'].'&role='.$_GET['role'];

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