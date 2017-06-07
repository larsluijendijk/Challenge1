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
                echo "all fields required";
           }  
           else  
           {  
                // bestaat de gebruiker?
                $user = getUser($_POST["username"]);
	              if($user != null) {
						    //controleer zijn wachtwoord
						        if (verifyPassword($_POST["password"], $user['password'])) 
                    {
							       $_SESSION["username"] = $_POST["username"];
							       header("location:includes");
						        } 
					   	else
            {
						  echo"Verify failed! Please, insert the correct data.";
						}
          }	
       }
    }
 }


function getUser($login_username) {
	// haal de gebruiker op uit de database
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
	return false;
	}
}