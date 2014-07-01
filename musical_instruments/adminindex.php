<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Musical instruments</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?PHP
///////////////////////////////////////////////////////////////////////////////
//my localhost
$con = mysql_connect("localhost", "root","");
		mysql_select_db('test');
//computer science server
	//$con = mysql_connect("earth.cs.utep.edu", "cs_lmrojo", "1234","cs_lmrojo") or die(   mysql_error());
////////////////////////////////////////////////////////////////////////////////////////

	  
if (isset($_POST['adminsubmit']))
	{
		
	
	 if($_POST['nombre']=="lmrojo" && $_POST['password']=="123")
		{	
		
		session_start();

	    $_SESSION['nombre'] =$_POST['nombre'] ;

			header("Location:administratorhome.php");
		}
		else
		{
			
					   ?><script type="text/javascript">
			window.alert("Username or password does not match our records!")
		</script><?php	
			
	    }
	
	}
	if (isset($_POST['mastersubmit']))
	{
	 if($_POST['nombre']=="master" && $_POST['password']=="123")
		{
			session_start();

	    $_SESSION['nombre'] =$_POST['nombre'] ;

			header("Location:masterhome.php");
		}
		else
		{
			
					   ?><script type="text/javascript">
			window.alert("Username or password does not match our records!")
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
                
                     <div class="prod_box">
                       <div class="welcome_details">
                <p><img src="http://www.desertmoonmusiclessons.com/uploads/1/2/4/2/12428127/1338486443.jpg" alt="Picture" width="277" /></p>
                                  
                        </div>                    
                    </div>                

            
            </div>
            
            
            <div class="products">
              <p>We   are a school of music on El Paso&rsquo;s west side. We offer flute lessons,   guitar lessons, piano lessons, voice lessons, violin lessons, drum   lessons and more. For more information, feel free to look around our   site.</p>
            </div>
            
            
            <div class="new_products">
            		<div class="title"></div>
            		<div class="prod_box">
                      <div class="prod_details">
                   	    <h1>Administrator  Login</h1>
                        <p>
                        <form method="post">
		
		<label for="name">Username:</label><br>
		
		<input type="name" name="nombre"><br>
		
		<label for="username">Password:</label><br>
		
		
		
		<input type="password" name="password"><br>
        
		<input type="submit" value="Login" name="adminsubmit" >
		<div id="lower">
		
		
		
		
		<label><br>
		Username: lmrojo</label>
		<p ><label>Password: 123</label>
		</div>
		
		</form>
                            </p>                       
                      </div>                    
                    </div>
                    
                    
                    
                    <div class="prod_box"> 
                      <div class="prod_details">
                   	    <h1>Master Login</h1>
                            <p>
         <form method="post">
		
		<label for="name">Username:</label><br>
		
		<input type="name" name="nombre"><br>
		
		<label for="username">Password:</label><br>
		
		
		
		<input type="password" name="password"><br>
		<input type="submit" value="Login" name="mastersubmit" >
		<div id="lower">
		
	
		
		</form>
                            </p>                       
                        </div>                    
                    </div>
                    <div class="clear"></div>
            </div>
            
            
            
            
        </div>
           
    </div>
    
    <div id="footer">
        <div class="left_footer"></div>
        <div class="right_footer"></div>
    </div>

</div>
</body>
</html>
