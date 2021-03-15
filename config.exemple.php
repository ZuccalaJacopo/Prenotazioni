<?php
//Variabili dell'applicazione
$LUNGHEZZA_CODICE = 10;
//Dice a livello dello script che gli errori verranno mostrati
//e che non verranno loggati
ini_set('display_errors', 1);
ini_set('log_errors', 0);

$host = 'your_host';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';

//Stringa di connessione
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;


$pdo = new PDO($dsn, $user, $pass);