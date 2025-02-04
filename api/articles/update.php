<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    require_once '../../functions/ctrlSaisies.php';

    $numArt = ctrlSaisies($_POST['numArt']);
    $libTitrArt = ctrlSaisies($_POST['libTitrArt']);
    $dtCreaArt = ctrlSaisies($_POST['dtCreaArt']);
    $dtMajArt = ctrlSaisies($_POST['dtMajArt']);
    $libChapoArt = ctrlSaisies($_POST['libChapoArt']);
    $libAccrochArt = ctrlSaisies($_POST['libAccrochArt']);
    $parag1Art = ctrlSaisies($_POST['parag1Art']);
    $libSsTitr1Art = ctrlSaisies($_POST['libSsTitr1Art']);
    $parag2Art = ctrlSaisies($_POST['parag2Art']);
    $libSsTitr2Art = ctrlSaisies($_POST['libSsTitr2Art']);
    $parag3Art = ctrlSaisies($_POST['parag3Art']);
    $libConclArt = ctrlSaisies($_POST['libConclArt']);
    $urlPhotArt = ctrlSaisies($_POST['urlPhotArt']);
    $libThem = ctrlSaisies($_POST['libThem']);


    sql_update('ARTICLE','libTitrArt= "$libTitrArt", dtCreaArt= "$dtCreaArt", dtMajArt= "$dtMajArt", libChapoArt= "$libChapoArt", libAccrochArt= "$libAccrochArt", parag1Art= "$parag1Art", libSsTitr1Art= "$libSsTitr1Art", parag2Art= "$parag2Art", libSsTitr2Art= "$libSsTitr2Art", parag3Art= "$parag3Art", libConclArt= "$libConclArt", urlPhotArt= "$urlPhotArt", libThem= "$libThem"', "numArt = $numArt");

    header('Location: ../../views/backend/articles/list.php');