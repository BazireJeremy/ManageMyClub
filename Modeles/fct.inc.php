<?php
function connex($base,$param)
{
	include($param.".inc.php");
	$idcom=mysqli_connect(MYHOST,MYUSER,MYPASS,$base);
	if(!$idcom)
	{
            echo "<script type=text/javascript>";
            echo "alert('Connexion Impossible à la base  $base')</script>";
	}
        
	return $idcom;
}
function AddAdherent($idcom,$nom,$prenom,$dateNaiss,$telephone,$adresse,$compA,$codeP,$ville,$email,$numL,$sexe)
{
    $resultat =false;
   
    $requete ="INSERT INTO adherent(nom, prenom, adresse, adresse2, code_postal, ville, email, sexe, dateNaiss, numTel, numLicence) VALUES ('$nom','$prenom','$adresse','$compA','$codeP','$ville','$email','$sexe','$dateNaiss','$telephone','$numL')";
    //$requete = "insert into adherent(nom,prenom,adresse,adresse2,code_postal,ville,email,sexe,dateNaiss,numTel,numLicence) values ('corinne','bazire','rue','1','83300','dragui','coco@free.fr','femme','1967-07-22','00','aa')";
    //echo $requete. PHP_EOL;
    if (@mysqli_query($idcom,$requete)) {
       $resultat = true;
    }
    return $resultat;
}
function EditAdherent($idcom,$nom,$prenom,$dateNaiss,$telephone,$adresse,$compA,$codeP,$ville,$email,$numL,$sexe,$id)
{
    $resultat =false;
   
    $requete ="UPDATE adherent set nom = '$nom', prenom = '$prenom', adresse = '$adresse', adresse2 = '$compA', code_postal = '$codeP', ville = '$ville', email = '$email', sexe = '$sexe', dateNaiss = '$dateNaiss', numTel = '$telephone', numLicence = '$numL' where idAdherent = $id";
    //$requete = "insert into adherent(nom,prenom,adresse,adresse2,code_postal,ville,email,sexe,dateNaiss,numTel,numLicence) values ('corinne','bazire','rue','1','83300','dragui','coco@free.fr','femme','1967-07-22','00','aa')";
    //echo $requete. PHP_EOL;
    if (@mysqli_query($idcom,$requete)) {
       $resultat = true;
    }
    return $resultat;
}
function AddCompetition($idcom,$nomC,$dateC,$lieu,$genre)
{
    $resultat =false;
    $requete ="INSERT INTO competition(libelleCompete, dateC, lieu, genre) VALUES ('$nomC','$dateC','$lieu','$genre')";
    
    if (@mysqli_query($idcom,$requete)) {
       $resultat = true;
    }
    return $resultat;
}
function getCompetitions($idcom)
{
    $requete="SELECT * FROM competition";   
    $result=@mysqli_query($idcom,$requete);  
    return $result;
}
function AfficheCompetitions($idcom)
{
    $lesCompetitions = getCompetitions($idcom);
    
    if (@mysqli_num_rows($lesCompetitions) > 0) 
    {
        while ($row =@mysqli_fetch_assoc($lesCompetitions)) {
           
            echo '<tr><td>'. dateAnglaisVersFrancais($row["dateC"]) . ' </td><td> '.$row["libelleCompete"].'</td><td><a href="index.php?uc=competition&action=profil&c='. $row["idC"].'" class="list-group-item list-group-item-action list-group-item-info"><img style="display:block; margin : auto;" src="Images/eye.png" class="img-rounded border" alt="modif" name="modif"> </td></a></tr>';
        }
    }
}
function remplirChampAdherent($idcom)
{
    $adherent = getAdherent($idcom,$_GET['p']);
    if (@mysqli_num_rows($adherent) > 0) 
    {
        $row =@mysqli_fetch_assoc($adherent);
        echo'<div class="form-group">';
        echo'<label for="nom" class="center">Nom:</label>';
        echo'<input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="'.$row['nom'].'" required>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="prenom">Prénom:</label>';
        echo'<input type="text" class="form-control" id="prenom" placeholder="Prenom" value="'.$row['prenom'].'" name="prenom" required>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="date">Date de naissance:</label>';
        echo'<input class="form-control" value="'.$row['dateNaiss'].'" type="date" id="date" name="date" required>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="telephone">Téléphone:</label>';
        echo'<input type="tel" maxlength="10" class="form-control" value="'.$row['numTel'].'" id="telephone" placeholder="Enter username" name="telephone" required>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="adresse">Adresse:</label>';
        echo'<input type="text" class="form-control" value="'.$row['adresse'].'" id="adresse" placeholder="Enter username" name="adresse" required>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="compA">Complément adresse:</label>';
        echo'<input type="text" class="form-control" id="compA" value="'.$row['adresse2'].'" placeholder="Enter username" name="compA" required>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo' <div class="form-group">';
        echo'<label for="codeP">Code postal:</label>';
        echo'   <input type="text" class="form-control" id="codeP" value="'.$row['code_postal'].'" placeholder="Enter username" name="codeP" required>';
        echo'  <div class="valid-feedback">Correct.</div>';
        echo'   <div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="ville">Ville:</label>';
        echo' <input type="text" class="form-control" id="ville" value="'.$row['ville'].'" placeholder="Enter username" name="ville" required>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="email" style="text-align: center">Adresse mail:</label>';
        echo'<div class="input-group mb-3">';
        echo'<div class="input-group-append">';
        echo'<span class="input-group-text">@</span>';
        echo'</div>';
        echo'<input type="text" class="form-control" id="email" value="'.$row['email'].'" placeholder="Enter username" name="email" required>';
        echo'</div>';
        echo'<div class="valid-feedback">Correct.</div>';
        echo'<div class="invalid-feedback">Veuillez renseigner ce champ.</div>';
        echo' </div>';
        echo'<div class="form-group">';
        echo' <label for="numL">Numéro de licence:</label>';
        echo'<input type="text" class="form-control" id="numL" value="'.$row['numLicence'].'" placeholder="Enter username" name="numL" maxlength="10">';
                
        echo' </div>';
        echo'<div class="form-group">';
        echo'<label for="sexe">Sexe:</label>';
        echo'<div class="radio">';
        if ($row["sexe"]== "M")
        {
            echo' <label><input type="radio" name="sexe" id="sexe" value="homme" checked>Homme</label>';
            echo' <label><input type="radio" name="sexe" id="sexe" value="femme">Femme</label>';
        }
        else
        {
            echo' <label><input type="radio" name="sexe" id="sexe" value="homme">Homme</label>';
            echo' <label><input type="radio" name="sexe" id="sexe" value="femme" checked>Femme</label>';
        }
        
        echo'</div>';
        echo'</div>';
        
    
    }
    
    
}
function afficheProfilAdherent($idcom)
{
    $adherent = getAdherent($idcom,$_GET['p']) ;
    if (@mysqli_num_rows($adherent) > 0) 
    {
        while ($row =@mysqli_fetch_assoc($adherent)) {
            if($row['sexe'] == 'M')
            {
                echo '<img src="Images/homme.png" class="img-rounded border" alt="profil" name="profil"><br>';
            }
            else
            {
                echo '<img src="Images/femme.png" class="img-rounded border" alt="profil" name="profil"><br>';
            }
            echo '<h2>'.$row['nom'].' '.$row['prenom'].'</h2>';
            echo '<img src="Images/anniversaire.png" class="img-rounded" alt="anniversaire" name="anniversaire"><br>';
            echo '<p style="display:inline-block;margin-left:10px">'.dateAnglaisVersFrancais($row['dateNaiss']).'</p><br>';
            echo '<img src="Images/sexe.png" class="img-rounded" alt="sexe" name="sexe"><br>';
            if($row['sexe'] == 'M')
            {
                echo '<p style="display:inline-block;margin-left:10px">Masculin </p>';
            }
            else
            {
                echo '<p style="display:inline-block;margin-left:10px">Féminin </p>';
            }
            echo'<br>';
            echo '<img src="Images/smartphone.png" class="img-rounded" alt="telephone" name="telephone"><br>';
            echo '<p style="display:inline-block;margin-left:10px">'. $row['numTel'] .'</p><br>';
            echo '<img src="Images/email.png" class="img-rounded" alt="email" name="email"><br>';
            echo '<p style="display:inline-block;margin-left:10px">'. $row['email'] .'</p><br>';
            echo '<img src="Images/house.png" class="img-rounded" alt="adresse" name="adresse"><br>';
            echo '<p style="display:inline-block;margin-left:10px">'. $row['adresse'] .'&nbsp'. $row['adresse2'] .'<br>'.$row['code_postal'] .'&nbsp'. $row['ville'] .' </p><br><br>';
            echo '<a style="display:inline-block;margin-left:10px" href="index.php?uc=adherent&action=modifier&p='. $row["idAdherent"].'" class="list-group-item list-group-item-action"><img src="Images/edit.png" class="img-rounded" alt="adresse" name="adresse"></a>';
        }
    }
}
function afficheProfilCompetition($idcom)
{
    $competition = getCompetition($idcom,$_GET['c']) ;
    if (@mysqli_num_rows($competition) > 0) 
    {
        while ($row =@mysqli_fetch_assoc($competition)) {
            echo '<img src="Images/bowling.png" class="img-rounded border" alt="profil" name="profil"><br>';

            echo '<h2>'.$row['libelleCompete'].'</h2>';
            echo '<img src="Images/calendar.png" class="img-rounded" alt="telephone" name="telephone"><br>';
            echo '<p style="display:inline-block;margin-left:10px">'.dateAnglaisVersFrancais($row['dateC']).'</p><br>';
            echo '<img src="Images/house.png" class="img-rounded" alt="adresse" name="adresse"><br>';
            echo '<p style="display:inline-block;margin-left:10px">'. $row['lieu'] .' </p><br><br>';
            
            
            echo '<img src="Images/priority.png" class="img-rounded" alt="priorite" name="priorite"><br>';
            echo '<p style="display:inline-block;margin-left:10px">'. $row['genre'] .'</p><br>';
            
            echo '<a style="display:inline-block;margin-left:10px" href="index.php?uc=competition&action=modifier&c='. $row["idC"].'" class="list-group-item list-group-item-action"><img src="Images/edit.png" class="img-rounded" alt="edit" name="edit"></a>';
        }
    }
}
function AfficheListeAdherents($idcom)
{
    $lesAdherents = getAdherents($idcom);
    
    if (@mysqli_num_rows($lesAdherents) > 0) 
    {
        while ($row =@mysqli_fetch_assoc($lesAdherents)) {
           
            echo '<a href="index.php?uc=adherent&action=profil&p='. $row["idAdherent"].'" class="list-group-item list-group-item-action">'. $row["nom"] . ' '.$row["prenom"].'</a>';
        }
    }
}
/***
 * fonction qui recupere les infos de l'utilisateur
 */
