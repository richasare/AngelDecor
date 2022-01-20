
<?php
//$deco=false;
//session_start();
include "header.php" ;



//include("modeles/monPdo.php");
//include("modeles/Admin.class.php");

if(empty($_GET["uc"]))
{
    $uc="accueil";
}
else {
    $uc=$_GET["uc"];
}



switch($uc)
{
    case "accueil" :
        include("vues/accueil.php") ;
    break;
    case "env" :
        include("vues/accueil.php") ;

        $mail = $_POST["mail"];
        $nom = $_POST["nom"];
        $sujet =  $_POST["sujet"];
        $telephone =  $_POST["telephone"];
        include ("envoieMail.php");

        //echo $mail.$telephone.$sujet;
      //mail($_POST["mail"],"Angels","Bonjour ,".$_POST["nom"]."c'est pour ".$_POST["sujet"]."Votre numero est".$_POST["telephone"]);

    break;



}

include "footer.php" ;
?>
