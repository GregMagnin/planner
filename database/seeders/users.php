<?php


$queries=[
"INSERT INTO users (username, email, password)
VALUES
('Gregmac'),
('gregmagnin2@gmail\.com'),
('123456')
"
];



include_once '../../database/db.php';

foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() .'<br/>';
    }
}