<?php
require_once("connexion.php");
session_start();
if(isset($_SESSION["id"])){
  $id=$_SESSION['id'];
  $query="select *from publication where id='$id'";
  $a=$con->query($query);
  

  

?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
  <style>
   
    form{
      border-radius: 10%;
      max-width: 460px;
      margin: 20px auto;
      padding: 20px;
    }
    dd{
      max-width: 460px;
      margin: 20px auto;
      padding: 20px;
    }
    .rd{
      max-width: 1000px;
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
<!-----Navbar-->
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper  " style="background-color: #3669E6;">
        <div class="center"><a href="#!" class="brand-logo">Profile</a></div>
        <ul class="right hide-on-med-and-down">
       
        <li><a href="home.php" class=" white-text col m6"><i class="material-icons  ">home</i></a>
          
        </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-----Navbar-->
 
 <!-----Slidnav--->
<ul id="slide-out" class="sidenav  " style="background-color: #3669E6;">
  <li><div class="user-view  white-text">
    <div class="background blue accent-4 ">
      
    </div>
    <a href="#user"><i class="material-icons white-text" >account_circle</i></a>
    <a href="#name"><span class="black-text name"><?php echo $_SESSION["username"] ?></span></a>
    <a href="#email"><span class="black-text email"><?php echo $_SESSION["email"]?></span></a>
  </div></li>
  <li><a href="create.php" class="white-text" ><i class="material-icons ">add</i>Add new Pub</a></li>
  
  <li><div class="divider"></div></li>
  
  <li><a class="waves-effect white-text" href="logout.php">Se deconnecter</a></li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="background-color: #3669E6;"><i class="material-icons">arrow_back</i></a>
<!---------------------cards-->
<div class="row   rd">
  <?php 
  
   foreach($a as $t){ 
    
    ?>
    <div class="col s12 m12  ">
      <div class="card white z-depth-5">
        <div class="card-content black-text " >
          <span class="card-title" style="font-weight: bold; text-align: center;"><?php echo $t['title']?></span>
          <p><?php echo $t['content']?></p>
        </div>
        <div class="card-action">
          <a href='update.php?id=<?php echo $t["id_P"]?> ;' class="waves-effect waves-light btn" style="background-color:#3669E6 ;font-weight: bold;border-radius: 10%;" >Update</a>
          <a href='delete.php?idp=<?php echo $t["id_P"]?> ;' class="waves-effect waves-light btn" style="background-color:#3669E6 ;font-weight: bold;border-radius: 10%;">Delete</a>
        </div>
      </div>
    </div>
    <?php 
    }
  }
  else{
    header("location:login.php");
  }
    ?>
    </div>
 
<body/>
<script src="sidenav.js">
  
  
</script>
 <!--<?php include("footer.php") ?>-->
  </html>
  
  
  
