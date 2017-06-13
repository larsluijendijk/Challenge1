 <?php
 session_start();
 if(isset($_SESSION["username"]))  
 {  
      echo "Hey!";
 }  
 else  
 {  
      header("location:../");  
 }  
 ?>