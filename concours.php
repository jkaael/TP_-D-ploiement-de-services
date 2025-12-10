<?php
require_once 'connect.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concours photo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header class="header-site">
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="concours.php">Concours</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main id="section-concours">
    <h1>Concours de photos</h1>
    <a href="index.html" class="retour">Retour à la page d'accueil</a>

    <section id="galerie">
                <div class="carte-oiseau"><img src="uploads/IMG_6324.JPEG" alt="Zoiseau"></div>
                <div class="carte-oiseau"><img src="uploads/IMG_6436.jpg" alt="Zoiseau"></div>
                <div class="carte-oiseau"><img src="uploads/IMG_6604.jpg" alt="Zoiseau"></div>
                <div class="carte-oiseau"><img src="uploads/IMG_6614.jpg" alt="Zoiseau"></div>
    </section>
    <section class="container">
        <header>Formulaire de contact</header>
        <form class="formulaire-photo">
            <div class="box">
                <label>Nom</label>
                <input type="text" placeholder="Entrez votre nom" required />
            </div>
            <div class="box">
                <label>Prénom</label>
                <input type="text" placeholder="Entrez votre prénom" required />
            </div>
            <div class="box">
                <label>Adresse email</label>
                <input type="email" placeholder="Entrez votre adresse email" required />
            </div>
            <button>Envoyer</button>
        </form>
    </section>
    </main>
</body>
</html>