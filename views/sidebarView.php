<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <title>Agenda</title>
</head>

<body>
    <main>
        <section class="sidebar">
            <div>
                <a href="#openModal2">
                    <h2 class="new" for="modal-content">Agenda</h2>
                    </button>
                </a>
            </div>
            <div class="dropdown-header">
                <div class="">Trier</div>

                <div class="div-button">
                    <button class="button"><img src="../assets/img/down-arrow.png"></button>
                    <div class="dropdown-content">
                        <a href="#">Du plus récent</a>
                        <a href="#">Du plus ancien</a>
                        <a href="#">Evènement le plus récent</a>
                    </div>
                </div>
            </div>
            <div>
                <div><input class="publicCheck" type="checkbox">Public</div>
                <div><input class="privateCheck" type="checkbox">Privé</div>
                <div><input class="createCheck" type="checkbox">Créateur</div>
                <div class="guestCheck"><input type="checkbox">Invité</div>
            </div>
            <div class="butt">
                <button id="">Appliquer les filtres</button>
            </div>
            <hr>

            <!-- <div class="calendar">
                <div class="month">
                    <div>Septembre</div>
                    <div class="">
                        <>
                    </div>
                </div>
                <br>
                <div class="grid_numbers">
                    <?php for ($i = 1; $i <= 30; $i++) {
                        echo "<div>$i</div>";
                    } ?>
                </div>
            </div>
            <hr> -->
            <div><a href="#openModal">
                    <h2 class="new" for="modal-content">Evènements</h2>
                    </button>
                </a>
            </div>
            <div class="dropdown-header">
                <div class="">Afficher</div>

                <div class="div-button">
                    <button class="button"><img src="../assets/img/down-arrow.png"></button>
                    <div class="dropdown-content">
                        <a href="#">Tous les jours</a>
                        <a href="#">Jours avec des évènements</a>
                    </div>
                </div>
            </div>

            <div class="dropdown-header">
                <div class="">Trier</div>

                <div class="div-button">
                    <button class="button"><img src="../assets/img/down-arrow.png"></button>
                    <div class="dropdown-content">
                        <a href="#">Du plus récent</a>
                        <a href="#">Du plus ancien</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="allCheck"><input type="checkbox">Tout</div>
                <div class="appointCheck"><input type="checkbox">Rendez-vous</div>
                <div class="birthCheck"><input type="checkbox">Anniversaires</div>
                <div class="reminderCheck"><input type="checkbox">Rappels</div>
            </div>
            <div class="butt">
                <button>Appliquer les filtres</button>
            </div>
        </section>
    </main>
</body>

</html>