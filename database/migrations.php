<?php

require_once 'db.php';

// $queries = [
// "CREATE TABLE users (
//     ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     username VARCHAR(60) NOT NULL,
//     email VARCHAR(60) NOT NULL UNIQUE,
//     password VARCHAR(35) NOT NULL
//     )"
// ];

// $queries = [
// "CREATE TABLE agendas (
//     ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     private TINYINT(1) NOT NULL,
//     name VARCHAR(50) NOT NULL ,
//     owner VARCHAR(50) NOT NULL           
//     )"
// ];

// $queries = [
//     "CREATE TABLE events (
//         ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//         description VARCHAR(2000) NOT NULL,
//         name VARCHAR(50) NOT NULL,
//         owner VARCHAR(50) NOT NULL,
//         agenda_id BIGINT NOT NULL           
//         )"
//     ];

    //   $queries = [
    //  "CREATE TABLE event_user (
    //    event_ID INT NOT NULL,
    //    user_ID INT NOT NULL, 
    //    PRIMARY KEY (event_ID, user_ID)     
    //     )"
    //  ];

     $queries = [
        "CREATE TABLE agenda_user (
          agenda_ID INT NOT NULL,
          user_ID INT NOT NULL, 
          PRIMARY KEY (agenda_ID, user_ID)     
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
