<?php
 $ouvrages=[
        ["id"=>1,"code"=>uniqid(),"titre"=>"Ma belle dame","edition"=>"2004","auteur"=>4,"rayon_id"=>1,"statut"=>"dispo"],
        ["id"=>2,"code"=>uniqid(),"titre"=>"l'école des femmes","edition"=>"2012","auteur"=>1,"rayon_id"=>2,"statut"=>"dispo"],
        ["id"=>3,"code"=>uniqid(),"titre"=>"l'etranger","edition"=>"2013","auteur"=>2,"rayon_id"=>3,"statut"=>"indispo"],
        ["id"=>4,"code"=>uniqid(),"titre"=>"l'art de la guerre","edition"=>"2015","auteur"=>3,"rayon_id"=>4,"statut"=>"dispo"],
        ["id"=>5,"code"=>uniqid(),"titre"=>"les prémices","edition"=>"2015","auteur"=>4,"rayon_id"=>1,"statut"=>"dispo"],
        ["id"=>6,"code"=>uniqid(),"titre"=>"les aventures de Jack le Borgne","edition"=>"2017","auteur"=>2,"rayon_id"=>5,"statut"=>"indispo"],
        ["id"=>7,"code"=>uniqid(),"titre"=>"les iles du pacifique","edition"=>"2020","auteur"=>3,"rayon_id"=>3,"statut"=>"dispo"],
    ];
    $rayons=[
        ["id"=>1,"nom"=>"Littérature"],
        ["id"=>2,"nom"=>"Humour"],
        ["id"=>3,"nom"=>"Géographie"],
        ["id"=>4,"nom"=>"Histoire"],
        ["id"=>5,"nom"=>"Fantaisie"],
    ];
    $auteurs=[
        ["id"=>1,"nom"=>"Camus","prenom"=>"Albert","profession"=>"Auteur"],
        ["id"=>2,"nom"=>"De La Porte","prenom"=>"Jean","profession"=>"Professeur"],
        ["id"=>3,"nom"=>"Moliere","prenom"=>"Guillaume","profession"=>"Ingénieur"],
        ["id"=>4,"nom"=>"Pop","prenom"=>"smoke","profession"=>"Chanteur"],
    ];
    $rediger=[
        ["ouvrage_id"=>1,"auteur_id"=>2],
        ["ouvrage_id"=>2,"auteur_id"=>3],
        ["ouvrage_id"=>3,"auteur_id"=>1],
        ["ouvrage_id"=>4,"auteur_id"=>4],
    ];
    $exemplaires=[
        ["id"=>1,"code"=>uniqid(),"date enregistrement"=>"12/02/2018","ouvrage_id"=>1,"statut"=>"en pret"],
        ["id"=>2,"code"=>uniqid(),"date enregistrement"=>"13/02/2018","ouvrage_id"=>1,"statut"=>"deteriore"],
        ["id"=>3,"code"=>uniqid(),"date enregistrement"=>"16/02/2018","ouvrage_id"=>2,"statut"=>"deteriore"],
        ["id"=>4,"code"=>uniqid(),"date enregistrement"=>"02/08/2018","ouvrage_id"=>3,"statut"=>"en pret"],
        ["id"=>5,"code"=>uniqid(),"date enregistrement"=>"19/09/2019","ouvrage_id"=>4,"statut"=>"deteriore"],
        ["id"=>6,"code"=>uniqid(),"date enregistrement"=>"12/12/2020","ouvrage_id"=>1,"statut"=>"en pret"],
        ["id"=>7,"code"=>uniqid(),"date enregistrement"=>"14/02/2021","ouvrage_id"=>4,"statut"=>"deteriore"],
        ["id"=>8,"code"=>uniqid(),"date enregistrement"=>"18/08/2022","ouvrage_id"=>2,"statut"=>"en pret"],
        ["id"=>9,"code"=>uniqid(),"date enregistrement"=>"22/11/2022","ouvrage_id"=>3,"statut"=>"en pret"],
        ["id"=>10,"code"=>uniqid(),"date enregistrement"=>"11/11/2022","ouvrage_id"=>4,"statut"=>"deteriore"],
        ["id"=>11,"code"=>uniqid(),"date enregistrement"=>"12/11/2022","ouvrage_id"=>2,"statut"=>"en pret"],
        ["id"=>12,"code"=>uniqid(),"date enregistrement"=>"16/11/2022","ouvrage_id"=>1,"statut"=>"en pret"],
        ["id"=>13,"code"=>uniqid(),"date enregistrement"=>"18/11/2022","ouvrage_id"=>3,"statut"=>"deteriore"],
    ];
    $adherents=[
        ["id"=>1,"nom"=>"Mob","prenom"=>"Ethan"],
        ["id"=>2,"nom"=>"Rob","prenom"=>"Allan"],
        ["id"=>3,"nom"=>"Pen","prenom"=>"Marcus"],
        ["id"=>4,"nom"=>"MOULENGOU","prenom"=>"Dan"],
    ];
    $prets=[
        ["id"=>1,"date"=>"15/11/2021","date re prevu"=>"30/11/2021","date re reel"=>"30/11/2021","exemplaire_id"=>1,"adherent_id"=>2,"statut"=>"en cours"],
        ["id"=>2,"date"=>"10/12/2021","date re prevu"=>"25/12/2021","date re reel"=>"25/12/2021","exemplaire_id"=>3,"adherent_id"=>1,"statut"=>"en cours"],
        ["id"=>3,"date"=>"02/02/2022","date re prevu"=>"17/02/2022","date re reel"=>"17/02/2022","exemplaire_id"=>5,"adherent_id"=>4,"statut"=>"retourné"],
        ["id"=>4,"date"=>"15/04/2022","date re prevu"=>"30/04/2022","date re reel"=>"30/04/2022","exemplaire_id"=>3,"adherent_id"=>3,"statut"=>"en cours"],
        ["id"=>5,"date"=>"12/05/2022","date re prevu"=>"27/05/2022","date re reel"=>"27/05/2022","exemplaire_id"=>6,"adherent_id"=>1,"statut"=>"retourné"],
        ["id"=>6,"date"=>"01/11/2022","date re prevu"=>"16/11/2022","date re reel"=>"16/11/2022","exemplaire_id"=>2,"adherent_id"=>3,"statut"=>"en cours"],
        ["id"=>7,"date"=>"12/11/2022","date re prevu"=>"27/11/2022","date re reel"=>"27/11/2022","exemplaire_id"=>4,"adherent_id"=>2,"statut"=>"en cours"],
    ];
    $demandes=[
        ["id"=>1,"adherent_id"=>4,"exemplaire_id"=>2],
        ["id"=>2,"adherent_id"=>1,"exemplaire_id"=>8],
        ["id"=>3,"adherent_id"=>3,"exemplaire_id"=>12],
        ["id"=>1,"adherent_id"=>2,"exemplaire_id"=>4],
    ];
?>