function getAdherents($idcom)
{
    $requete="SELECT * FROM adherent order by nom ASC";   
    $result=@mysqli_query($idcom,$requete);  
    return $result;
}
function getCompetition($idcom,$id)
{
    $requete = "select * from competition where idC= $id ;";
    $result=@mysqli_query($idcom,$requete);  
    return $result;
}
 function getAdherent($idcom,$id)
{
    $requete = "select * from adherent where idAdherent= $id ;";
    $result=@mysqli_query($idcom,$requete);  
    return $result;
}
function getMonth($month)
{
        $month_arr[1]=   "janvier";
        $month_arr[2]=   "février";
        $month_arr[3]=   "mars";
        $month_arr[4]=   "avril";
        $month_arr[5]=   "mai";
        $month_arr[6]=   "juin";
        $month_arr[7]=   "juillet";
        $month_arr[8]=   "août";
        $month_arr[9]=   "septembre";
        $month_arr[10]=  "octobre";
        $month_arr[11]=  "novembre";
        $month_arr[12]=  "décembre";

        if(substr($month,0,1)=="0")
        {
            $month=str_replace("0","",substr($month,0,2));
        }
        return $month_arr[$month];
}
function dateAnglaisVersFrancais($maDate){
   @list($annee,$mois,$jour)=explode('-',$maDate);
   $date="$jour"." ".getMonth($mois)." ".$annee;
   return $date;
}
function dateTimeAnglaisVersFrancais($maDate)
{
    @list($dates,$time)= explode(' ', $maDate);
    @list($annee,$mois,$jour)=explode('-',$dates);
    @list($h,$m,$s)=explode(':',$time);
    $date="$jour"." ".getMonth($mois)." ".$annee." ".$h.":".$m;
   return $date;
}

?>

