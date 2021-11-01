<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Sinterklaas Almere</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="contact_style.css">
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
                <li><a href="contactformulier.php">Reserveren</a></li>
                <li><a href="../Admin/index.php">Admin</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
<!--    <div class="text-box">-->
<!--        <h2>Reservering</h2>-->
<!--        <p><span>-->
<!--            <a>Voor reseveringen kunt u terecht op het mailadres: info@almeresintevents.nl</a>-->
<!--        </span></p>-->
<!--    </div>-->
    <div class="container">
        <div class="container-form">
            <form action="input.php" method="post">
                <h2 class="heading">Reserveren</h2>
                <div class="form-field">
                    <p>Voornaam</p>
                    <input type="text" name="voornaam" placeholder="Voornaam">
                </div>
                <div class="form-field">
                    <p>Achternaam</p>
                    <input type="text" name="achternaam" placeholder="Achternaam">
                </div>
                <div class="form-field">
                    <p>Emailadres</p>
                    <input type="email" name="email" placeholder="Emailadres">
                </div>
                <div class="form-field">
                    <p>Datum</p>
                    <input type="date" name="datum">
                </div>
                <div class="form-field">
                    <p>Tijd</p>
                    <input type="time" name="tijd">
                </div>
                <div class="form-field">
                    <p>Welke optie wilt u?</p>
                    <select name="select" id="#">
                        <option value="1">Videosint</option>
                        <option value="2">Bellen met Sint</option>
                        <option value="3">Flitsbezoek door Piet</option>
                        <option value="4">Twee Pieten</option>
                        <option value="5">Drie Pieten</option>
                        <option value="6">Sinterklaas + Een Piet</option>
                        <option value="6">Sinterklaas + Twee Pieten</option>
                    </select>
                </div>
                <button class="btn" name="submit">Submit</button>
            </form>
        </div>
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