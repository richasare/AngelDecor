
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


        
}

include "footer.php" ;
?>