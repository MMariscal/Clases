<?php

/*$name = "agustin".date('Y H i \n j');

echo hash('sha256', $name);

die;*/


require_once ('../modules/core/src/core/models/parseUrl.php');

$request = parseURL();
//$request = routeUrl($request);

switch($request['controller'])
{
    case 'users':
        include_once('../modules/application/src/application/controllers/users.php');
    break;
    case 'error':
    break;    
    case 'index':
        include_once('../modules/application/src/application/controllers/index.php');
    break;
}















