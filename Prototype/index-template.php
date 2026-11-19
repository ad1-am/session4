<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-circle-user-round preview-icon">
                <path d="M17.925 20.056a6 6 0 0 0-11.851.001" />
                <circle cx="12" cy="11" r="4" />
                <circle cx="12" cy="12" r="10" />
            </svg>
            <h1>PORTFOLIO</h1>
        </div>
        <nav>
            <a href="#">acceuil</a>
            <a href="#">projets</a>
            <a href="#">contact</a>
        </nav>
        <div class="partiDroit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-menu preview-icon">
                <path d="M4 5h16" />
                <path d="M4 12h16" />
                <path d="M4 19h16" />
            </svg></div>
    </header>
    <section>
        <h1> Galerie de mes Projets Web </h1>

        
<div class="carts">


    <?php foreach($projets as $projet): ?>

        <div class="cart">
            <div class="img">
                <img src="<?= $projet['image'] ?>" alt="">
            </div>

            <div class="contenu">
                <div class="CS">
                    <h3 class="<?php if ($projet['category']=='Web'){echo 'Web';} elseif($projet['category']=='JavaScript'){echo "JavaScript";}else{echo "Desktop";}?>"><?= $projet['category'] ?></h3>
                    <h3 class="<?php if($projet['status']=='En cours'){echo "EnCour";}
                    else{echo "Terminé";}?>"><?= $projet['status'] ?></h3>
                </div>

                <h2><?= $projet['title'] ?></h2>

                <p><?= $projet['description'] ?></p>

                <div class="technologies">
                    <?= implode(" | ", $projet['technologies']) ?>
                </div>

                <div class="lien">
                    <a href="#">voir le code</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

            
        </div>
    </section>
    <footer class="footer">
        <div class="conteneur-pied-de-page">
            <div class="colonne-pied-de-page">
                <h2>PORTFOLIO</h2>
                <p>Partager des connaissances, des tutoriels et des découvertes sur le développement web.</p>
            </div>
            
           
        </div>
        <div class="bas-pied-de-page">
            <p>&copy; PORTFOLIO</p>
        </div>
    </footer>
</body>

</html>