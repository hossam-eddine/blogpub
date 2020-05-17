<?php 
   require_once("connexion.php");
   $idp=$_GET["idt"];
   $sql="select *from publication where id_P='$idp'";
   $q=$con->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<?php include("header.php")?>
    
<div class="row    rd">
  <?php 
  
   foreach($q as $t){ 
    
    ?>
    <div class="col s12 m12  ">
      <div class="card transparent z-depth-5">
        <div class="card-content black-text " >
      

          <span class="card-title" style="font-weight: bold; text-align: center;"><?php echo $t['title']?></span>
          
          <p ><?php echo $t['content']?></p>
        </div>
        <div class="card-action">
        
          
         
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