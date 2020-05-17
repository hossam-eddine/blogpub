<?php
$dsn="mysql:host=localhost;dbname=createpub;port=3308";
$user="root";
$pass="";

try{
$con=new PDO($dsn,$user,$pass);
$con->query('SET NAMES utf8');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
echo "failed"." ".$e->getMessage();
die();
}

?>