<?php require_once("connexion.php") ?>

<?php
 $sql="insert into utilsateur (email,username,pass) values(:email,:username,:password)";
$error=array("username"=>"","email"=>"","password"=>"");
$message="field required";

if(isset($_POST["submit"])){
    $username=htmlspecialchars( $_POST["username"]);
    $email=htmlspecialchars($_POST["email"]);
    $password=htmlspecialchars($_POST["password"]);
    if(empty($username)){
       
        $error["username"]= "Please enter username";
    }
   
    if(empty($email)){
        
        $error["email"]="Please enter your email";
    }
    else{
        
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error["email"]= "Please enter valide email";
        }
        
    }

    if(empty($password)){
        $error["password"]="Please enter your Password";
    }
    if(array_filter($error)){

    }
    else{
        //insertion
       
   try{
       ///preparer requete
       $dbprep=$con->prepare($sql);
       //execution
       $dbexecut=$dbprep->execute(array("email"=>$email,"username"=>$username,"password"=>$password,));
       if($dbexecut){
        header('Location:login.php');
       }
       else{
        echo "error";
       }

   }
   catch(PDOException $e){
       echo  $e->getMessage();
   }
      
    }
   
   
   
   
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    form{
    border-top-left-radius:20%;
    border-top-right-radius:20%;
      max-width: 460px;
      max-height: 400px;
      margin: 150px auto;
      padding: 20px;
     
      background-color: #9dc5c3;
background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
      
    }
    .ins{
        margin-top: 100px;  max-width: 460px;
        border-top-left-radius:50%;
    border-top-right-radius:50%;
    background-color: #2f4353;
background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);

    }
    i{
        color:white;

    }
    .bt{
        width: 300px;
        margin-left: 50px;
        border-radius: 50%; 
        background-color: #9dc5c3;
background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        
       

    }
    
  </style>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('nt.jpg');">

<section class="container  ins" style="margin-top: 20px;  max-width: 460px;">
    <h4 class="center"><i  class="material-icons prefix  ">account_box</i></h4>
    <form class="white" action="inscription.php" method="POST">
         <!-------------------------------------------------->
        <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input id="icon_prefix" type="text" placeholder="Email"  name="email" class="validate">
            <label for="icon_prefix">Email</label>
          </div>
        <div class="blue-text"><?php echo $error["email"]?></div>
      
        <!-------------------------------------------------->
    
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text"  name="username" class="validate">
              <label for="icon_prefix">UserName</label>
            </div>
            <div class="blue-text"><?php echo $error["username"]?></div>
         <!-------------------------------------------------->
            <div class="input-field col s6">
                <i class="material-icons prefix">lock</i>
                <input id="icon_prefix" type="password" placeholder="Password" name="password" class="validate">
                <label for="icon_prefix">Password</label>
              </div>
        <div class="blue-text"><?php echo $error["password"]?></div>
         <!-------------------------------------------------->
       
         <div class="center">
            <input type="submit" value="inscription" name="submit" style="font-size: 20px;" class="btn waves-effect white" /><br>
            <a href="login.php" class="white-text" style="font-size: 20px;font-weight: bold;">Se connecter</a>
        </div>
</section>    
</body>
</html>