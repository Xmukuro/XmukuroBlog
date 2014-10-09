<?php
$db_dsn = 'mysql:host=localhost;dbname=craftblog;charset=UTF8';
$db_username = 'root';
$db_passwd = 'toor';
$securesalt = 'salt this';

try
{$craftblog = new PDO($db_dsn ,$db_username ,$db_passwd );}
catch(PDOException $exeption)
{echo 'Connexion échouée : ' . $exeption->getMessage();}
