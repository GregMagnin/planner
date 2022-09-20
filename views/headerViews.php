<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/header.css" rel="stylesheet">
    <title>header</title>
</head>

<header>
    <div class="header">
        <div class="icon-left">

            <div class="icon-burger">
                <img src="../assets/img/burger.png" alt="Logo menu">
            </div>

            <div class="icon-website-phone">
                <img src="../assets/img/icon-website-phone.png" alt="Logo du site">
            </div>

            <div class="icon-website">
                <img src="../assets/img/website.png" alt="Logo du site">
            </div>

            <div class="dropdown-header-phone">
                <div class="day">Septembre</div>

                <div class="div-button">
                    <button class="button-user"><img src="../assets/img/down-arrow.png">
                    </button>
                    <!-- <div class="dropdown-content-phone">
                        <a href="#">Jour</a>
                        <a href="#">Semaine</a>
                        <a href="#">Mois</a>
                    </div> -->
                </div>
            </div>

        </div>

        <div class="icon-right">

            <div class="dropdown-header">
                <div class="day">jour</div>

                <div class="div-button">
                    <button class="button"><img src="../assets/img/down-arrow.png">
                    </button>
                    <div class="dropdown-content">
                        <a href="calendarDayView.php?view=day">Jour</a>
                        <a href="calendarWeekView.php?view=week">Semaine</a>
                        <a href="calendarMonthView.php?view=month">Mois</a>
                    </div>
                </div>
            </div>


            <div class="logo-right">
                <div class="icon-events"><a href="#openModal">
                        <button class="new" for="modal-content">
                            <img src="../assets/img/events.png">
                        </button></a>
                </div>

                <div id="openModal" class="modalDialog">
                    <div>
                        <header>Créer un évènement</header>
                        <a href="#close" title="Fermer" class="close">X</a>
                        <form class="modal-content" method="post" action="../controllers/eventController.php">
                            <span>
                                <hr>
                            </span>
                            <title>Créer un évènement</title>
                            <input type="text" placeholder="Nom de l'évènement" reset name="name">
                            <br>
                            <label for="category">
                                <select name="category" id="category">
                                    <option value="Reunion">Réunion</option>
                                    <option value="Anniversaire">Anniversaire</option>
                                    <option value="RDV">Rendez-vous</option>
                                    <option value="Tache">Tâche</option>
                                </select>
                            </label>
                            <section class="date">
                                <div><img src="/assets/img/clock.png">
                                    <input type="date" name="date" value="2022-09-07" min="2022-01-01" max="2022-12-31">
                                </div>
                                <div class="centercheckbox">
                                    <input id="allday" type="checkbox" name="hourday">Journée
                                    <div class="day">
                                        <input class="" type="time" name="hourstart" value="14:12">
                                        <input class="" type="time" name="hourend" value="15:12">
                                    </div>
                                </div>
                            </section>
                            <section class="reminder">
                                <div>
                                    <img src="/assets/img/add-user.png">
                                    <button>Inviter des amis</button>
                                </div>
                                <div class="centercheckbox">
                                    <input class="" type="checkbox" id="reminder" checked>Rappel
                                    <select name="reminder" class="rappel">
                                        <option value="minute">30 minutes avant</option>
                                        <option value="hour">1 heure avant</option>
                                        <option value="2hour">2 heures avant</option>
                                        <option value="day">1 jour avant</option>
                                    </select>
                                </div>
                            </section>
                            <div class="">Ajoutez une description</div>
                            <textarea name="description" cols="60" rows="10"></textarea>
                            <button class="event" type="submit" name="submit">Enregistrer</button>
                            <? if(isset ($alert)) echo $alert; ?>
                        </form>
                    </div>
                </div>


                <div class="icon-calendar"><a href="#openModal2">
                        <button class="new" for="modal-content">
                            <img src="../assets/img/calendar.png">
                        </button></a>
                </div>

                <div id="openModal2" class="modalDialog">
                    <div>
                        <header>Créer un agenda</header>
                        <a href="#close" title="Fermer" class="close">X</a>
                        <div class="modal-content">
                            <span>
                                <hr>
                            </span>
                            <title>Créer un agenda</title>
                            <input type="text" placeholder="Nom de l'agenda" reset>
                            <br>
                            <div class="info-calendar">
                                <section class="date">
                                    <div class="invite-friend">
                                        <img src="../assets/img/invite-friend.png">
                                        <button>Inviter des amis</button>
                                    </div>
                                </section>
                                <section class="reminder2">

                                    <div class="radio-button">
                                        <div>
                                            <input type="radio" id="male" name="gender">
                                            <label for="male">Public</label>
                                        </div>

                                        <div class="radio-space">
                                            <input type="radio" id="female" name="gender">
                                            <label for="female">Private</label>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="description" placeholder="description">Ajoutez une description</div>
                            <textarea name="" cols="60" rows="10"></textarea>
                            <button class="event">Enregistrer</button>
                        </div>
                    </div>
                </div>


                <div class="icon-user">
                    <select class="user" name="user" id="">
                        <option class="opt">
                        </option>
                        <option value="logout">Se deconnecter</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
</body>

</html>