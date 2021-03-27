<?php

require 'vendor/autoload.php';
include_once 'config.php';

//use League\Plates\Engine;

//Viene creato l'oggetto per la gestione dei template
$templates = new League\Pltes\Engine('./view','tpl');;

$sql = "SELECT COUNT(*) AS n_prenotaziioni FROM prenotazioni.prenotazioni GROUP BY giorno";

$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();


echo $templates->render('prenotazioni_tra_due_date', ['result' => $result]);