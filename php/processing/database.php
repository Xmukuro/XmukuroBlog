<?php
$craftblog = new mysqli("localhost", "root", "", "craftblog");
$craftblog->select_db('craftblog');
/* Vérification de la connexion */
if ($craftblog->connect_errno)
{
    printf("Échec de la connexion : %s\n", $craftblog->connect_error);
    exit();
}

