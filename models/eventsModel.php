<?php

require_once '../database/db.php';

$queries = [
    "SELECT u.name, e.name
    FROM users AS u
    JOIN event_user AS eu
    JOIN events AS e
    ON eu.user_ID = u.ID
    AND
    eu.events_ID = e.ID    
    "
];

$queries = [
    "SELECT u.name, a.name
    FROM users AS u
    JOIN agenda_user AS au
    JOIN agendas AS a
    ON au.user_ID = u.ID
    AND
    au.agendas_ID = a.ID    
    "
];


foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() .'<br/>';
    }
}