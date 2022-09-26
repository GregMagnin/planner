<?php

session_start();

include '../database.db.php';

$name = $isowner = $isprivate = $description = $created_at = $updated_at ="";
$name_err = $isowner_err =$isprivate_err =$description_err = $created_at_err = $updated_at_err ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty(trim($_POST['agendaName']))) {
        $name_err = "Entrez un nom d'agenda";
    } else {
    
        $sql = "SELECT id FROM agendas WHERE name= :name";
        if($statement = $connection->prepare($sql)) {
            $statement->bindParam(":name", $param_name, PDO::PARAM_STR);
            $param_name = trim($_POST["agendaName"]);

            if($statement->execute()) {
                $name = trim($_POST["agendaName"]);
            } else {
                echo "Quelque chose s'est mal passé (nom de l'agenda)"
            }
            unset($statement);
        }

    }

}

if($_POST["agendaName"]) {



$sql = "SELECT id FROM agendas WHERE description = :description";

if($statement = $connection->prepare($sql)) {
    $statement->bindParam(":description", $param_description, PDO::PARAM_STR);
    $param_description = trim($_POST["agendaDescription"]);
    
    if($statement->execute()) {
        $description = trim($_POST["agendaDescription"]);
} else {
    echo "Quelque chose s'est mal passé (description de l'agenda)";
}
unset ($statement);
}

}





