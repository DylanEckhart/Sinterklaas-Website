<?php

    // Connection inputs to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "root";

    // Try/Catch to connect to database "sinterklaas"
    try {
        $connection = new PDO("mysql:host=$servername;dbname=sinterklaas", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully";
    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }

    // Send mail to customer
    mail ("info@almeresintevents.nl", "Reservering Almere Sint Events", "Dit is een test", "From: info@almeresintevents.nl ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Sinterklaas Almere</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?" rel="stylesheet">
    <link href="/IMG/logo.png" type="image/png" rel="icon">
</head>
<style>
    a {
        color: white;
    }
</style>
<body scroll="no" style="overflow: hidden">
<section class="header">
    <nav>
        <img src="../IMG/logo.png" alt="logo">
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../Wie%20zijn%20wij%3F/wie_zijn_wij.html">Wie zijn wij?</a></li>
                <li><a href="../Opdrachtgevers/opdrachtgevers.html">Opdrachtgevers</a></li>
                <li><a href="../Prijslijst/prijslijst.html">Prijslijst</a></li>
                <li><a href="../Sint%20Vertelt/sint_vertelt.html">Sint vertelt</a></li>
                <li><a href="../Foto's/fotos.html">Foto's</a></li>
                <li><a href="contactformulier.php">Contact</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="text-box">
        <h2>Reservering</h2>
        <p><span>
            Hou uw mail in de gaten.<br>
            <a href="../index.html">Ga hier terug naar de homepagina.</a>
        </span></p>
    </div>
    <p class="copyright" id="copyrightTag">&copy Dylan Eckhart</p>
</section>

<!--JavaScript to toggle and hide menu-->
<script>

    let navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.display = "block";
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.display = "none";
    }

</script>
</body>
</html>
