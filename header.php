<?php  
 session_start();
if(isset($_SESSION["id"])){
  echo "<head>
      <style>
        form{
          border-radius: 10%;
          max-width: 460px;
          margin: 20px auto;
          padding: 20px;
        }
        .pp{
          white-space: nowrap;  
         
          text-overflow: ellipsis;
          overflow: hidden;
        }
        .rd{
         max-width: 900px;
          background-color: cornsilk;

        }
        .bh{
          background-color: #89d4cf;
background-image: linear-gradient(315deg, #89d4cf 0%, #6e45e1 74%);
        }
      </style>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
         <!-- Compiled and minified CSS -->
         <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    
    <!-- Compiled and minified JavaScript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    
        
    

  <nav>
    <div class='nav-wrapper deep-purple darken-4'>
      <a href='#' class='brand-logo'>HCP</a>
      <ul id='nav-mobile' class='right hide-on-med-and-down'>
        <li><a href='home.php'>Acceuil</a></li>
        <li><a href='profile.php' class='white-text'>".$_SESSION['username']."</a></li>
        <li><a href='logout.php'>Se deconnecter</a></li>
      </ul>
    </div>
  </nav></head>
  <body class='bh'>";
}
else{
echo "<head>
  
  <style>
    form{
      border-radius: 10%;
      max-width: 460px;
      margin: 20px auto;
      padding: 20px;
    }
    .pp{
      white-space: nowrap;  
     
      text-overflow: ellipsis;
      overflow: hidden;
    }
    .rd{
     max-width: 900px;
      background-color: cornsilk;

    }
    .bh{
      background-color: #89d4cf;
background-image: linear-gradient(315deg, #89d4cf 0%, #6e45e1 74%);
    }
  </style>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
     <!-- Compiled and minified CSS -->
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>

<!-- Compiled and minified JavaScript -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>

<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

    
  <nav>
  <div class='nav-wrapper deep-purple darken-4'>
    <a href='#' class='brand-logo'>HCP</a>
    <ul id='nav-mobile' class='right hide-on-med-and-down'>
      <li><a href='home.php'>Acceuil</a></li>
      <li><a href='inscription.php'>inscription</a></li>
      <li><a href='login.php'>Se connecter</a></li>
    </ul>
  </div>
</nav></head>
<body class='grey lighten-4'>";

}
?>
  




