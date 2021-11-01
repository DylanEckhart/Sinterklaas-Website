<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Sinterklaas Almere</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="adminStyle.css">
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
                <li><a href="../Contactformulier/contactformulier.php">Reserveren</a></li>
                <li><a href="index.php">Admin</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="container">
        <div class="g-signin2" data-onsuccess="onSignIn"></div>

    </div>
    <p class="copyright" id="copyrightTag">&copy Dylan Eckhart</p>
</section>

<!--Load Google Platform Library-->
<script src="https://apis.google.com/js/platform.js?" async defer></script>

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
