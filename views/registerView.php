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

    <!-- navbar -->

    <!-- formulaire -->

    <div class="containerRegister">
      <div class="registerBox">
        <div class="registerTitle">
          <p>S'enregistrer</p>
        </div>
        <span><hr /></span>
        <div class="registerForm">
          <form action="registerView.php" method="post" id="register">
            <input
              type="text"
              id="username"
              name="user"
              required="required"
              placeholder="Nom d'utilisateur"
            />
            <br />

            <input
              type="mail"
              id="email"
              name="description"
              required="required"
              placeholder="Email"
            />
            <br />

            <input
              type="pass"
              id="password"
              name="psw"
              required="required"
              placeholder="Mot de passe"
            />
            <br />
          </form>
        <p>Déjà inscrit ? Connectez vous <a href="#">ici</a>.</p>
        </div>
      </div>
    </div>
  </body>
</html>
