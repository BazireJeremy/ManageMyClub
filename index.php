<?php

include("Modeles/fct.inc.php");
$idcom=connex("manage_my_club","myparam");



if(!isset($_REQUEST['uc']) )
{
    $_REQUEST['uc'] = 'accueil';
}	 
$uc = $_REQUEST['uc'];
switch($uc)
{
    case 'accueil':
    {
        include("Controleurs/c_accueil.php");
        break;
    }
    case 'adherent':
    {
       
        include("Controleurs/c_adherent.php");
        break;
    }
    case 'amis':
    {
        include("Controleurs/c_amis.php");
        break;
    }
    case 'competition':
    {
        include("Controleurs/c_competition.php");
        break;
    }
}


