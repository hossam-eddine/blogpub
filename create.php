
<?php

  session_start();
  require_once("connexion.php");
  if(isset($_POST["Cancel"])){
    header("location:profile.php");
  }
  $error=["title"=>"","content"=>""];
  if(isset($_SESSION["id"])){
  
  if(isset($_POST["submit"])){
  
    $title=htmlspecialchars($_POST["title"]);
  $content=htmlspecialchars($_POST["content"]);
  $id=$_SESSION["id"];
  
  if(empty($title)){
    $error["title"]="Please enter your title";
  }
  if(empty($content)){
    $error["content"]="Please enter your content";
  }
  if(array_filter($error)){

  }
  else{
$query="insert into publication(title,content,id) values('$title', '$content',$id)";
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
  <style>
  
    form{
   
     
      
      padding:20px;
      font-weight: bold;
      
      
      
     
      background-color: transparent;

      
    }
   
   
   
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body >
 
<div class=" ctdiv ">
    <form class="col s12 white-text" method="POST">
      <div class="row">
      <div class="input-field col s6">
      <input  id="first_name2" name="title" type="text" class="validate">
      <label class="active" for="first_name2">Title</label>
    </div>
    <div class="red-text col s12"><?php echo $error["title"] ?></div>

      <div class="input-field col s12">
          <textarea id="textarea1" name="content" class="materialize-textarea white  area"></textarea>
          <label for="textarea1">Content</label>
        </div>
        <div class="red-text col s12"><?php echo $error["content"] ?></div>
        <div class="input-field col s2 ">
        <input type="submit" value="add" name="submit" class="btn waves-effect  " style="background-color: #3669E6;"/>
        </div>
        <div class="input-field col s2 ">
          <input type="submit" value="Cancel" name="Cancel" class="btn waves-effect  " style="background-color: #3669E6;"/>
          </div>
           
        
      </div>
    </form>
  </div>

        
</body>
</html>