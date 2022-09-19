<html lang="fr">

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

      
        if(empty(trim($_POST["description"]))){  // on vérifie si l'email est vide
            $email_err = "Entrez un mot de passe"; // on vérifie si l'email est vide
        } else{
           
            $sql = "SELECT id FROM users WHERE email = :email"; //on récupère l'id des emails dans la table users (:?)
            
            if($stmt = $connection->prepare($sql)){ //préparation de la requête
                
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR); //?
                
               
                $param_email = trim($_POST["description"]); //?
                
                
                if($stmt->execute()){ //execution de la requête
                    if($stmt->rowCount() == 1){ //vérification si l'adresse est déjà utilisée
                        $email_err = "Cet email est déjà pris"; //message d'erreur si l'adresse est déjà utilisée
                    } else{
                        $email = trim($_POST["description"]); //?
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
             
            if($stmt = $connection->prepare($sql)){
                
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
                
              
                $param_username = $username;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); 
                
                ($stmt->execute());
                    
                //     header("location: ../views/loginView.php");
                // } else{
                //     echo "Quelque chose s'est mal passé (redirection)";
                // }
                unset($stmt);
            }
        }
        
        
        unset($pdo);
    
    ?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>S'inscrire</title>
  <link rel="stylesheet" href="../assets/css/register.css" />
</head>

<body>
  <!-- navbar -->

  <header>
    <div class="header">
      <div class="icon-website">
        <img src="../assets/img/website.png" alt="Logo du site" />
      </div>
    </div>
  </header>

  <!-- navbar -->

  <!-- formulaire -->

  <div class="containerRegister">
    <div class="registerBox">
      <div class="registerTitle">
        <p>S'enregistrer</p>
      </div>
      <span>
        <hr />
      </span>
      <div class="registerForm">
        <form method="post" action="../models/registerModel.php">
          <input type="text" id="username" name="user" required="required" placeholder="Nom d'utilisateur" />
          <br />

          <input type="text" id="email" name="mail" required="required" placeholder="Email" />
          <br />

          <input type="text" id="password" name="psw" required="required" placeholder="Mot de passe"/>
          <br />
          <input type="text" id="passwordConfirm" name="passwordConfirm" required="required"
            placeholder="Confirmez le mot de passe" />
            <input type="submit">
        </form>
        <p class="alreadyRegistered">
          Déjà inscrit ? Connectez vous <a href="loginView.php">ici</a>.
        </p>
      </div>
    </div>
  </div>
</body>

</html>