<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'accueil';
}
$action = $_REQUEST['action'];
switch($action){
	case 'accueil':{
                include("vues/v_sommaire.php");
		break;
	}
        case '':{
            include("vues/v_sommaire.php");
            break;
        }
	default :{
                include("vues/v_sommaire.php");
		
		break;
	}
}

