<?php


//------------------------------- SETTINGS ----------------------------------------

$dbname = "craftblog";

$maxUsernameLength = 20;
$maxArticleTitleLength = 25;
$securesalt = 'YOU CANT HACK ME NOOB';

$adminUsername = "Admin";
$adminEmail    = "admin@neolectron.fr";
$adminPassword = sha1(md5('password') . $securesalt);


$mydb = new mysqli("localhost", "root", "");
//--------------------------------------------------------------------------------

//do not edit below.

//verification de la connexion
if ($mydb->connect_errno)
{
    printf("Échec de la connexion : %s\n", $mydb->connect_error);
    exit();
}


//creation d'une bdd, et selection (pour dire a query que ça concernera cette bdd).
$mydb->query("CREATE DATABASE IF NOT EXISTS $dbname");
$mydb->select_db($dbname);

//si la table user n'existe pas on la cree
$mydb->query("CREATE TABLE IF NOT EXISTS users(
                                                    userid INT NOT NULL AUTO_INCREMENT,
                                                    username VARCHAR($maxUsernameLength) NOT NULL,
                                                    usermail VARCHAR(254) NOT NULL,
                                                    userpass VARCHAR(40) NOT NULL,
                                                    userrank INT NOT NULL,
                                                    usersince DATE NOT NULL DEFAULT '0000-00-00',

                                                    PRIMARY KEY(userid)
                                                    );");

//si la table article n'existe pas on la cree et on lie authorid a l'userid plus haut.
$mydb->query("CREATE TABLE IF NOT EXISTS article(
                                                    articleid INT NOT NULL AUTO_INCREMENT,
                                                    authorid INT NOT NULL,
                                                    articletitle VARCHAR($maxArticleTitleLength),
                                                    articlesince DATE NOT NULL DEFAULT '0000-00-00',
                                                    article TEXT NOT NULL,

                                                    PRIMARY KEY(articleid),
                                                    FOREIGN KEY(authorid) REFERENCES users(userid)
                                                    );");

//si la table brouillon n'existe pas on la cree et on lie authorid a l'userid plus haut.
$mydb->query("CREATE TABLE IF NOT EXISTS brouillon(
                                                    brouillonid INT NOT NULL AUTO_INCREMENT,
                                                    authorid INT NOT NULL,
                                                    brouillonitle VARCHAR($maxArticleTitleLength),
                                                    brouillonsince DATE NOT NULL DEFAULT '0000-00-00',
                                                    brouillon TEXT NOT NULL,

                                                    PRIMARY KEY(brouillonid),
                                                    FOREIGN KEY(authorid) REFERENCES users(userid)
                                                    );");


//------------- step 2 ----------------//

//ajout d'un utilisateur ($adminUsername).

$mydb->query("INSERT IGNORE INTO users(userid,username,usermail,userpass,userrank,usersince)
                   VALUES (1,'$adminUsername','$adminEmail','$adminPassword',1,CURDATE());
                  ");

//ajoute d'un article écrit par l'Admin (uid=1)
$mydb->query('INSERT IGNORE INTO article(authorid,articlesince,articletitle,article)
                   VALUES (1,CURDATE(),"Exemple de titre","Ceci est un exemple d\'article qu\'il est bien!")');


//on close la connexion pour pas gaspiller des ressources.
$mydb->close();
echo('Done');
?>
silence is golden