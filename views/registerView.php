<html lang="fr">

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
      
        <hr />
      
      <div class="registerForm">
        <form method="post" action="../models/registerModel.php">
          <input type="text" id="username" name="user" required="required" placeholder="Nom d'utilisateur" />
          <br />

          <input type="text" id="email" name="mail" required="required" placeholder="Email" />
          <br />

          <input type="password" id="password" name="psw" required="required" placeholder="Mot de passe"/>
          <br />
          <input type="password" id="passwordConfirm" name="passwordConfirm" required="required"
            placeholder="Confirmez le mot de passe" />
            <input type="submit" class="submit">
        </form>
        <p class="alreadyRegistered">
          Déjà inscrit ? Connectez vous <a href="loginView.php">ici</a>.
        </p>
      </div>
    </div>
  </div>
</body>

</html>