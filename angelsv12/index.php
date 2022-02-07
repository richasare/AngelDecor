
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
        include("vues/accueil3.php") ;
        include "footer3.php" ;
    break;
    case "env" :
        include("vues/accueil3.php") ;
        include "footer3.php" ;
        $mail = $_POST["mail"];
        $nom = $_POST["nom"];
        $sujet =  $_POST["sujet"];
        $telephone =  $_POST["telephone"];
        $file_to_attach = $_FILES['fil']['tmp_name'];
        $filename=$_FILES['fil']['name'];
        echo $_FILES['fil']['name'];
        include ("envoieMail.php");



    break;
    case "accueilm" :
        include("vues/accueilm.php") ;
        include "footer.php" ;
    break;
    case "envm" :
        include("vues/accueilm.php") ;
        include "footer.php" ;

        $mail = $_POST["mail"];
        $nom = $_POST["nom"];
        $sujet =  $_POST["sujet"];
        $telephone =  $_POST["telephone"];
        include ("envoieMail.php");



    break;




}


?>
