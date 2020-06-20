<form action="filmy_add.php" method="get">
  <label for="title">Tytuł:</label>
  <input type="text" id="title" name="title">
    <br>
  <label for="movie_cover">Okładka:</label>
  <input type="text" id="movie_cover" name="movie_cover">
  <br>
  <label for="category">Kategoria:</label>
  <input type="text" id="category" name="category">
  <br>
  <label for="director_id">Reżyser ID:</label>
  <input type="number" id="director_id" name="director_id">
  <br>
  <label for="production_company_id">Wytwórnia ID:</label>
  <input type="number" id="production_company_id" name="production_company_id">
  <br>
  <label for="year_of_production">Rok produkcji:</label>
  <input type="number" id="year_of_production" name="year_of_production">
  <br>
  <label for="plot_description">Fabuła:</label>
  <input type="text" id="plot_description" name="plot_description">
  <br>
  <label for="price">Cena:</label>
  <input type="number" id="price" name="price">
  <br><br>
  <input type="submit" value="Dodaj">
</form>


<?php
require_once('conf.php');

if(!empty($_GET['title']) && !empty($_GET['movie_cover']) && !empty($_GET['category']) && !empty($_GET['director_id']) && !empty($_GET['production_company_id']) && !empty($_GET['year_of_production']) && !empty($_GET['plot_description']) && !empty($_GET['price']))
{
    $path = 'movies?title='.$_GET['title'].'&movie_cover='.$_GET['movie_cover'].'&category='.$_GET['category'].'&director_id='.$_GET['director_id'].'&production_company_id='.$_GET['production_company_id'].'&year_of_production='.$_GET['year_of_production'].'&plot_description='.$_GET['plot_description'].'&price='.$_GET['price'];

    // EXAMPLE: movies?title=Title&movie_cover=Movie%20image&category=Category&director_id=1&production_company_id=1&year_of_production=2020&plot_description=bla%20bla%20bla&price=99.99'

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