<html>
<head>
    <title>WebServices Projekt</title>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .reset {
            display: block;
            justify-content: normal;
            align-items: baseline;
        }

        table {
            text-align: center;
            vertical-align: middle;
            border-collapse: collapse;
            border: 1px solid #777;
            font-family: Arial, serif;
        }

        td {
            border: 1px solid #777;
            padding: 7px;
        }

        .bold {
            font-weight: 700;
        }

        img {
            height: 43%;
            width: 43%;
        }

        a:link {
            color: green;
        }

        a:visited {
            color: green;
        }

        a:hover {
            color: red;
        }

        a:active {
            color: yellow;
        }


    </style>

</head>
<body>
<div>
    <h1>Modelowanie i projektowanie usług WebServices - Projekt</h1>
</div>

<div>
    <img src="db-diagram.png" alt="db-diagram.png">
</div>

<br>

<div>
    <table>
        <tr class="bold">
            <td colspan="4">REST API CLIENT</td>
            <td>SOAP API CLIENT</td>
        </tr>
        <tr>
            <td>FILMY</td>
            <td>OSOBY</td>
            <td>ROLE</td>
            <td>WYTWÓRNIE</td>
            <td>FILMY</td>
        </tr>
        <tr>
            <td><a href="filmy.php">WYŚWIETL</a></td>
            <td><a href="osoby.php">WYŚWIETL</a></td>
            <td><a href="role.php">WYŚWIETL</a></td>
            <td><a href="wytwornie.php">WYŚWIETL</a></td>
            <td rowspan="5"><a href="soap_client.php">Wyszukiwanie filmu po tytule</a></td>
        </tr>
        <tr>
            <td><a href="filmy_add.php">DODAJ</a></td>
            <td><a href="osoby_add.php">DODAJ</a></td>
            <td><a href="role_add.php">DODAJ</a></td>
            <td><a href="wytwornie_add.php">DODAJ</a></td>
        </tr>
        <tr>
            <td><a href="filmy_update.php">AKTUALIZUJ</a></td>
            <td><a href="osoby_update.php">AKTUALIZUJ</a></td>
            <td><a href="role_update.php">AKTUALIZUJ</a></td>
            <td><a href="wytwornie_update.php">AKTUALIZUJ</a></td>
        </tr>
        <tr>
            <td><a href="filmy_delete.php">USUŃ</a></td>
            <td><a href="osoby_delete.php">USUŃ</a></td>
            <td><a href="role_delete.php">USUŃ</a></td>
            <td><a href="wytwornie_delete.php">USUŃ</a></td>
        </tr>
    </table>
</div>

<div>
    <div class="reset">
        <p>Autorzy:</p>
        <ul>
            <li>Damian Ciszak</li>
            <li>Sebastian Jankowiak</li>
        </ul>
        <p>
            <a href="https://github.com/ciszakdamian/WebServices-Projekt" target="_blank">Github Repo</a>
        </p>
    </div>
</div>
</body>
</html>