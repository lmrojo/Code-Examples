<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Musical instruments</title>
<link rel="stylesheet" type="text/css" href="style.css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
   $(document).ready(function() {
    $("#datepicker1").datepicker();
  });
   $(document).ready(function() {
    $("#datepicker2").datepicker();
  });
  </script>
</head>
<body>
<?php
session_start();
$admin = "";
if($_SESSION['nombre'] =="")
      header("location:index.php");

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
                <p>Welcome: <?php echo $_SESSION['nombre'];?></p>
                                  
                       </div>                    
                    </div>                

            
            </div>
            
            
            <div class="products">This is the administrators homei
            </div>
            
            
            <div class="new_products">
            		<div class="title"></div>
                    
                    <span class="prod_box"><img src="images/admin.png" alt="" width="60" class="prod_img" title=""/></span>
                    <div class="prod_box">
                      <div class="prod_details">
                   	    <h1>My Access</h1>
                        <form method="post"><input type="submit" value="Student payments" name="register"></form><br>
                          <form method="post"><input type="submit" value="Add student" name="addstudent"></form><br>
                            <form method="post"><input type="submit" value="Add Lesson" name="addlesson"></form><br>   
                             <form method="post"><input type="submit" value="Update Student Status" name="update"></form><br>
                          <form method="post"><input type="submit" value="Instruments I teach" name="register"></form><br>
                            <form method="post"><input type="submit" value="My students contact information" name="register"></form><br>  
                            <form method="post"><input type="submit" value="View students" name="liststudents"></form>                  
                      </div>                    
                    </div>
                    
                    
                    
                    <div class="prod_box">
                    
                    	<img src="images/p3.gif" alt="" width="42" height="126" class="prod_img" title=""/>
                        <div class="prod_details">
                       	  <h1>My forms</h1>
                            <p>
            <?php 
	 if (isset($_POST['addstudent']))
	{
		?><form method="post">
	<p>First name:<input type="text" name="fname"></p>
	<p>Last name:<input type="text" name="lname"></p>
	<p>Start date: <input id="datepicker" name="sdate" /></p>
    <p>End date: <input id="datepicker1" name="edate" /></p>
    <p>Dateofbirth: <input id="datepicker2" name="dob" /></p>
    <p>Status:  <select name="status">
		          <option value="Active">Active</option>
		          <option value="Suspended">Suspended</option>
		        </select></p>
	<p><input align="right" type="submit" name="submit"/></p>
</form>
<?php 
}
   if (isset($_POST['addlesson']))
	{
		?><form method="post">
	<p>Id: <input type="number" name="id"></p>
    <p>Instrument:  <select name="instrument">
		          <option value="Guitar">Guitar</option>
		          <option value="Piano">Piano</option>
                  <option value="Drums">Drums</option>
		          <option value="Violin">Violin</option>
                   <option value="Saxophone">Saxophone</option>
		        </select></p>
	<p><input align="right" type="submit" name="submitlesson"/></p>
</form>
<?php }
 if (isset($_POST['update']))
	{
		?><form method="post">
	<p>Id: <input type="number" name="id"></p>
    <p> Status:  <select name="status">
		          <option value="Active">Active</option>
		          <option value="Suspended">Suspended</option>
                  </select>
	<p><input align="right" type="submit" name="submitupdate"/>
</form>
<?php

	} 
if (isset($_POST['submitupdate']))
	{
		$sql = mysql_query("UPDATE PERSON SET status = '".$_POST['status']."'  WHERE id = '". $_POST['id'] ."'");
		
		
	}
if (isset($_POST['liststudents']))
	{
		$sql = mysql_query("SELECT * FROM PERSON");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br>-<strong>".$row['id']."</strong> ".$row['firstname']." ".$row['lastname']." ".$row['startdate']." ".$row['status']." ";
							}
							}
	} 
?>
	
                                                
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
<?php

 if (isset($_POST['submit']))
	   {
		
		     mysql_query("INSERT INTO PERSON
				  			(id, firstname, lastname, startdate, enddate, dob, status)
							VALUES('','$_POST[fname]','$_POST[lname]','$_POST[sdate]','$_POST[edate]','$_POST[dob]','$_POST[status]')")or die(mysql_error());
							
							  $sql =   mysql_query("SELECT id FROM PERSON ORDER BY id DESC LIMIT 1");
	  $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br>".$row['id'];
							}
							}
	   }
	   
	    if (isset($_POST['submitlesson']))
	   {
		   
	
		$searchlogin = mysql_query("SELECT * FROM PERSON WHERE id = '". $_POST['id'] ."'")or die(mysql_error());
		if (mysql_num_rows($searchlogin) > 0)
		{
		
				
							
							 $sql=mysql_query("INSERT INTO INSTRUMENTS
				  			(id, instrument)
							VALUES('$_POST[id]','$_POST[instrument]')");
							if( $sql)
								{
								  ?><script type="text/javascript">
								  window.alert("1 Record added")
								  </script><?php
								 
								}	
						
						}
					else 
						{
						 	?><script type="text/javascript">
							window.alert("Id not found!")
							</script><?php
						}
				
		   
	   }
?>
</body>
</html>
