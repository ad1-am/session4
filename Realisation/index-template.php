<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>projet fil rouge</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <div class="logo-icon">
                <div class="leaf"></div>
                <span class="v-shape">V</span>
            </div>

            <div class="logo-text">
                <span class="vet">Vet</span><span class="folio">Folio</span>
            </div>
        </div>
        <ul class="links">
            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide">
                    <path d="m2.05 2.05 1.099-.028a1 1 0 0 1 1.008.815l2.69 14.347A1 1 0 0 0 7.83 18H18" />
                    <path d="M4.563 5h16.435a1 1 0 0 1 .981 1.204l-1.026 6.226A2 2 0 0 1 18.962 14H6.25" />
                    <circle cx="18" cy="20" r="2" />
                    <circle cx="8" cy="20" r="2" />
                </svg><a href="#">Marché</a></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-search-check preview-icon">
                    <path d="m8 11 2 2 4-4" />
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg><a href="#">Trouver un vétérinaire</a></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chess-knight preview-icon">
                    <path d="M5 20a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1z" />
                    <path
                        d="M16.5 18c1-2 2.5-5 2.5-9a7 7 0 0 0-7-7H6.635a1 1 0 0 0-.768 1.64L7 5l-2.32 5.802a2 2 0 0 0 .95 2.526l2.87 1.456" />
                    <path d="m15 5 1.425-1.425" />
                    <path d="m17 8 1.53-1.53" />
                    <path d="M9.713 12.185 7 18" />
                </svg><a href="#">Mes animaux </a></li>


        </ul>
        <div class="boton">
            <a href="#">se connecter</a>
        </div>
    </header>

    <section class="section">
        <div class="h2">
            <h2>L'Écosystème Digital de<br>L'élevage et de la Santé Animale</h2>
            <p>La plateforme tout-en-un dédiée au monde de l'élevage et de la santé animale.</p>
        </div>

        <div class="cards">
    
        <?php foreach ($cards as $cart):?>
            <div class="card">
                <div class="icon">
                    <?= $cart['icon']?>
                </div>
                <h3><?=$cart['titre']?></h3>
                <p><?=$cart['contenu']?></p>
            </div>
            <?php endforeach ?>
            
        </div>

        <div class="footerSection">
            <p>Pour les vétérinaires : Rejoignez notre réseau professionnel et gérez vos consultations.</p>
            <a href="#" class="btnCommencer">Commencer</a>
        </div>
    </section>

    <div class="main">

        <div class="partiGauche">
            <h2>Annonces à la Une</h2>
            <div class="cards-grid">

                <!-- Carte 1 -->
                 <?php foreach($annonces as $annonce ):?>
                <div class="card">
                    <div class="card-img-container">
                        <img src="<?=$annonce['image']?>" alt="Cheval">
                        <span class="<?php if ($annonce['Certification']=='Certifié'){echo 'badge';}?>">✔ Certifié par le Vétérinaire</span>
                    </div>
                    <div class="card-content">
                        <h3><?=$annonce['titre']?></h3>
                        <p class="race">Race: <?= $annonce['race'], " ",$annonce['age']?></p>
                        <div class="price-location">
                            <span class="price"><?= $annonce['price'] ?></span>
                            <span class="location"><?=$annonce['location']?></span>
                        </div>
                    </div>
                    <div class="card-buttons">
                        <a href="#" class="btn-panier">contacter le vendeur</a>
                        <a href="#" class="btn-details">Voir les Détails</a>
                    </div>
                </div> <?php endforeach ;?>

                

            </div>
        </div>

        <!-- Jihdat L-Yisra: Trouver un Vétérinaire -->
        <div class="vet-section">
            <h2>Trouver un Vétérinaire</h2>
            
            <div class="filters-row">
                <a href="#" class="filter-btn"> 📍 Localisation ▾</a>
                <a href="#" class="filter-btn">⚙️ Spécialité ▾</a>
            </div>

            <!-- List dyal les vétos -->
            <div class="vet-list">
                <?php foreach ($vets as $vet):?>
                <div class="vet-item">
                    <img src="<?=$vet['image']?>" alt="Dr" class="vet-avatar">
                    <div class="vet-info">
                        <h4><?=$vet['nome']?></h4>
                        <p><?$vet['location']?></p>
                        <span class="stars">⭐⭐⭐⭐⭐ (<?=$vet['nombreDeVote']?>)</span>
                    </div>
                </div>
                    <?php endforeach;?>
                
            </div>
        </div>
    </div>
   

 <footer>
        <div class="logo-container">
            <div class="logo-icon">
                <div class="leaf"></div>
                <span class="v-shape">V</span>
            </div>

            <div class="logo-text">
                <span class="vet">Vet</span><span class="folio">Folio</span>
                
            </div>
            
        </div>
        
        <ul class="liens">
            <li><a href="#">accueil</a></li>
            <li><a href="#">Formations</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Contact</a></li>
            <li> <a href="#"><i class="fa-brands fa-facebook"></a></i></li>
            <li><a href="#"><i class="fa-brands fa-linkedin"></a></i></li>
            <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a> </li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>

        </ul>

    </footer>


</body>

</html>