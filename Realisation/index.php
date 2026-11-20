<?php
$cards=[
[
'icon'=>'<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        <polyline points="9 12 11 14 15 10" />
                    </svg>',
'titre'=>'Pour les Acheteurs',  
'contenu'=>'Découvrez et achetez des animaux de races rares et précieuses en toute confiance, avec un suivi
                    médical certifié.'                
],[
'icon'=>'<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <path d="M9 15l2 2 4-4" />',
'titre'=>'Pour les Éleveurs & Vendeurs',  
'contenu'=>'Faites valider le dossier par votre vétérinaire, fixez votre prix et négociez en toute sécurité.'                
],
[
'icon'=>'<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path
                            d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z" />
                        <path d="M9 12h6M12 9v6" />
                    </svg>',
'titre'=>'Pour les Vétérinaires',  
'contenu'=>'Rejoignez notre réseau professionnel, développez votre patientèle et gérez vos consultations.'                
],

];

$annonces=[
    [
        "image"=>"images/photoCheval.png",
        "Certification"=>"Certifié",
        "titre"=>"Cheval Arabe Pur-Sang",
        "race"=>" Charolais",
        "age"=>"4 ans",
        "price"=>"€12000",
        "location"=>"📍 fés",
        

    ],
    [
        "image"=>"images/Perroquet.png",
        "Certification"=>"Non Certifié",
        "titre"=>"Perroquet",
        "race"=>" Perroquet gris du Gabon",
        "age"=>"1 ans",
        "price"=>"€1500",
        "location"=>"📍 Tanger",
        

    ],
    [
        "image"=>"images/Chien.png",
        "Certification"=>"Non Certifié",
        "titre"=>"Chien de Race",
        "race"=>"Chien,Akita Inu Mâle",
        "age"=>"3 ans",
        "price"=>"€600",
        "location"=>" 📍 oujda
",
        

    ],
    [
        "image"=>"images/Vache.png",
        "Certification"=>"Certifié",
        "titre"=>"Vache Haute Qualité",
        "race"=>" Vache",
        "age"=>"3 ans",
        "price"=>"€1500",
        "location"=>"📍 Rabat",
        

    ],
];
$vets=[
['nome'=>'Dr. Amine',
'image'=>'images/drAmin.png',
'location'=>'Clinique Vétérinaire de fés',
'nombreDeVote'=>14,
],
['nome'=>'Dr. Ahmed',
'image'=>'images/drAhmed.png',
'location'=>'Clinique Vétérinaire de Marakech',
'nombreDeVote'=>20,
],
['nome'=>'Dr. Manal',
'image'=>'images/drManal.png',
'location'=>'Clinique Vétérinaire de Tanger',
'nombreDeVote'=>33,
],
];
require('index-template.php');