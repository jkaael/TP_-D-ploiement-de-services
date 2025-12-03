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
                    <div class="cardMMI <?= $i === 0 ? 'active' : '' ?>">
                      <h3><?= $oiseau['prenom'] ?>&nbsp;<?= $memboiseaureMMI['nom'] ?></h3>
                      <figure>
                        <?php
                          $photo = 'public/images/equipe/' . $oiseau['photo_url'];
                        ?>
                        <img src="<?= $photo?>" alt="photo de <?= $oiseau['prenom'] ?> <?= $oiseau['nom'] ?>" />
                      </figure>
                    </div>
        <?php $i++; endforeach ?>
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