<?php
include 'database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['email']) || empty($_POST['wachtwoord'])) {
        echo "Vul alles in aub.";
    }else{ 
        $naam = $_POST['email'];
        $prijs = $_POST['wachtwoord'];
        



        // sql command
        $sql = "INSERT INTO mensen VALUES (:mensID, :email, :wachtwoord)";
        $stmt = $pdo->prepare($sql);

        $placeholders = [
            "mensID" => null,
            "email" => $email,
            "wachtwoord" => $wachtwoord,
        ];

        $stmt ->execute($placeholders);
    echo"gelukt";
    }
}   

// Vervolgens moet je ervoor zorgen dat alle data in deze pagina in een tabel wordt getoond.

$sql = $pdo->query("SELECT * FROM mensen");

$resultaat = $sql->fetchAll();

// Je hebt nog 1 knopje waar je de user een mogelijkheid geeft om een row aan te kunnen passen.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1>registreren</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="email"> 
        <input type="password" name="wachtwoord" placeholder="wachtwoord"> 
        <a href="overzicht.php">
    <button>Click Me!</button>
</a>
    </form>

    

    
</body>
</html>