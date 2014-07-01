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
	session_start();
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
                         <li><a href="index.php" class="nav"> home </a></li>
                         <li><a href="about.php" class="nav_selected"> about us</a></li>
                         <li><a href="location.php" class="nav">location</a></li>
                         <li><a href="contact.php" class="nav"> contact </a></li>

                    </ul>
              <p></p>
            </div>
            <div class="products">
              <div id="blog-post-295130149515895776">
                <div>
                  <h2><a href="http://www.desertmoonmusiclessons.com/1/post/2012/05/1-how-does-your-program-work.html">Our Current Teachers</a></h2>
                </div>
                
                <div>&nbsp;</div>
                <div>
                  <div>here display all teachers info, no addresses<br />
                  </div>
                </div>
                <div>&nbsp;</div>
              </div>
              <div id="blog-post-295130149515895776">
                <div>
                  <h2><a href="http://www.desertmoonmusiclessons.com/1/post/2012/05/1-how-does-your-program-work.html">1. How does the program work?</a>                </h2>
                </div>
                <div>&nbsp;</div>
                <div>
                  <div>Music students come to Desert Moon once a week for lessons. The music lesson&nbsp;consists of private instruction in a one-on-one setting with their instructor, and are generally&nbsp;followed by&nbsp;a&nbsp;music theory lab. In the private lesson, the students will be guided through&nbsp;a curriculum chosen by their instructor on&nbsp;their chosen instrument. The instructor's role is to teach the students how to play their instruments with&nbsp;good technic and musicianship, to encourage&nbsp;them as musicians by&nbsp;introducing them to&nbsp;new musical concepts and repertoire in an order that is logical and beneficial to their musical growth, and to ensure that the students understand how to&nbsp;effectively practice&nbsp;away from their lesson time. The&nbsp;music theory lab&nbsp;consists of computer programs aimed at leveling the music comprehension skills of the students&nbsp;through graded lessons and drills.&nbsp;&nbsp;<br />
                  </div>
                </div>
                <div>&nbsp;</div>
              </div>
              <div id="blog-post-138712250531898021">
                <div>
                  <h2><a href="http://www.desertmoonmusiclessons.com/1/post/2012/05/2-what-about-adults-or-advanced-students.html">2. What about adults or advanced students?</a>                </h2>
                </div>
                <div>&nbsp;</div>
                <div>
                  <div>If you are an adult who just wants a relaxing outlet or who wants to revisit an instrument you played as a child, our teachers are ready to design an individualized course to suit your particular goals. We have many adults taking&nbsp; guitar lessons, piano lessons and voice&nbsp; who have rediscovered their love for the instrument. For advanced players who are on a professional track or are bound for music study in college, our teachers will accommodate you.&nbsp;&nbsp;<br />
                  </div>
                </div>
                <div>&nbsp;</div>
              </div>
              <div id="blog-post-849840709888237817">
                <div>
                  <h2><a href="http://www.desertmoonmusiclessons.com/1/post/2012/05/3-who-are-the-teachers-at-desert-moon.html">3. Who are the teachers at Desert Moon?</a>                </h2>
                </div>
                <div>&nbsp;</div>
                <div>
                  <div>Our teachers all have extensive experience and/or degrees in music. We will pair all new students with the teacher we feel will serve them best. Students will be matched with a teacher who excels in the style in which they are interested. All teachers at Desert Moon are skilled at teaching beginners through advanced players.&nbsp;<br />
                  </div>
                </div>
                <div>&nbsp;</div>
              </div>
              <div id="blog-post-533796546775948650">
                <div>
                  <h2><a href="http://www.desertmoonmusiclessons.com/1/post/2012/05/4-at-what-age-can-my-child-start-learning.html">4. At what age can my child start learning?</a>                </h2>
                </div>
                <div>&nbsp;</div>
                <div>
                  <div>Every child is different and we have seen students of all ages succeed in most instruments. Here are some general guidelines that seem to be the ages at which most children are mentally and physically ready to play various instruments.<br />
                    <br />
                    Guitar lessons:&nbsp;6-7&nbsp;&nbsp;&nbsp;<br />
                    <br />
                    Piano lessons: 6 (3-5 possible with audition) &nbsp;&nbsp;<br />
                    <br />
                    Voice lessons: 11 (younger possible with audition)&nbsp;<br />
                    <br />
                    Drum lessons: 8 (younger possible with audition) &nbsp;<br />
                    <br />
                    Violin lessons: 5&nbsp;<br />
                  </div>
                </div>
                <div>&nbsp;</div>
              </div>
              <div id="blog-post-614447196397304608">
                <div>
                  <h2><a href="http://www.desertmoonmusiclessons.com/1/post/2012/05/5-what-about-recitals-and-other-activities.html">5. What about recitals and other activities?</a>                </h2>
                </div>
                <div>&nbsp;</div>
                <div>
                  <div>Students are given the opportunity to participate in recitals at least twice a year. Some teachers are members of the&nbsp;<a href="http://epmta.org/" title="">El Paso Music Teachers Association</a>&nbsp;and their students have the opportunity to participate in numerous music festivals and competitions throughout the year.&nbsp;&nbsp;</div>
                </div>
              </div>
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