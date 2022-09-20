<?php

    include "../database/db.php"; //Inclusion de la DB
     
   
    $username = $email = $password = $confirm_password = ""; //déclaration des variables
    $username_err = $email_err = $password_err = $confirm_password_err = ""; //déclaration des variables
     
  
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //Récupération du formulaire
    
        
        if(empty(trim($_POST["user"]))) { // on vérifie si le nom d'utilisateur est vide
            $username_err = "Entrez un nom d'utilisateur"; // on vérifie si le nom d'utilisateur est vide
        } else{ //si le nom d'utilisateur n'est pas vide alors
            
            $sql = "SELECT id FROM users WHERE username= :username"; //on récupère l'id de username dans la table users (:?)
            if($stmt = $connection->prepare($sql)){ //préparation de la requête
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR); //?
                $param_username = trim($_POST["user"]); //?

                if($stmt->execute()){ //on execute la requête
                   $username = trim($_POST["user"]); //?
                } else {
                    echo "Quelque chose s'est mal passé (utilsateur)"; //message d'erreur si cela ne marche pas
                }
                    
                unset($stmt);
            }
        } 
    }

      
        if(empty(trim($_POST["mail"]))){  // on vérifie si l'email est vide
            
            $email_err = "Entrez un email"; // on vérifie si l'email est vide
        } else{
            
            $sql = "SELECT id FROM users WHERE email = :email"; //on récupère l'id des emails dans la table users (:?)
            
            if($stmt = $connection->prepare($sql)){ //préparation de la requête
                
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR); //?
                
               
                $param_email = trim($_POST["mail"]); //?
                
                
                if($stmt->execute()){ //execution de la requête
                    if($stmt->rowCount() == 1){ //vérification si l'adresse est déjà utilisée
                        $email_err = "Cet email est déjà pris"; //message d'erreur si l'adresse est déjà utilisée
                    } else{
                        $email = trim($_POST["mail"]); //?
                    }
                } else{
                    echo "Quelque chose s'est mal passé (email)";
                }
    
              
                unset($stmt);
            }
        }
        
       
        if(empty(trim($_POST["psw"]))){
            $password_err = "Entrez un mot de passe";     
        } elseif(strlen(trim($_POST["psw"])) < 6){
            $password_err = "Le mot de passe doit avoir 6 charactères.";
        } else{
            $password = trim($_POST["psw"]);
        }
        
        
        if(empty(trim($_POST["passwordConfirm"]))){
            $confirm_password_err = "S'il vous plaît confirmez votre mot de passe";     
        } else{
            $confirm_password = trim($_POST["passwordConfirm"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Les mots de passes de correspondent pas";
            }
        }

       
        if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            
            }  else 
            header("location: ../views/errorView.php");
            
             if($stmt = $connection->prepare($sql)){
                
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
                
              
                $param_username = $username;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); 
                
           
                
                if($stmt->execute()){
                    header("location: ../views/loginView.php");
                } else{
                    header("location: ../views/errorView.php");
                }
                unset($stmt);
            
        
            }
        
        unset($connection);
    
    ?>