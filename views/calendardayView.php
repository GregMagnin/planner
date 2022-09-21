<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/calendar.css">
    <title>Calendrier</title>
    
</head>
<body>


<section class="sidebar">
        <div><!-- <a>
                <button>
                    <img src="/assets/img/add.png">
                </button></a> -->
                <h2>Agenda</h2>
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
                <div class="guestCheck"><input  type="checkbox">Invité</div>
            </div>
        </div>
        <hr>

       <!-- <div class="calendar">
            <div class="month">
                <div>Septembre</div>
                <div class=""> < ></div>
            </div>
                <br>
                <div class="grid_numbers">
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                    <div>10</div>
                    <div>11</div>
                    <div>12</div>
                    <div>13</div>
                    <div>14</div>
                    <div>15</div>
                    <div>16</div>
                    <div>17</div>
                    <div>18</div>
                    <div>19</div>
                    <div>20</div>
                    <div>21</div>
                    <div>22</div>
                    <div>23</div>
                    <div>24</div>
                    <div>25</div>
                    <div>26</div>
                    <div>27</div>
                    <div>28</div>
                    <div>29</div>
                    <div>30</div>
                </div>
            </div>
            <hr> -->
            <div><a href="#openModal">
                    <h2 class="new" for="modal-content">Evènements</h2>
                    </button></a>
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
            
    </section>

    <div id="openModal" class="modalDialog">
        <div>
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
                    <div><img src="/assets/img/clock.png">
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
                <div class="description" placeholder="description">Ajoutez une description</div>
                <textarea name="" cols="60" rows="10"></textarea>
                <button class="event">Enregistrer</button>
            </div>
        </div>
    </div>



<div class="parent">
<div class="div1">00h00 </div>
<span><hr></span>
<div class="div2">01h00 </div>
<span><hr></span>
<div class="div3">02h00 </div>
<span><hr></span>
<div class="div4">03h00 </div>
<span><hr></span>
<div class="div5">04h00 </div>
<span><hr></span>
<div class="div6">05h00 </div>
<span><hr></span>
<div class="div7">06h00 </div>
<span><hr></span>
<div class="div8">07h00 </div>
<span><hr></span>
<div class="div9">08h00 </div>
<span><hr></span>
<div class="div10">09h00 </div>
<span><hr></span>
<div class="div11">10h00 </div>
<span><hr></span>
<div class="div12">11h00 </div>
<span><hr></span>
<div class="div13">12h00 </div>
<span><hr></span>
<div class="div14">13h00 </div>
<span><hr></span>
<div class="div15">14h00 </div>
<span><hr></span>
<div class="div16">15h00 </div>
<span><hr></span>
<div class="div17">16h00 </div>
<span><hr></span>
<div class="div18">17h00 </div>
<span><hr></span>
<div class="div19">18h00 </div>
<span><hr></span>
<div class="div20">19h00 </div>
<span><hr></span>
<div class="div21">20h00 </div>
<span><hr></span>
<div class="div22">21h00 </div>
<span><hr></span>
<div class="div23">22h00 </div>
<span><hr></span>
<div class="div24">23h00 </div>
<span><hr></span>
</div>
    
</body>
</html>