<?php include_once "headers.php"; ?>
 <div class="heading">
           <h3><i class="fa fa-star"></i>Contact</h3>
           <p>This is contact us tab</p>
           <p>We are located at:</p>
          
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:375px;"><div id="gmap_canvas" style="height:300px;width:275px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}#maps{width:600px;font-size:10px;font-family:arial;text-align:right;}</style></div><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script type="text/javascript">jQuery(document).ready(function(){jQuery('.gmap').hide();jQuery("#maps span").click(function() {var $this = $(this);$this.next("div").fadeToggle();$('.gmap').not($this.next("div")).fadeOut();});});</script><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(31.759227,-106.48776829999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.759227, -106.48776829999997)});infowindow = new google.maps.InfoWindow({content:"<b>Work</b><br/>215 N. Mesa<br/>79901 Texas" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><div id="maps"></div></div>
  </div>
<?php include_once "footers.php"; ?>