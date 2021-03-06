<?php

ini_set('display-error', 1);
ini_set('log-error', 0);

$host = 'localhost';
$db = 'prenotazioni';
$user = 'root';
$pass = '';

//stringe la connessione
$dsn = 'mysql:host=' . $host . 'dbname=' . $db;

$pdo = new PDO ($dsn, $user, $pass);

//variabili al momento costanti, poi verranno prese tramite POST
$codice_fiscale = 'BTGLSN00N00B157H';
$giorno = ''2021-03-06;

//Query di inserimento preparata
$sql = "INSERT INTO prenotazioni VALUES(null, :codice_fiscale, :giorno)";

//inviamo la query al database che la tiene in pancia
$stmt = $pdo -> prepare($sql);

//inviamo i dati co
$stmt->execute(
    [
        'codice_fiscale' => $codice_fiscale,
        'giorno' => $giorno
    ]
);
