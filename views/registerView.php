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
      <span>
        <hr />
      </span>
      <div class="registerForm">
        <form action="../models/registerModels.php" method="post">
          <input type="text" id="username" name="user" required="required" placeholder="Nom d'utilisateur" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>" />
          <br />

          <input type="text" id="email" name="description" required="required" placeholder="Email" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?> value="<?php echo $email; ?>" />
          <br />

          <input type="text" id="password" name="psw" required="required" placeholder="Mot de passe" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $password; ?>" />
          <br />
          <input type="text" id="passwordConfirm" name="passwordConfirm" required="required"
            placeholder="Confirmez le mot de passe" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $confirm_password; ?>" />
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