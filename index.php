<?php

require_once './helpers.php';

switch (getUri()) {
    case '/':
        require_once controllers('home');
        break;
    case '/post':
        require_once controllers('post');
        break;
    case '/form':
    require_once controllers('form');
    break;
        default:
        require_once controllers('error');
}
