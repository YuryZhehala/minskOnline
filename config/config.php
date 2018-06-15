<?php
session_start();
$dblocation = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'php';
$dbconn = mysqli_connect($dblocation, $dbuser, $dbpass, $dbname);
if (! $dbconn) {
	exit ('Error connect');
}

// unction PR($var)
// {
// 	echo '<pre>';
// print_r($var);
// 	echo '</pre>';
// }