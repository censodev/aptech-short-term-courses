<?php

define('MODE', 'DEV');
// define('MODE', 'DEV_DEPLOY');
// define('MODE', 'PROD');

switch (MODE) {
    case 'PROD': 
        define('FILE_EXT', '.min');
        define('BASE_URL', 'https://aptechvietnam.com.vn');
        break;
    case 'DEV':
        define('FILE_EXT', '');
        define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/aptech');
        break;
    case 'DEV_DEPLOY':
        define('FILE_EXT', '.min');
        define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/aptech');
        break;
}