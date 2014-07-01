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
if($_SESSION['nombre'] =="")
      header("location:index.php");

///////////////////////////////////////////////////////////////////////////////
//my localhost
$con = mysql_connect("localhost", "root","");
		mysql_select_db('test');
//computer science server
	//$con = mysql_connect("earth.cs.utep.edu", "cs_lmrojo", "1234","4342team9") or die(   mysql_error());
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
                <p>Welcome: <?php echo "<strong>".$_SESSION['nombre']."</strong>";?></p>
                                  
                       </div>                    
                    </div>                

            
            </div>
            
            
            <div class="products">This is the master administrator, where has full access
            </div>
            
            
            <div class="new_products">
            		<div class="title"></div>
                    
                    <span class="prod_box"><img src="images/admin.png" alt="" width="60" class="prod_img" title=""/></span>
                    <div class="prod_box">
                      <div class="prod_details">
                   	    <h1>My Access</h1>
                        <form method="post"><input type="submit" value="All Records" name="view"></form><br>
                          <form method="post"><input type="submit" value="Add New Lesson" name="addlesson"></form><br>
                            <form method="post"><input type="submit" value="Track attendance" name="register"></form><br>   
                             <form method="post"><input type="submit" value="Assign student to a teacher" name="assign"></form><br>
                          <form method="post"><input type="submit" value="View Teachers" name="viewteachers"></form><br>
                            <form method="post"><input type="submit" value="Add new Teacher" name="addteacher"></form><br>  
                            <form method="post"><input type="submit" value="View invoices" name="register"> </form><br> <form method="post">Suspend/Activate: 
               <select name="type">
		          <option value="Student">Student</option>
		          <option value="Teacher">Teacher</option>
		        </select>
                <input type="submit" value="Go" name="suspend"> </form><br>                    
                      </div>                    
                    </div>  
                    <div class="prod_box">
                      <div class="prod_details">
                   	    <h1>My Queries</h1>
                            <p>
      <?php
	   if (isset($_POST['assign']))
	{
		?>
		<table width="350" border="1">
<tr>
<th>Students(id,first,last)</th>
<th>Teachers</th>
<th>Lessons</th>
</tr>
<tr>
<td><?php $sql= mysql_query("SELECT * FROM PERSON WHERE status='active' AND
                                                id NOT IN (SELECT id FROM TEACHER)");
		$numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "-<strong>".$row['id']."</strong> ".$row['firstname']." ".$row['lastname']."<br>";
							}
							}
		?></td>
<td><?php $sql= mysql_query("SELECT * FROM PERSON WHERE status='active' AND
                                                id IN (SELECT id FROM TEACHER)");
		$numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "-<strong>".$row['id']."</strong> ".$row['firstname']." ".$row['lastname']."<br>";
							}
							}
		?></td>
<td><?php $sql= mysql_query("SELECT * FROM LESSON");
		$numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "-<strong>".$row['lessonid']."</strong> ".$row['instrument']."<br>";
							}
							}
		?></td>
</tr>

</table>
		<br>Select the desired ids to assign:<br>
        <form method="post">
	Student Id:<input type="number" name="id"><br>
    Teacher Id:<input type="number" name="teacher"><br>
    Lesson Id:<input type="number" name="lesson"><br>
	<p><input align="right" type="submit" name="assignteacher"/>
