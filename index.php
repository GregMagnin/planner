<?php

 require_once 'helpers.php';

 switch (getUri()) {
     case '/':
         require_once controllers('login');
        break;
    case '/register':
        require_once controllers('register');
        break;
    case '/calendar':
    require_once controllers('calendarDay');
    break;
        case '/calendarweek':
            require_once controllers('calendarWeek');
            break;
        case '/createagenda':
            require_once controllers('createAgenda');
            break;
        default:
        require_once controllers('error');
}
