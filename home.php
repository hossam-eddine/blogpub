<?php 
   require_once("connexion.php");
   $sql="select *from publication p,utilsateur u where p.id=u.id";
   $q=$con->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<?php include("header.php")?>
    
<div class="row    rd">
  <?php 
  
   foreach($q as $t){ 
    
    ?>
    <div class="col s12 m6  ">
      <div class="card transparent z-depth-5">
        <div class="card-content black-text " >
        <a href='> ;' class="waves-effect waves-light btn" style="background-color:#3669E6 ;font-weight: bold;border-radius: 10%;" ><?php echo $t['username']?></a>

          <span class="card-title" style="font-weight: bold; text-align: center;"><?php echo $t['title']?></span>
          
          <p class="pp"><?php echo $t['content']?></p>
        </div>
        <div class="card-action">
          <a href='details.php?idt=<?php echo $t["id_P"]?> ;' class="waves-effect waves-light btn" style="background-color:#3669E6 ;font-weight: bold;border-radius: 10%;" >More</a>
          
         
        </div>
      </div>
    </div>
    <?php 
    }
    
  
    ?>
    </div>

<?php include("footer.php");
?>
</html>