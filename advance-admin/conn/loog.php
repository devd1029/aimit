<?php
error_reporting(0);
//session_start(); 
include "config.php";

 $email =$_POST['email'];
 $password =$_POST['password'];
   if(isset($email,$password)) 
{
	
 	  $check = mysql_query("SELECT * FROM user WHERE email = '$email'");
	 
	  /*  if(!$check)
	  {echo"AXW";
		header("Refresh:0;url=http://localhost/edu/admin/index.php");
	  }  */
	  
			      while($info = mysql_fetch_array( $check )) 	
				  {
			
 		 if ($password != $info['password'] ) 
              {
	header("Refresh:0;url=http://localhost/rest/error.php");
 		 		}	
					

 		else{ 
		session_start();
			$_SESSION['login']='true';
			$_SESSION['email']=$email;		

           header("Refresh:0;url=http://localhost/rest/rest3.php"); 
			
                 }
				     }
				         
}



 ?> 