<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: ../views/calendardayView.php");
//     exit;
// }
 
// Include config file
include "../database/db.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["user"]))){
        $username_err = "Entrez un nom d'utilisateur";
    } else {
        $username = trim($_POST["user"]);
    }
     
    // Check if password is empty
    if(empty(trim($_POST["psw"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["psw"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $connection->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["user"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["user"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ../views/calendardayView.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Nom d'utilisateur ou mot de passe erroné.";
                        }
                    }
                } else{
                    // username doesn't exist, display a generic error message
                    $login_err = "Nom d'utilisateur ou mot de passe erroné..";
                }
            } else{
                echo "Quelque chose s'est mal passé (redirection)";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($connection);
}
?>