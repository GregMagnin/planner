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
    
    <section class="sidebar">
        <a href="#openModal">
            <button class="new" for="modal-content">
            <img src="/assets/img/add.png">
            Créer
            </button>
        </a>
        <hr>
        
        <div class="calendar">
            <div class="month">
                <div>Septembre</div>
                <div class="pre"><</div>
                <div class="nex">></div>
            </div>

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
        <hr>
        
        <div>
            <button class="button" href="#">Filtrer<img src="/assets/img/down-arrow.png">
            </button>
        </div>
        <div>
            <div><input class="" type="checkbox">Tout</div>
            <div><input class="" type="checkbox">Rendez-vous</div>
            <div><input class="" type="checkbox">Anniversaires</div>
            <div><input class="" type="checkbox">Rappels</div>
        </div>
    </section>

<div id="openModal" class="modalDialog">
    <div>
        <header>Créer un évènement</header>
        <a href="#close" title="Close" class="close">X</a>
        <span>
            <hr>
        </span>
            <title>Créer un évènement</title>
            <input type="text" placeholder="Nom de l'évènement">
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
                <div><img src="/assets/img/clock.png"></div>
                <div>
                    <input type="date" id="start" name="" value="2022-09-07" min="2022-01-01" max="2022-12-31">
                </div>
                <div><input id="allday" type="checkbox">Toute la journée</div>
                <div class="hours">
                    <input type="time" name="" value="14:12">
                </div>
                <div class="hours">
                    <input type="time" name="" value="15:12">
                </div>
            </section>
            <section class="reminder">
                <div>
                    <img src="/assets/img/friend.png">
                    <button>Inviter des amis</button>
                </div>
                <div>
                    <input class="" type="checkbox">Rappel                    
                        <select name="reminder" id="reminder">
                            <option value="minute">30 minutes avant</option>
                            <option value="hour">1 heure avant</option>
                            <option value="2hour">2 heures avant</option>
                            <option value="day">1 jour avant</option>
                        </select>                    
                </div>
            </section>
            <textarea name="" cols="60" rows="10"></textarea>
            <button>Enregistrer</button>
   </div>
</div>

</body>

</html>