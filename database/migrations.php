<?php

require_once 'db.php';

$queries = [
"CREATE TABLE users (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL UNIQUE,
    password VARCHAR(35) NOT NULL
    )"
];

$queries = [
"CREATE TABLE agenda_user (
    ,
           
    )"



];

foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() .'<br/>';
    }
}
