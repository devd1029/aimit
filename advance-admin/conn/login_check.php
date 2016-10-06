
<?php
//error_reporting(0);
//session_start(); 
include "config.php";

	$regnum=$_POST['regnum']; 
	$password=$_POST['password']; 
	echo $regnum;
	echo $password;
   if(isset($regnum,$password)) 
{
	
 	  $check = mysql_query("SELECT * FROM user WHERE regnum = '$regnum'");
	 
	
	  
			      while($info = mysql_fetch_array( $check )) 	
				  {
			
 		 if ($password != $info['password'] ) 
              {
			echo "Fuccker enter correct password";
 		 		}	
					

 		else{ 
			

                 echo "Fuccker you have correct password";
			
                 }
				     }
				         
}



 ?> 