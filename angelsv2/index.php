
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

        echo $_POST["mail"];
        echo $_POST["nom"];
        echo $_POST["sujet"];
        echo $_POST["telephone"];


      $mail = mail($_POST["mail"],"Angels","Bonjour ,".$_POST["nom"]."c'est pour ".$_POST["sujet"]."Votre numero est".$_POST["telephone"]);
      echo $mail;
      
    break;



}

include "footer.php" ;
?>
