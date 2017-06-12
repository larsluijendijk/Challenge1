<?php
function userLoginAction(){
	session_start();  
	$host= "localhost";
	$database  = "challenge";
	$dbusername = "root";  
	$dbpassword = "";  
	$connect = new PDO("mysql:host=$host; dbname=$database", $dbusername, $dbpassword);  
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  	if(isset($_POST["login"]))  
  	{  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                header("Location: ../home/index");
           }  
           else  
           {  
                // bestaat de gebruiker?
                $user = getUser($_POST["username"]);
	              if($user != null) {
						    //controleer zijn wachtwoord
						        if (verifyPassword($_POST["password"], $user['password'])) 
                    {
                    			   $userrole = getRole($_POST["username"]);
                    			   if ($userrole != null){
                    			   $_SESSION["roles"] = $userrole;
							       $_SESSION["username"] = $_POST["username"];
							       header("location:../exam/index");
							   }
						        } 
					   	else
           			    {
						 header("Location: ../login");
						}
          }	
       }
    }
    if(isset($_SESSION['username'])){
 	header("location:../exam/index");   	
    }
    else
    header("Location: ../login");
 }

function getRole($username){
	$connect = openDatabaseConnection();
	$query = "SELECT roles FROM users WHERE username = '$username'";
    $statement = $connect->prepare($query);  
    $statement->execute();
    $userrole = $statement->fetchColumn();
    return $userrole;
}

function getUser($login_username) {
	$connect = openDatabaseConnection();
	$query = "SELECT * FROM users WHERE username = '$login_username'";
    $statement = $connect->prepare($query);  
    $statement->execute(  
         array(  
              'username'     =>     $_POST["username"]
              )
         );
    $user = $statement->fetch(PDO::FETCH_ASSOC);
	return $user;
}
function verifyPassword($login_password, $user_password) {
	if (password_verify($login_password, $user_password) ) {
		return true;
	}
	else{
	header("Location: login");
	return false;
	}
}

function checkIfUserIsLoggedIn(){
 if(isset($_SESSION["username"]))  
 {  
	header("location:view");   
 } 
 else
 {
 	echo("You are not logged in, please log in.");
 }
}



