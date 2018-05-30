<?php
session_start();
$dblocation = 'localhost';
$dbname = 'php';
$dbuser = 'root';
$dbpass = '';
$dbconn = mysqli_connect($dblocation, $dbuser, $dbpass, $dbname);
if (! $dbconn) {
	exit ('Error connect');
}