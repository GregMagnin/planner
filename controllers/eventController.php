<?php

include_once './home.php';
require_once './database/db.php';

if (isset($_POST['submit'])) {
    if ((!empty($_POST['name'])) &&
        (!empty($_POST['category'])) &&
        (!empty($_POST['date'])) &&
        (!empty($_POST['description']))
    ) {

        $name = $_POST['name'];
        $category = $_POST['category'];
        $date = $_POST['date'];
        $description = $_POST['description'];

        $fill = "INSERT INTO events (name, description, type, date) VALUES 
        ('$name', '$description','$category', '$date') WHERE owner='$owner';";

        $connection->exec($fill);

    } else {
        $alert = 'Remplir tout';
    }
}
