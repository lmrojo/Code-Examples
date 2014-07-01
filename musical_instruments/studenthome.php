<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Musical instruments</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
session_start();
if($_SESSION['nombre'] =="")
      header("location:index.php");
$student =$_SESSION['nombre'];

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
                <p><img src="http://www.desertmoonmusiclessons.com/uploads/1/2/4/2/12428127/1338485265.jpg" alt="Picture" width="338" height="201" /></p>
                                  
                       </div>                    
                    </div>                

            
            </div>
            
            
            <div class="products">
              <p>Welcome: <?php echo "<strong>".$student."</strong>";?></p>
            </div>dfdfdfdfqeuirrrrrrrr
            <?php 
			
			
			?>
            
            
            <div class="new_products">
            		<div class="title"></div>
                    
                    <span class="prod_box"><img src="images/p1.gif" alt="" width="60" class="prod_img" title=""/></span>
                    <div class="prod_box">
                      <div class="prod_details">
                   	    <h1>My Classes</h1>
                        <p>
                      <?php
                     
					  $sql = mysql_query("SELECT * FROM LOGIN WHERE username = '". $_SESSION['nombre'] ."'");
					  $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								$id = $row['id'];
							}
							}
					  echo $sql['id'];
					  $sql = mysql_query("SELECT instrument FROM INSTRUMENTS WHERE id = '". $id."'");
					  $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br>".$row['instrument']."";
							}
							}
					  ?>
                            </p>                       
                      </div>                    
                    </div>
                    
                    
                    
                    <div class="prod_box">
                    	<img src="images/p3.gif" alt="" width="42" height="126" class="prod_img" title=""/>
                      <div class="prod_details">
                   	    <h1>My Information</h1>
                          <form method="post"><input type="submit" value="My Schedule" name="schedule"></form><br>
                                <?php 
	 if (isset($_POST['payment']))
	{
		
		
	}?>
                          
                          </p>                       
                      </div>                    
              </div>               
             
       		  <div class="clear"></div>
            </div>
            
            
            
            
        </div>
           
    </div>
    
    <div id="footer">
        <div class="left_footer"></div> <a href="adminindex.php"> Administrator or Master Login click here </a>
            <div ><form action="logout.php"><input value="Log out" type="submit" name="logout"></form>
        <div class="right_footer"></div>
    </div>

</div>

</body>
</html>
