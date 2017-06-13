 <?php
 session_start();
 if(isset($_SESSION["username"]))  
 {  
 	if($_SESSION["roles"] == "admin"){
      echo '<h3>Your role is:'.$_SESSION["roles"].'</h3>';
 	}
 	else{
 		header("location:../"); 
 	}
 }  
 else  
 {  
      header("location:../");  
 }  
 ?>