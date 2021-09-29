<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactformulier | Sinterklaas Almere</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../Contactformulier/formulier.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../IMG/logo.jpg" type="image/icon" rel="icon">
</head>
<style>

</style>
<body>
<section class="header">
    <nav>
        <img src="../IMG/logo.jpg" alt="logo">
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../Wie%20zijn%20wij%3F/wie_zijn_wij.html">Wie zijn wij?</a></li>
                <li><a href="../Opdrachtgevers/opdrachtgevers.html">Opdrachtgevers</a></li>
                <li><a href="../Prijslijst/prijslijst.html">Prijslijst</a></li>
                <li><a href="../Sint%20Vertelt/sint_vertelt.html">Sint vertelt</a></li>
                <li><a href="../Foto's/fotos.html">Foto's</a></li>
                <li><a href="contactformulier.php">Contactformulier</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="text-box">
        <h2>Contactformulier</h2><br>
        <form action="inputContactformulier.php" method="post">

            <label for="first_name">Voornaam:</label>
            <input type="text" name="first_name"><br>

            <label for="last_name">Achternaam:</label>
            <input type="text" name="last_name"><br>

            <label for="email">Email:</label>
            <input type="text" name="email"><br>

            <label for="message">Message:</label><br>
            <textarea rows="5" name="message" cols="30"></textarea><br>

            <input type="submit" name="submit" value="Submit">

        </form>
    </div>
    <p class="copyright" id="copyrightTag">Copyright @Dylan Eckhart</p>
</section>

<!--JavaScript to toggle and hide menu-->
<script>

    let navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }

</script>
</body>
</html>