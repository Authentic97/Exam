<?php

function find_all_ouvrage():array{
    $ouvrages=[
        ['code'=>1 , 'titre'=>'Memoires de porc-epic','date edition'=>24/08/2006, 'nombre auteur'=>1,],
        ['code'=>2 , 'titre'=>'Diarétou et Josué','date edition'=>28/09/2021, 'nombre auteur'=>1,],
        ['code'=>3 , 'titre'=>'Le pleure-rire','date edition'=>1982, 'nombre auteur'=>1, 'auteur'=>1],
        ['code'=>4 , 'titre'=>'Les fleurs du mal','date edition'=>21/06/1857, 'nombre auteur'=>1,],
        ['code'=>5 , 'titre'=>'Fables de la fontaine','date edition'=>1668, 'nombre auteur'=>1,]
    ];
    return $ouvrages;
}

function find_all_auteur():array{
    $auteurs=[
        ['nom'=>'Mabanckou','prenom'=>'Alain','profession'=>'Ecrivain'],
        ['nom'=>'Appoliange','prenom'=>'Josué','profession'=>'Ecrivain'],
        ['nom'=>'Lopes','prenom'=>'Henri','profession'=>'Ecrivain'],
        ['nom'=>'Baudelaire','prenom'=>'Charles','profession'=>'Ecrivain'],
        ['nom'=>'De la fontaine','prenom'=>'Jean','profession'=>'Ecrivain']
    ];
    return $auteurs;
}

function find_all_exemplaire():array{
    $exemplaires=[
        ['code'=>1, 'date enregistrement'=>15/08/2000,],
        ['code'=>1, 'date enregistrement'=>15/08/2000,],
        ['code'=>1, 'date enregistrement'=>15/08/2000,],
        ['code'=>1, 'date enregistrement'=>15/08/2000,],
        ['code'=>1, 'date enregistrement'=>15/08/2000,]
    ];
    return $exemplaires;
}

function all_demande_pret():array{
    $pret=[
        ['date'=>15/08/2000, 'date de retour prévu'=>20/08/2000,'date de retour reel'=>23/08/2000, 'exemplaire ouvrage'=>'r' , 'adherent'=>'f'],
    ];
    return $pret;
}
?>