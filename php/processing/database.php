<?php
$dsn = 'mysql:host=localhost;dbname=craftblog;charset=UTF8';
$username = 'root';
$passwd = 'toor';

try
{$craftblog = new PDO($dsn ,$username ,$passwd );}
catch(PDOException $exeption)
{echo 'Connexion échouée : ' . $exeption->getMessage();}
