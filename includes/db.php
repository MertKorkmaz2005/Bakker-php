<?Php
define('DB_HOST', 'MariaDB');
define('DB_USER', 'root');
define('DB_PASS', '4dy5qwtrsag#!sad');
define('DB_NAME', 'bakker');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
    echo "we are connected";
}