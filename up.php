<?php

include('layout/functions.php');

$boundary = "__".md5(uniqid(rand()));
$extensions = array('.pDF', '.pDf', '.pdF', '.pdf', '.PDF', '.PDf', '.PdF', '.Pdf');
$dossier = '/homez.68/generala/www/france/upload/';
$tailleMax = 500000;

$nom = verif($_POST['nom']) ;
$prenom = verif($_POST['prenom']) ;
$birthday = verif($_POST['BirthDay']) ;
$birthmonth = verif($_POST['BirthMonth']) ;
$birthyear = verif($_POST['BirthYear']) ;
$pays = verif($_POST['pays']) ;
$bac = verif($_POST['bac']) ;
$domaine = verif($_POST['domain']) ;
$ecole = verif($_POST['ecole']) ;

$fichier = verif(basename($_FILES['fichier']['name']));
$nomTmp        = $_FILES['fichier']['tmp_name'] ;
$typeFichier   = $_FILES['fichier']['type'] ;
$error         = $_FILES['fichier']['error'] ;

$taille = filesize($nomTmp);
$extension = strrchr(verif($_FILES['fichier']['name']), '.');


//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Only PDF files are allowed to upload';
}
if($taille>$tailleMax)
{
     $erreur = 'The PDF file sent is too big, it is bigger than $tailleMax';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = verif($fichier);

     if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier . $boundary)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload successful !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Upload failed !';
     }
}
else
{
     echo $erreur;
}


$monfichier = fopen("$dossier"."$fichier"."$boundary".".info", 'w+');
 
fputs($monfichier, "nom: ".$nom."\n" ) ;
fputs($monfichier, "prenom: ".$prenom."\n" ) ;
fputs($monfichier, "pays: ".$pays."\n" ) ;
fputs($monfichier, "birthday: ".$birthday."\n" ) ;
fputs($monfichier, "birthmonth: ".$birthmonth."\n" ) ;
fputs($monfichier, "birthyear: ".$birthyear."\n" ) ;
fputs($monfichier, "bac: ".$bac."\n" ) ;
fputs($monfichier, "domaine: ".$domaine."\n" ) ;
fputs($monfichier, "ecole: ".$ecole."\n" ) ;


fclose($monfichier);



?>



