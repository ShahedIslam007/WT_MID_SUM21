<?php 

	 $email="";
     $err_email="";
	 $pass="";
     $err_pass="";
	 
	 $hasError=false;
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
	   if(empty($_POST["email"]))      //Email validation
     	{
			$err_email="Email Required";
			$hasError = true;
		}

		elseif(strpos($_POST["email"],'@') && strpos($_POST["email"],'.'))
		{
			$email=$_POST["email"];
		}

		elseif(!strpos($_POST["email"],'@') && !strpos($_POST["email"],'.'))
		{
             $err_email="First use @ and then .(dot)";
			 $hasError = true;
		}

		elseif(!strpos($_POST["email"],'@'))
		{
			if(strpos($_POST["email"],'.'))
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}

			else
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}
		}

		elseif (strpos($_POST["email"],'@') ) 
		{
			if (strpos($_POST["email"],'.')) 
			{
			    $email=$_POST["email"];
			}

			elseif (!strpos($_POST["email"],'.') || strpos($_POST["email"],'@'))
			{
				$err_email="First use @ and then .(dot)";
			    $hasError = true;
			}
			
		}
		
		if(empty($_POST["password"]))   //Password Validation
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])<8 || !is_numeric($_POST["password"]) || !ctype_upper($_POST["password"]) || !ctype_lower($_POST["password"]) )  
	    {
			$err_pass="Password Has to be More than 8 Character, 1 Numeric Value, 1 Upper & Lower Case";
			$hasError = true;
		}

		else
		{
			$pass=$_POST["password"];
		}
	 }
?>
<html>				
<head>
	
	<title>Form Validation</title>
</head>
<body>
      <h3>Admin</h3>

      <form method="Post">
      	    <table>
      	    	   <tr>
				       <td>
      	    	   	   	   Email:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="email" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_email;?>
      	    	   	   </td>
      	    	   </tr>
				   
				   <tr>
      	    	   	   <td>
      	    	   	   	   Password:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" name="password" value="<?php echo $pass;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_pass;?>
      	    	   	   </td>
      	    	   </tr>
				   
				   
                            <tr>
						     <td align="center" colspan="2"><input type="submit" value="Login"></td>
					        </tr>
      	    	   </tr>
      	    	 
      	    </table>
      </form>
</body>
</html>