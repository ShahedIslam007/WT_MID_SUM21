<?php
     $name="";
	 $err_name="";
	 $uname="";
	 $err_uname="";
	 $pass="";
     $err_pass="";
     $email="";
     $err_email="";

     $day="";
     $month="";
     $year="";

     $hasError=false;

     $Days= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
     $Months= array("January","February","March","April","May","June","July","Agust","September","Octobor","November","December");
     $Years= array("1997","1998","1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010");

     if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
     	if(empty($_POST["name"]))
     	{
			$err_name="Name Required";
			$hasError = true;
		}

		else
		{
			$name=$_POST["name"];
		}

		if(empty($_POST["uname"]))
     	{
			$err_uname="Username Required";
			$hasError = true;
		}

		else
		{
			$name=$_POST["uname"];
		}

		if(empty($_POST["pass"]))
     	{
			$err_uname="Password Required";
			$hasError = true;
		}

		else
		{
			$name=$_POST["pass"];
		}
     }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Validation</title>
</head>
<body>
      <h1>Club Member Registration</h1>

      <form action="" method="Post">
      	    <table>
      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Name:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_name;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Username:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_uname;?>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Password:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" name="">
      	    	   	   </td>

      	    	   	   
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Confirm Password:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" name="">
      	    	   	   </td>

      	    	   <tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Email:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="">
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Phone:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="" placeholder="code"> -
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="" placeholder="Number">
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Address:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="" placeholder="Select Address">
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	    
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="" placeholder="City"> -
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="" placeholder="State">
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	    
      	    	   	   </td>
      	    	   	   
      	    	   	   <td>
      	    	   	   	   <input type="text" name="" placeholder="Postal/Zip Code">
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Birth Date:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <select>
      	    	   	   	   	       <option selected="Day" disabled="Day">Day</option>

      	    	   	   	   	       <?php
                                        foreach ($Days as $dy) 
                                        {
                                        	if ($day==$dy) 
                                        	{
                                        		echo "<option selected>$dy</option>";
                                        	}
                                        	else
											   echo "<option>$dy</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   </select>

      	    	   	   	   <select>
      	    	   	   	   	       <option selected="Month" disabled="Month">Month</option>

      	    	   	   	   	       <?php
                                        foreach ($Months as $my) 
                                        {
                                        	if ($Months==$my) 
                                        	{
                                        		echo "<option selected>$my</option>";
                                        	}
                                        	else
											   echo "<option>$my</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   </select>

      	    	   	   	   <select>
      	    	   	   	   	       <option selected="Year" disabled="Year">Year</option>

      	    	   	   	   	       <?php
                                        foreach ($Years as $yy) 
                                        {
                                        	if ($Years==$yy) 
                                        	{
                                        		echo "<option selected>$yy</option>";
                                        	}
                                        	else
											   echo "<option>$yy</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   </select>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Gender:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="radio" name="Gender"> Male <input type="radio" name="Gender"> Female
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="checkbox" name=""> A Friend or College
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Where did you hear<br> about us?
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="checkbox" name=""> Google
      	    	   	   	   <input type="checkbox" name=""> Blog Post
      	    	   	   	   <input type="checkbox" name=""> News Article
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   Bio:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <textarea cols="33" rows="5"></textarea>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr align="right">
                       <td>
                       	   <input type="submit" value="register">
                       </td>
      	    	   	    
      	    	   </tr>
      	    	 
      	    </table>
      </form>
</body>
</html>