<head>
    <title>01-SOAP-API</title>
</head>
<?php
require 'vendor/autoload.php';

//Load conf
require_once 'conf.php';

//NuSOAP https://github.com/pwnlabs/nusoap

//Create SOAP server object and configuration it
$soap_server = new soap_server();
$namespace = '127.0.0.1';
$soap_server->configureWSDL($SERVICE_NAME, $namespace);
$soap_server->wsdl->schemaTargetNamespace = $namespace;

//Register method
$soap_server->register("findMovieByName"

    , array('movie_name' => 'xsd:string')

    , array('return' => 'xsd:string')

    , $namespace

    , false

    , 'rpc'

    , 'encoded'

    , 'Return movie by select name'

);

//Define method
function findMovieByName($movie_name)
{

    $DB_HOST = "localhost";
    $DB_PORT = 3306;
    $DB_DATABASE = "dev_webservices_projekt";
    $DB_USERNAME = "dev_webservices_projekt";
    $DB_PASSWORD = "dev-password";

    try {
        $mysql = new PDO('mysql:host=' . $DB_HOST . ';' . 'dbname=' . $DB_DATABASE . ';port=' . $DB_PORT, $DB_USERNAME, $DB_PASSWORD);

        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $mysql->prepare("SELECT m.id, m.title, m.category, m.year_of_production, CONCAT_WS(' ', p.name, p.surname) AS director,  pc.company, m.plot_description FROM movies as m JOIN production_companies pc on m.production_company_id = pc.id JOIN persons p on m.director_id = p.id WHERE title=:movie_name");
        $sql->bindValue('movie_name', $movie_name, PDO::PARAM_STR);

        $sql->execute();
        $count = $sql->rowCount();


        if ($count > 0) {

            $result = $sql->fetch();
            $text = '<b>Id: ' . $result['id'] . '<br><b>Title:</b> ' . $result['title'] . '<br>Year:</b> ' . $result['year_of_production'] . '<br><b>Director:</b> ' . $result['director'] . '<br><b>Production company:</b> ' . $result['company'] . '<br><b>Plot description:</b> ' . $result['plot_description'];

        } else {

            $text = "<b>Movie not found!</b>";

        }

        return new soapval('return', 'xsd:string', $text);

    } catch
    (PDOException $e) {
        $result = 'Database error: ' . $e->getMessage();
        return new soapval('return', 'xsd:string', $result);
    }
}


//Get request
$postdata = file_get_contents("php://input");
$postdata = isset($postdata) ? $postdata : '';

//Start SOAP webservice
$soap_server->service($postdata);