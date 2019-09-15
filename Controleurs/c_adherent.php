<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'visualisation';
}
$action = $_REQUEST['action'];
switch($action){
	case 'visualisation':{
                include("vues/v_sommaire.php");
                include("vues/v_adherent.php");
		break;
	}
    case 'profil':{
        include("vues/v_sommaire.php");
        include("vues/v_adherent_profil.php");

        break;
    }
	case 'nouveau':{ 
            

            include("vues/v_sommaire.php");
            include("vues/v_adherent_nouveau.php");
            break;	
	}
    case 'validnouveau':{
        $nom = $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $dateNaiss = $_REQUEST['date'];
        $telephone = $_REQUEST['telephone'];
        $adresse = $_REQUEST['adresse'];
        $compA = $_REQUEST['compA'];
        $codeP = $_REQUEST['codeP'];
        $ville = $_REQUEST['ville'];
        $email = $_REQUEST['email'];
        $numL = $_REQUEST['numL'];
        $sexe = $_REQUEST['sexe'];
        if ($sexe ==  'femme')
        {
            $sexe = 'F';
        }
        else
        {
            $sexe = 'M';
        }
        if(AddAdherent($idcom,$nom,$prenom,$dateNaiss,$telephone,$adresse,$compA,$codeP,$ville,$email,$numL,$sexe))
        {
            include("vues/v_sommaire.php");
            echo'<div class="alert alert-success alert-dismissible fade show">';
            echo'<button type="button" class="close" data-dismiss="alert">&times;</button>';
            echo'<strong>Success!</strong> Vous venez d\'ajouter un nouvel adherent.';
            echo "</div>";
        }
        else
        {
            echo "<script>";
            echo "alert('Une erreur c est produite<br>" . mysqli_error($idcom)."')</script>";
        }
        
		include("vues/v_adherent.php");
		break;
    }
    case 'modifier':{
        include("vues/v_sommaire.php");
        include("vues/v_adherent_modifier.php");
        break;
    }
    case 'validmodif':{
        $nom = $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $dateNaiss = $_REQUEST['date'];
        $telephone = $_REQUEST['telephone'];
        $adresse = $_REQUEST['adresse'];
        $compA = $_REQUEST['compA'];
        $codeP = $_REQUEST['codeP'];
        $ville = $_REQUEST['ville'];
        $email = $_REQUEST['email'];
        $numL = $_REQUEST['numL'];
        $sexe = $_REQUEST['sexe'];
        if ($sexe ==  'femme')
        {
            $sexe = 'F';
        }
        else
        {
            $sexe = 'M';
        }
        if(EditAdherent($idcom,$nom,$prenom,$dateNaiss,$telephone,$adresse,$compA,$codeP,$ville,$email,$numL,$sexe,$_GET['p']))
        {
            echo "<script>";
            echo "alert('adherent modifié')</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('Une erreur c est produite<br>" . mysqli_error($idcom)."')</script>";
        }
    }
    case 'supprimer':{
        
    }
        
	default :{
        include("vues/v_sommaire.php");
		include("vues/v_adherent.php");
		break;
	}
}

