
<?php

session_start();
require_once("connexion.php");
$error=array("title"=>"","content"=>"");
if(isset($_POST["Cancel"])){
  header("location:profile.php");
}
if(isset($_SESSION["id"])){
if(isset($_POST["submit"])){

$title=htmlspecialchars($_POST["title"]);
$ip=$_GET["id"];
$content=htmlspecialchars($_POST["content"]);
if(empty($title)){
 $error["title"]="Please enter title";
}
if(empty($content)){
  $error["content"]="Please enter content";
 }
 if(array_filter($error)){

}
else{





    
$query="update  publication set title='$title',content='$content' where id_P='$ip' ";
$prep=$con->prepare($query);
$prep->execute();
$nbr=$prep->rowCount();
if($nbr>0){
    header("location:profile.php");

}
else{
    echo "error";
}

}
}
}

  else{
    header("location:error.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<div class="row">
  <form class="col s6" method="POST">
    <div class="row">
    <div class="input-field col s6">
    <input   name="title" type="text" class="validate">
    <label class="active" for="title">Title</label>
  </div>
  <div class=" col s12 red-text"><?php echo $error["title"]?></div>
    <div class="input-field col s12">
        <textarea  name="content" class="materialize-textarea"></textarea>
        <label for="content">Content</label>
      </div>
      <div class="col s12 red-text"><?php echo $error["content"]?></div>
      <div class=" input-field col s2">
          <input type="submit" value="update" name="submit" class="btn waves-effect indigo darken-2" />
      </div>
      <div class=" input-field col s2">
          <input type="submit" value="Cancel" name="Cancel" class="btn waves-effect indigo darken-2" />
      </div>
      
    </div>
  </form>
</div>
      
</body>
</html>