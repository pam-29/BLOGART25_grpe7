<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$pseudoMemb = ctrlSaisies($_POST['pseudoMemb']);
$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
$nomMemb = ctrlSaisies($_POST['nomMemb']);
$dtCreaCom = ctrlSaisies($_POST['dtCreaCom']);
$libCom = ctrlSaisies($_POST['libCom']);
$numArt = ctrlSaisies($_POST['numArt']);
$numMemb = ctrlSaisies($_POST['numMemb']);

sql_update('COMMENT', 'pseudoMemb, prenomMemb, nomMemb, dtCreaCom, libCom, numArt, numMemb', "'$pseudoMemb', '$prenomMemb', '$nomMemb', '$dtCreaCom', '$libCom', '$numArt', '$numMemb'");

header('Location: ../../views/backend/comments/list.php');
