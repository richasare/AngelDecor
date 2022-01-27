
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
        include("vues/accueil2.php") ;
    break;
    case "env" :
        include("vues/accueil2.php") ;
        
        $mail = $_POST["mail"];
        $nom = $_POST["nom"];
        $sujet =  $_POST["sujet"];
        $telephone =  $_POST["telephone"];
        include ("envoieMail.php");
        
      

    break;
    case "accueilm" :
        include("vues/accueilm.php") ;
    break;
    case "envm" :
        include("vues/accueilm.php") ;
        
        $mail = $_POST["mail"];
        $nom = $_POST["nom"];
        $sujet =  $_POST["sujet"];
        $telephone =  $_POST["telephone"];
        include ("envoieMail.php");
        
      

    break;



        
}

include "footer.php" ;
?>