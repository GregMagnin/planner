<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Se connecter</title>
</head>
<body>
    <!-- navbar -->

    <header>
    <div class="header">
        <div class="icon-website">
            <img src="../assets/img/website.png" alt="Logo du site">
        </div>
    </div> 
</header>
    
    <!-- navbar -->

    <!-- formulaire -->

    <div class="containerLogin">
      <div class="loginBox">
        <div class="loginTitle">
          <p>Se connecter</p>
        </div>
        <span><hr /></span>
        <div class="loginForm">
          <form action="loginView.php" method="post" id="login">
            <input
              type="text"
              id="username"
              name="user"
              required="required"
              placeholder="Nom d'utilisateur"
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
        <p>Pas de compte ? Inscrivez vous <a href="#">ici</a>.</p>
        </div>
      </div>
    </div>


</body>
</html>