<form action="filmy_update.php" method="get">
  <label for="film_id">ID FILMU:</label>
  <input type="text" id="film_id" name="film_id">
  <input type="submit" value="Szukaj">
</form>

<?php
require_once('conf.php');


if(isset($_GET['film_id']) && !empty($_GET['title']) && !empty($_GET['movie_cover']) && !empty($_GET['category']) && !empty($_GET['director_id']) && !empty($_GET['production_company_id']) && !empty($_GET['year_of_production']) && !empty($_GET['plot_description']) && !empty($_GET['price']))
{
    $path = 'movies/'.$_GET['film_id'].'?title='.$_GET['title'].'&movie_cover='.$_GET['movie_cover'].'&category='.$_GET['category'].'&director_id='.$_GET['director_id'].'&production_company_id='.$_GET['production_company_id'].'&year_of_production='.$_GET['year_of_production'].'&plot_description='.$_GET['plot_description'].'&price='.$_GET['price'];

    try{


    $res = $client->request('PUT', $path, [
        'headers' => $headers
    ]);

    // EXAMPLE: http://127.0.0.1:8000/api/movies/10?tytul=New%20title&rezyser=Damian%20Ciszak


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


if(isset($_GET['film_id']))
{
    $path = 'movies/'.$_GET['film_id'];


    try{


    $res = $client->request('GET', $path, [
        'headers' => $headers
    ]);

        $json = $res->getBody();
        $json = json_decode($json, true);
    
        //print_r($json);
       
        echo '<br>';

            echo '<form action="filmy_update.php" method="get">';
            echo '<input value="'.$json['id'].'" type="hidden" id="film_id" name="film_id">';
            echo '<label for="title">Tytuł:</label>';
            echo '<input value="'.$json['title'].'" type="text" id="title" name="title">';
            echo '<br>';
            echo '<label for="movie_cover">Okładka:</label>';
            echo '<input value="'.$json['movie_cover'].'" type="text" id="movie_cover" name="movie_cover">';
            echo '<br>';
            echo '<label for="category">Kategoria:</label>';
            echo '<input value="'.$json['category'].'" type="text" id="category" name="category">';
            echo '<br>';
            echo '<label for="director_id">Reżyser ID:</label>';
            echo '<input value="'.$json['director_id'].'" type="number" id="director_id" name="director_id">';
            echo '<br>';
            echo '<label for="production_company_id">Wytwórnia ID:</label>';
            echo '<input value="'.$json['production_company_id'].'" type="number" id="production_company_id" name="production_company_id">';
            echo '<br>';
            echo '<label for="year_of_production">Rok produkcji:</label>';
            echo '<input value="'.$json['year_of_production'].'" type="number" id="year_of_production" name="year_of_production">';
            echo '<br>';
            echo '<label for="plot_description">Fabuła:</label>';
            echo '<input value="'.$json['plot_description'].'" type="text" id="plot_description" name="plot_description">';
            echo '<br>';
            echo '<label for="price">Cena:</label>';
            echo '<input value="'.$json['price'].'" type="number" id="price" name="price">';
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