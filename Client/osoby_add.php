<form action="osoby_add.php" method="get">
  <label for="name">Imię:</label>
  <input type="text" id="name" name="name">
    <br>
  <label for="surname">Nazwisko:</label>
  <input type="text" id="surname" name="surname">
  <br>
  <label for="gender">Płeć:</label>
  <input type="text" id="gender" name="gender">
  <br>
  <label for="birth_date">Data urodzenia:</label>
  <input type="date" id="birth_date" name="birth_date">
  <br><br>
  <input type="submit" value="Dodaj">
</form>


<?php
require_once('conf.php');

if(!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['gender']) && !empty($_GET['birth_date']))
{
    $path = 'persons?name='.$_GET['name'].'&surname='.$_GET['surname'].'&gender='.$_GET['gender'].'&birth_date='.$_GET['birth_date'];

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