<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/

//We log to the DataBase

$hostname="localhost";
$username="root";
$password="";
$database="aimit";

$connection = mysql_connect($hostname,$username,$password) or die (mysql_error());
echo $connection;
mysql_select_db($database,$connection);
mysql_connect('localhost', 'root', '');
mysql_select_db('aimit');

//Username of the Administrator
$admin='admin';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/

?>