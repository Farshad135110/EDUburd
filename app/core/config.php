<?php
if($_SERVER['SERVER_NAME'] == 'localhost')
{
    /*database config*/
    define('DBNAME', 'eduburd');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS','');
    define('DBDRIVER','');



    define('ROOT', 'http://localhost/EDUburd/public');
}else{
    define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', "EDUburd");
//true means show errors
define('DEBUG',true);


