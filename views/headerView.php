<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/header.css" rel="stylesheet">
    <title>header</title>
</head>


<body>

<header>
    <div class="header">
        <div class="icon-left">

            <div class="icon-burger">
                <div class="header-burger">
                    <input id="menu__toggle" type="checkbox"/>
                    <label class="menu__btn" for="menu__toggle">
                        <span></span>
                    </label>
                    <div class="menu__box">
                        <div class="header-gradient"></div>
                        <ul>
                            <li><p>Agenda</p></li>
                            <span>
                                <hr>
                            </span>
                            <li><img src="../assets/img/day.png" alt="Logo du jour"> <a class="menu__item"
                                                                                        href="#">Jour</a></li>
                            <li><img src="../assets/img/week.png" alt="Logo de la semaine"> <a class="menu__item"
                                                                                               href="#">Semaine</a></li>
                            <li><img src="../assets/img/month.png" alt="Logo du mois"> <a class="menu__item" href="#">Mois</a>
                            </li>
                            <span>
                                <hr>
                            </span>
                            <li><p>Événements</p></li>
                            <span>
                                <hr>
                            </span>
                            <div>
                                <div class="mobile-allCheck"><input type="checkbox">Tout</div>
                                <div class="mobile-appointCheck"><input type="checkbox">Rendez-vous</div>
                                <div class="mobile-birthCheck"><input type="checkbox">Anniversaires</div>
                                <div class="mobile-reminderCheck"><input type="checkbox">Rappels</div>
                            </div>
                        </ul>
                        <div class="button-mobile">
                            <button id="">Appliquer les filtres</button>
                        </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="icon-website-phone">
                <img src="../assets/img/icon-website-phone.png" alt="Logo du site">
            </div>

            <div class="icon-website">
                <img src="../assets/img/website.png" alt="Logo du site">
            </div>
        </div>

        <div class="icon-right">

            <div class="dropdown-header">
                <div class="day">Jour</div>

                <div class="div-button">
                    <button class="button"><img src="../assets/img/down-arrow.png" alt="Logo d'une flèche">
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Jour</a>
                        <a href="#">Semaine</a>
                        <a href="#">Mois</a>
                    </div>
                </div>
            </div>


            <div class="logo-right">
                <div class="icon-events"><a href="#openModal">
                        <button class="new" for="modal-content">
                            <img src="../assets/img/events.png" alt="Logo d'évenement">
                        </button>
                    </a>
                </div>

                <div id="openModal" class="modalDialog">
                    <div class="big-content">
                        <header>Créer un évènement</header>
                        <a href="#close" title="Fermer" class="close">X</a>
                        <div class="modal-content">
                            <span>
                                <hr>
                            </span>
                            <title>Créer un évènement</title>
                            <input type="text" placeholder="Nom de l'évènement" reset>
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
                                <div><img src="/assets/img/clock.png" alt="img d'une horloge">
                                    <input type="date" name="" value="2022-09-07" min="2022-01-01" max="2022-12-31">
                                </div>
                                <div class="centercheckbox">
                                    <input id="allday" type="checkbox">Journée
                                    <div class="day">
                                        <input class="" type="time" name="" value="14:12">
                                        <input class="" type="time" name="" value="15:12">
                                    </div>
                                </div>
                            </section>
                            <section class="reminder">
                                <div>
                                    <img src="/assets/img/add-user.png" alt="Logo utilisateur">
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
                            <div class="description" placeholder="description">Ajoutez une description</div>
                            <textarea style="width: 300px; height: 120px;"></textarea>
                            <button class="event">Enregistrer</button>
                        </div>
                    </div>
                </div>


                <div class="icon-calendar"><a href="#openModal2">
                        <button class="new" for="modal-content2">
                            <img src="../assets/img/calendar.png" alt="Logo calendrier">
                        </button>
                    </a>
                </div>

                <div id="openModal2" class="modalDialog">
                    <div class="big-content">
                        <header>Créer un agenda</header>
                        <a href="#close" title="Fermer" class="close">X</a>
                        <div class="modal-content2">
                            <span>
                                <hr>
                            </span>
                            <title>Créer un agenda</title>
                            <form action="../models/agendaModel.php" method="post">
                            <input type="text" name="agendaName" placeholder="Nom de l'agenda"   reset>
                            
                            <br>
                            <div class="info-calendar">
                                <section class="date2">
                                    <div class="invite-friend">
                                        <img src="../assets/img/invite-friend.png" alt="Logo invité un ami">
                                        <button>Inviter des amis</button>
                                    </div>
                                </section>
                                <section class="reminder2">

                                    <div class="radio-button">
                                        <div>
                                            
                                            <input type="radio" name="public">
                                            <label for="public">Public</label>
                                        </div>

                                        <div class="radio-space">
                                            <input type="radio" name="private">
                                            <label for="private">Privé</label>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="description" placeholder="description">Ajoutez une description</div>
                            <input name="agendaDescription" type="text" textarea style="width: 300px; height: 120px;"></textarea>
                            <input type="submit" value="Enregistrer" class="event" name="submit">
                            </form>
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


</body>
</html>