</form>
		<?php
	}
	   if (isset($_POST['assignteacher']))
	{
	//	  mysql_query("INSERT INTO STUDENT_TEACHER_LESSON
	//(studentid, teacherid, lessonid)VALUES('$_POST[id]','$_POST[teacher]','$_POST[lesson]')")					or die(mysql_error());
	 mysql_query("INSERT INTO STUDENT_TEACHER_LESSON
	(id, id, lessonid) VALUES('8000','80009','3003')")					or die(mysql_error());
										
	}
	    
	  
	  if (isset($_POST['suspend']))
	{
		if($_POST['type']=="Student")
		{
			 
		$sql = mysql_query("SELECT * FROM PERSON");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br> -<strong>".$row['id']."</strong> ".$row['firstname']." ".$row['lastname']." ".$row['startdate']." ".$row['status']." ";
							}
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
	
		}
		else
		{
			$sql = mysql_query("SELECT * FROM PERSON WHERE id IN
												(SELECT id FROM TEACHER)				
		");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   								while($row = mysql_fetch_array($sql))
									{
									echo "<br> -<strong>".$row['id']."</strong> ".$row['firstname']." ".$row[	'lastname']." ".$row['startdate']." ".$row['status']." ";
									}
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
							else
								{ echo"no records found!";
								}
			
		}
	}	
	if(isset($_POST['submitupdate']))
	{
		$sql = mysql_query("UPDATE PERSON SET status = '".$_POST['status']."'  WHERE id = '". $_POST['id'] ."'");
		
		
	}
	  
	     if (isset($_POST['viewteachers']))
	{
		$sql = mysql_query("SELECT * FROM PERSON WHERE id IN
												(SELECT id FROM TEACHER)				
		");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   								while($row = mysql_fetch_array($sql))
									{
									echo "<br> -<strong>".$row['id']."</strong> ".$row['firstname']." ".$row[	'lastname']." ".$row['startdate']." ".$row['status']." ";
									}
									echo "<br><br>View personal information<br>
									  about a teacher, enter Id here:";
									?><form method="post">
                                    <input type="number"  name="id"><br><input type="submit" value="View Information" name="viewteacherinfo"><br>
                                    </form>
                                   <?php
							}
							else
								{ echo"no records found!";
								}
	}
	    
      if (isset($_POST['viewteacherinfo']))
	{
		$sql = mysql_query("SELECT * FROM PERSON WHERE id= '". $_POST['id'] ."'");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br><strong>Name</strong>: ".$row['firstname']." ".$row['lastname'];
							}
							}
		$sql = mysql_query("SELECT * FROM TEACHER WHERE id= '". $_POST['id'] ."'");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br><strong> Id</strong>: ".$row['id']."<br><strong>SSN</strong>: ".$row['ssn']."<br><strong>Address</strong>: ".$row['address'];
							}
							}
	}
	  
      if (isset($_POST['view']))
	{
		$sql = mysql_query("SELECT * FROM PERSON");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br> -<strong>".$row['id']."</strong> ".$row['firstname']." ".$row['lastname']." ".$row['startdate']." ".$row['status']." ";
							}
							}
	}
	  if (isset($_POST['addlesson']))
	{
			?><form method="post">
	<p>Days: <select name="days">
		          <option value="MW">MW</option>
		          <option value="TR">TR</option>
                  <option value="RS">RS</option>
		          <option value="WS">WS</option>
                  <option value="WF">WF</option>   
		        </select></p>
    
    <p>Instrument:  <select name="instrument">
		          <option value="Guitar">Guitar</option>
		          <option value="Piano">Piano</option>
                  <option value="Drums">Drums</option>
		          <option value="Violin">Violin</option>
                   <option value="Saxophone">Saxophone</option>
		        </select></p>
                <p>Start Time: <input type="text" name="start"></p>
    <p>End Time: <input type="text" name="end"></p>
     <p>Room:  <select name="room">
		          <option value=1>1</option>
		          <option value=2>2</option>
                  <option value=3>3</option>
		          <option value=4>4</option>
                   <option value=5>5</option>
		        </select></p>
	<p><input align="right" type="submit" name="submitlesson"/></p>
</form>
<?php }

  if (isset($_POST['addteacher']))
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
	<p><input align="right" type="submit" name="submitteacher"/></p>
</form>
<?php }

if (isset($_POST['submitteacher']))
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
								echo "<br>Teacher used id: ".$row['id'];
								$id = $row['id'];
							}
							if($id>7999)
							{
								?>
                                <form method="post">
                                <p>Id:<input type="text" name="id" value="<?php echo $id?>"></p>
								<p>SSN:<input type="text" maxlength="9" name="ssn"></p>
                                <p>Address:<input type="text"  name="address"></p>
                                <p><input align="right" type="submit" name="addteachertable"/></p>
                                </form>
								<?php	
								
							}
							}
	   }

if (isset($_POST['addteachertable']))
	   {
		
		     mysql_query("INSERT INTO TEACHER
				  			(id, ssn, address)
							VALUES('$_POST[id]','$_POST[ssn]','$_POST[address]')")or die(mysql_error());
	   }

if (isset($_POST['submitlesson']))
	   {
		
		     mysql_query("INSERT INTO LESSON
				  			(lessonid, instrument, days, start, end, roomnumber)				VALUES('','$_POST[instrument]','$_POST[days]','$_POST[start]','$_POST[end]','$_POST[room]')")or die(mysql_error());
	
	   }


	  ?>
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
