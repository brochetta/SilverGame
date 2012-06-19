<?php
session_start();

$PARAM_hote='localhost'; // le chemin vers le serveur
$PARAM_port='3306';
$PARAM_nom_bd='silvergame'; // le nom de votre base de données
$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
$PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter

try
{
        $BDD = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
        $BDD->exec('SET NAMES utf8');
}
 
catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
}
$BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

define("WEBROOT", "/SilverGame/");
$header='';

//include("parser.php");

/*function redirection($texte, $lien='')
{
    if($lien == ''){
   echo'<div id="message_info">
    <span class="texte">'.$texte.'</span><br />
    Vous allez être rediriger dans 2 secondes<br />
    <a href='.$_SERVER["HTTP_REFERER"] .'>Cliquez ici</a> pour être redirigé tout de suite.
    </div>
    <META http-equiv="refresh" content="2; URL='.$_SERVER["HTTP_REFERER"] .'"';
    }
    else{
   echo'<div id="message_info">
    <span class="texte">'.$texte.'</span><br />
    Vous allez être rediriger dans 2 secondes<br />
    <a href='.$lien.'>Cliquez ici</a> pour être redirigé tout de suite. 
    </div>
    <META http-equiv="refresh" content="2; URL='.$lien.'"';
    }
}*/

if(!isset($_GET['p'])) {$_GET['p']="index";}
if(!file_exists("content/".$_GET['p'].".php")) {$_GET['p']="404";}

ob_start();
include "content/".$_GET['p'].".php";
$content_for_layout = ob_get_contents();

/*function protect($rang)
{
    if(isset($_SESSION[$rang]))
    {
        $protect=0;
    }
    else{
        $protect=1;
    }
    return $protect;
}*/


ob_end_clean();

include "layouts/default.php";

?>