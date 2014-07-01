<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Musical instruments</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php 
///////////////////////////////////////////////////////////////////////////////
//my localhost
$con = mysql_connect("localhost", "root","");
		mysql_select_db('test');
//computer science server
	//$con = mysql_connect("earth.cs.utep.edu", "cs_lmrojo", "1234","cs_lmrojo") or die(   mysql_error());
////////////////////////////////////////////////////////////////////////////////////////
	if($con)
	{
	   echo "...";
	}
	mysql_select_db("4342team9");
	
	
	if (isset($_POST['register']))
	{
		$searchlogin = mysql_query("SELECT * FROM PERSON WHERE id = '". $_POST['id'] ."'");
		if (mysql_num_rows($searchlogin) > 0)
		{
		
			if ($_POST['p1']!="" && $_POST['p2']!="")
			{
				if ($_POST['p1']==$_POST['p2'])
				{		
				$username =$_POST['nombre'];
				$query = mysql_query("SELECT * FROM LOGIN WHERE username = '". $username ."'");
					if (mysql_num_rows($query) > 0)
						{
							?><script type="text/javascript">
							window.alert("Username already in use!")
							</script><?php
						}
					else 
						{
						  $sql="INSERT INTO LOGIN
								 (id, username,  password) 
								 VALUES
								  ('$_POST[id]','$_POST[nombre]','$_POST[p1]')
								 ";
							if( mysql_query($sql))
								{
								  ?><script type="text/javascript">
								  window.alert("1 Record added!, log in")
								  </script><?php
								 header("Location:index.php");
								}
								else
								{
							   	die(mysql_error()); 
								}
						}
					}
					else
						{
							?><script type="text/javascript">
							window.alert("Passwords do not match, try again!")
							</script><?php
						}
			}
		}
		else
		{
			
							?><script type="text/javascript">
							window.alert("ID not valid, try again!")
							</script><?php
		}
	}
	?>	



<div id="main_container">

	
  <div id="header">
    <div class="logo">
    <img src="images/logo.fw.png" alt="" title="" border="0" />
    </div>
    
    </div>
    

            
            
    <div id="main_content">
    
    	<div class="center_content">
        
            <div id="menu_tab">                                     
                    <ul class="menu">                                                                               
                         <li><a href="index.php" class="nav_selected"> home </a></li>
                         <li><a href="about.php" class="nav"> about us</a></li>
                         <li><a href="location.php" class="nav">location</a></li>
                         <li><a href="contact.php" class="nav"> contact </a></li>

                    </ul>
            </div> 
            
            
            
            <div class="welcome_block">
            	<div class="title"><h1>Welcome to the DESERT MOON Music Academy<h1></div>
                
                     <div class="prod_box"></div>                

            
            </div>
            <div class="new_products">
       		  <div class="title"></div>
                    
                    <span class="prod_box"><img src="images/p1.gif" alt="" width="60" class="prod_img" title=""/></span>
                    <div class="prod_box">
                      <div class="prod_details">
                   	    <h1>Student Registration</h1>
                        <p>
                       <form method="post" >
	
	<p>
	  <label for="name">Username:</label>
	  <br>
	  
	  <input type="text" name="nombre">
	  
	  <label for="username"><br>
	    Password:</label>
	  <br>
	  <input type="password" name="p1">
	  </p>
	<p>
	  <label for="username">Retype Password:</label>
	  <br>
	  <input type="password" name="p2"><br>
	  EnternumberID:
	  <input name="id" type="number">
	  
	  </p>
	<div id="lower">
	  
	  <p><a href="index.php">CANCEL</a>
	  <input type="submit" value="Register" name="register">
	</div>
	
	</form>
                            </p>                       
                      </div>                    
                    </div>
              <div class="clear"></div>
            </div>
            
            
            
            
        </div>
           
    </div>
    
    <div id="footer">
        <div class="left_footer"></div> <a href="adminindex.php"> Administrator or Master Login click here </a>
            
        <div class="right_footer"></div>
    </div>

</div>

</body>
</html>
