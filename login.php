
<?php 
require_once("connexion.php");
 session_start();

 $error=array("username"=>"","password"=>"");
$message="3amar asimhamed";

if(isset($_POST["submit"])){
    $username=htmlspecialchars($_POST["username"]);
    $password=htmlspecialchars($_POST["password"]);
 
   
 
    if(empty($username)){
       
        $error["username"]= "Please enter your username";
    }
   
    

    if(empty($password)){
        $error["password"]="Please enter your password";
    }
    if(array_filter($error)){

    }
    else{
        $query="select *from utilsateur where username='$username' and pass= '$password'";
        //$dpre=$con->prepare($query);
        $a=$con->query($query);
        
        
        $nbre=$a->rowCount();
        if($nbre>0){
          
           foreach($a as $ro){
            $_SESSION["id"]=$ro["id"];
            $_SESSION["email"]=$ro["email"];
           }
            
            $_SESSION["username"]=$username;
            header("location:profile.php");
        }
        else{
            $error["username"]="invalid username";
            $error["password"]="invalid password";

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
      margin: 150px auto;
      padding: 20px;
     
background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
      
    }
    .sectioncontainer{
        border-top-left-radius:50%;
    border-top-right-radius:50%;
    
    background-image: linear-gradient(#F53803,yellow);

    }
    i{
        color:#ffc400;

    }
    .btn{
        width: 300px;
        margin-left: 50px;
        border-radius: 50%; 
        background-color: #fff000;
background-image: linear-gradient(315deg, #fff000 0%, #ed008c 74%);
        
       

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
<body style="background-image: url('lg.jpeg');">
    
<section class="container white-text sectioncontainer" style="margin-top: 100px;  max-width: 460px;">
    <h4 class="center lo " ><i class="material-icons prefix">account_circle</i></h4>
    <form  class="orange accent-1" method="POST">
             <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text"  name="username" class="validate ">
              <label for="icon_prefix">UserName</label>
            </div>
            <div class="red-text"><?php echo $error["username"]?></div>
            <div class="input-field col s6">
                <i class="material-icons prefix">lock</i>
                <input id="icon_prefix" type="password" placeholder="Password" name="password" class="validate">
                <label for="icon_prefix">Password</label>
              </div>
        <div class="red-text"><?php echo $error["password"]?></div>
         <!-------------------------------------------------->
       
         <div class="center  ">
            <input  type="submit" value="login" name="submit" class="btn waves-effect orange accent-1 white-text btn"        /><br>
            <a href="inscription.php" style=" margin-left: 40px;;font-size: 20px;font-weight: bold;">s'inscriver</a>
        </div>
</section>    

</body>
</html>