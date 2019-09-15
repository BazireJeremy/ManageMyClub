<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'visualiser';
}
$action = $_REQUEST['action'];
switch($action){
	case 'visualiser':{
                include("vues/v_sommaire.php");
                include("vues/v_competition.php");
		break;
	}
	case 'nouveau':{ 
            include("vues/v_sommaire.php");
            include("vues/v_competition_nouveau.php");
            break;	
	}
    case 'validnouveau':{
        $nomC = $_REQUEST['nomC'];
        $dateC = $_REQUEST['date'];
        $lieu = $_REQUEST['lieu'];
        $genre = $_REQUEST['genre'];
        if(AddCompetition($idcom,$nomC,$dateC,$lieu,$genre))
        {
            echo "<script>";
            echo "alert('Nouvelle compétition ajouté')</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('Une erreur c/'est produite<br>" . mysqli_error($idcom)."')</script>";
        }
    }
    case 'profil':{
        include("vues/v_sommaire.php");
        include("vues/v_competition_profil.php");

        break;
    }   
    case 'inscrire':{
        include("vues/v_sommaire.php");
        include("vues/v_competition_inscrit.php");
        break;
    }
        
	default :{
                include("vues/v_sommaire.php");
                include("vues/v_competition.php");
		        break;
	}
}

