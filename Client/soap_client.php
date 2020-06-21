<form action="soap_client.php" method="post">
    <label for="movie_title">Movie title:</label>
    <input type="text" id="movie_title" name="movie_title" placeholder="Example search: Avatar">
    <input type="submit" value="Search">
</form>


<?php

if (isset($_POST['movie_title'])) {

    require 'vendor/autoload.php';

    //Load conf
    require_once('conf-soap.php');

    //Create SOAP client object
    $soap_client = new nusoap_client($wsdl, 'wsdl');

    //Define parameters and call
    $params = array('movie_name' => $_POST['movie_title']);
    $response = $soap_client->call('findMovieByName', $params);

    echo($response);
}
?>

<div>
    <br>
    <a href="index.php">POWRÓT</a>
</div>

