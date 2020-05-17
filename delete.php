<?php
session_start();
require_once("connexion.php");
$idp=$_GET["idp"];
$sql="delete from publication where id_P='$idp' ";
$prep=$con->prepare($sql);
$prep->execute();
$nbr=$prep->rowCount();
try{
    if(isset($_SESSION["id"])){
 
        if($nbr>0){
            header("location:profile.php");
        }
        else{
            echo "<script>alert('vide');</script>";
        }
    }
    else{
        header("location:error.php");
    }
    


}
catch(Exception $e){
    echo $e->getMessage();
}

?>