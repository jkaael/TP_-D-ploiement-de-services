<?php
require_once 'connect.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concours photo</title>
</head>
<body>
    <main class="section-concours">
    <h1>Concours de photos</h1>
    <a href="index.html">Retour à la page d'accueil</a>
        <?php
        $i = 0;
        foreach ($oiseaux as $oiseau): ?>
                    <div class="card <?= $i === 0 ? 'active' : '' ?>">
                      <h3>C'est un bô zoiseau, non ?</h3>
                      <figure>
                        <?php
                          $photo = 'uploads/' . $oiseau['adresse_fichier'];
                        ?>
                        <img src="<?= $photo?>" alt="photo de zoiseau" />
                      </figure>
                    </div>
        <?php $i++; endforeach ?>
        </div>
                       <button id="left" class="btn-nav"><</button>
                        <button id="right" class="btn-nav">></button>
        </div>
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
<!-- <script>

document.addEventListener('DOMContentLoaded', () => {
    const cardsMMI = document.querySelectorAll('.card');


if (cardsMMI.length > 0) {
let indexMMI = 0;

if (rightMMI && leftMMI) {
document.getElementById('right').addEventListener('click', () => {
    slideSuivante(cardsMMI, 'MMI');
});

document.getElementById('left').addEventListener('click', () => {
    slidePrecedente(cardsMMI, 'MMI');
});
}

function slideSuivante(cards, group) {
        cards[indexMMI].classList.remove('active');
        indexMMI = (indexMMI + 1) % cards.length;
        cards[indexMMI].classList.add('active');
}

function slidePrecedente(cards, group) {
        cards[indexMMI].classList.remove('active');
        indexMMI = (indexMMI - 1 + cards.length) % cards.length;
        cards[indexMMI].classList.add('active');
}

function keyPress(e){
    if(e.keyCode === 39){
       slideSuivante(cardsMMI, 'MMI');
        slideSuivante(cardsGB, 'GB');
    } else if(e.keyCode === 37){
        slidePrecedente(cardsMMI, 'MMI');
        slidePrecedente(cardsGB, 'GB');
    }
}
document.addEventListener('keydown', keyPress)
}
});</script> -->
</html>