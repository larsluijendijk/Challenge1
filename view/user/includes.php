 <?php
 session_start();
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Welcome - '.$_SESSION["username"].'</h3>';
      echo '<h3>Your role is:'.$_SESSION["roles"].'</h3>';
 }  
 else  
 {  
      header("location:../");  
 }  
 ?>