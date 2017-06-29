<html>
<?php include('link.php');?>
	<style type="text/css">
	h4{
color:white !important;

	}
	
</style>
<body>
<?php include('header.php');?>
 
	<div class="header" style="font-size: 12px;">
	   <div class="container" >
		  <div class="header-text">
			<h1>MUSCLE FACTORY</h1>
			<h2>Best Choice For fitness</h2>
			<p>
        Exercise is extremely important to staying healthy both in body and mind.
         Being active can help a person continue to do things they enjoy and be independent as they age
       </p>
			<div class="banner_btn">
				<a href="#">Read More</a>
			</div>
		  </div>
    </div>
    </div>

    <div class="menu" id="menu">
	  <div class="container" >

		 <!-- <div class="logo">
			<a href="index.html">
         <img src="<?php echo base_url();?>assets/images/logo/logo.png" alt"" class="img-responsive" width="100"/></a>
		 </div> -->
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <!-- <a class="toggleMenu" href="#">Menu</a> -->
			 <ul class="nav">
			   <li class="active"><a href="#">Home</a></li>
			   
			   <!-- <li><a href="<?php echo base_url();?>controlWelcome/goToLogin">Trainer</a></li> -->
			   <li><a href="classes.html">Classes</a>

			   </li>
			   <li><a href="blog.html">Blog</a></li>
			   <li><a href="pricing.html">Pricing</a></li>
			   <li><a href="contact.html">Contact</a></li>
			   <li><a href="<?php echo base_url();?>controlWelcome/goToLogin" class="btn btn-success">login</a></li>
			 </ul>
			<!--   <script type="text/javascript" src="<?php echo base_url();?>assets/js/nav.js"></script> -->
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	 <div class="main">
	 	 <div class="container-fluid" >
			<!-- start content-top -->
			<div class="row content-top" style="font-size:12px;">
				
				 <div class="col-md-4">
				   <!-- <h3>NISCHAL shrestha</h3>
				   <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> -->
				   <div class="card">
				   <div class="panel panel-default">
				   	<div class="panel panel-heading" style="background: #72d0f4;">
				   		<h5 align="center" style="color:white">calculate body mass index:</h5>
				   	</div>
				   	
				   	<div class="panel panel-body" style="color: #00bff0;">
				   		
				   		<form class="form-horizontal">
				   		<div class="form-group">
				   			<label for="height" class="form-label col-sm-6">Height(in feet):</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control" placeholder=" (ft)" name="height" id="height" style="float:left; width:55px"/>
				   			
				   			<input type="text" class="form-control" placeholder="inch" name="heightinch" id="heightinch" style="width:55px" />
				   			</div>
				   		</div>
				   		<div class="form-group" style="margin-top:10px;">
				   			<label for="weight" class="form-label col-sm-6">weight(in kg):</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control "  placeholder=" enter weight" name="weight" id="weight" />
				   			</div>
				   		</div>
				   		</form>
				   		 	<div class="panel panel-footer">
				   		<button class="btn btn-success center-block" onclick="bmiCalculation()">calculate:</button>
				   	</div>
				   		<div class="form-group" style="margin-top:10px;">
				   			<label for="bmi" class="form-label col-sm-6">BMI:</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control "  placeholder="your BMI..." name="bmi" id="bmi" />
				   			</div>
				   		</div>
				   		
				   		</div>
				   	</div>
				  
				   </div> 


				 </div>
				 <div class="col-md-4">
				 <div class="card">
				 	<div class="panel panel-default">
				 	<div class="panel panel-heading" style="background: #72d0f4;">
				 		<h5  align="center" style="color:white">BMI Categories:</h5>
				 	</div>
				 	
				 	<div class="panel panel-body" style="color: #00bff0;">
				 		
				 		<p>
				 			<ul>
				 			<li>Underweight = 18.5</li>
							<li>Normal weight = 18.5–24.9</li> 
							<li>Overweight = 25–29.9 </li>
							<li>Obesity = BMI of 30 or greater</li>
							</ul>
							</p>
							<hr/>
							<div class="class="btn btn-link">
							<h3 align="center">
							<a href="<?php echo base_url();?>controlWelcome/goToBmiTable">BMI table:</a>
							</h3></div>
				 		</div>

				 	</div>
				 	</div>
				 </div>
				 <div class="col-lg-4">
				  <!-- <img src="<?php echo base_url();?>assets/images/pic.png" class="img-responsive" alt=""> -->
				  <div class="card">
				 	<div class="panel panel-default">
				 	<div class="panel panel-heading" style="background: #72d0f4;">
				 		<h5  align="center" style="color:white">login to get
				 		exercise schedule:</h5>
				 	</div>
				 	
				 	<div class="panel panel-body" style="color: #00bff0;">
				 		<form method="post" action="<?php echo base_url();?>controlCheck/getSchedule">
				 			<div class="panel panel-body" style="font-size: 12px;">
				 			<div class="form-group">
							<label for="mid">id:</label>
							<!-- <input type="text" id="mid" placeholder="please enter id" name="mid" required="required" class="form-control"/> -->
							  <select class="form-control" id="mid" name="mid">
								     <option>please select member ID</option>
								   <?php
								if($mid->num_rows() > 0){
								foreach($mid->result() as $row){

								  ?>
								  
								  <option><?php echo $row->id; ?></option>
								  
								    <?php
								}
								}
								?>
								   </select>
						</div>
					</div>
					<div class="panel panel-footer">
						
						  <input type="submit" name="btnsubmit" id="btnsubmit" value="submit" class="btn btn-success center-block" >
					</div>


				 		</form>



				 		</div>

				 	</div>
				 	</div>

			     </div>

            </div>
		 </div>
		<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
		       
		      <div class="col-lg-4">
		       <div class="card">
     	 <a href="<?php echo base_url();?>controlVideo/getVideo">
     	 <h3 class="m_2">Videos</h3></a></div>

	 	    	<a href="<?php echo base_url();?>controlVideo/getVideo">
	 	    		<ul class="spinning">
	 	    			<li class="live">click <span class="m_1">for more</span></li>
	 	    			<li class="room">just chill</li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth card">
				  	   <!-- <img src="<?php echo base_url();?>assets/images/pic3.jpg" class="img-responsive" alt=""> -->

				  	  <!--  ============================================ -->

				  	  	<video  width="auto" height="350" controls>
							  <source src="<?php echo base_url();?>assets/videos/video1.mp4" type="video/mp4">
							  <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object>  -->
							  Your browser does not support the video tag.
							</video>

						<!-- <canvas id="myCanvas" style="border:0px solid #FFF;"> 
						</canvas>  -->

				  	<!--    ============================================ -->
					      <div class="mask">
	                       	<div class="info">view More</div>
			              </div>
	                  </div>
			     </a>
			 
				<div class="clear"></div>
		   </div>
		   <div class="col-lg-4 ">
		     	 <h3 class="m_2 card">All Classes</h3>
		     	 <div class="classes">
		     	 	<!-- <div class="cardio_list"> -->
		     	 	   <?php
					if($class->num_rows() > 0){
						foreach($class->result() as $row){
							?>
		     	 	  <div class="cardio_sublist">
		     	 	 
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span><?php echo $row->cname;?></span></li>
			     	 	</ul>
			     	 	
			     	 <!-- 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div> -->
			     	 	<div class="clear"></div>
		     	
 	 </div>

		     	 	  	<?php	
						}

					}
		  ?>
		     	 	
		     	 </div>
				</div>
				<div class="col-md-4 ">
				  <h3 class="m_4 card">Membership Prices</h3>
				  <div class="members">
				   <h4 class="m_3">25% Discount of for all members</h4>
				   <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
				   <div class="btn1">
				    <a href="#">More</a>
			       </div>
				  </div>
			    </div>
			    <div class="clear"></div>
		   </div>
		 
			
		    <div class="row content_middle_bottom">
			  <div class="col-md-4 ">
		        <h3 class="m_2 card">Our Trainers</h3>
		         <div class="course_demo">
		          <ul id="flexiselDemo3">
		          <?php
				if($trainer->num_rows()>0){
					foreach($trainer->result() as $row){
						?>

					<li><img src="<?php echo base_url();?>assets/images/trainers/<?php echo $row->image;?>"><div class="desc">
						<h3><?php echo $row->tname;?><br><span class="m_text"><?php echo $row->address;?></span></h3>
						<p><?php echo $row->contact;?><br></p><?php echo $row->email;?></p>
						<div class="coursel_list col-lg-offset-4">
							<i class="heart1"> </i>
							<i class="like"> </i>
						</div>
				
						<div class="clear"></div>
					</div></li>
					<?php
					}
				}
		          ?>
				
				</ul>

				<!-- ............................................................ -->
				<!-- this javascript is for our trainer div -->
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: {
			    		portrait: {
			    			changePoint:480,
			    			visibleItems: 1
			    		},
			    		landscape: {
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: {
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });

			});
		</script>
	<!-- ............................................................ -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
	  </div>
     </div>
     <!-- ......................... -->
     
     <div class="col-md-8" >
     <div class="card">
     	 <a href="<?php echo base_url();?>controlExercise/getExercise"><h3 class="m_2">Exercises</h3></a>
     	 </div>
     	 <div class="col-lg-6 " >
     	 	<div class="event-bottom card" style="background:#72d0f4">
	     	 	<ul class="event1">
	     	 		<img src="<?php echo base_url();?>assets/images/chest.gif" alt="" >
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 	<h4>Chest exercise</h4>
	     	<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getChestExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>

     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/shoulder.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Shoulder exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getShoulderExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 			<img src="<?php echo base_url();?>assets/images/back.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Back exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getBackExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 </div>

     	  <div class="col-lg-6 ">
     	 	<div class="event-bottom card" style="background:#72d0f4">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<div class="card"><img src="<?php echo base_url();?>assets/images/biceps.gif" alt=""></div>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Biceps exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getBicepsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/triceps.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Triceps exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getTricepsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/legs.gif" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Legs exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getlegsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	  <a href="<?php echo base_url();?>controlExercise/getAbsExercise"><h5 class="m_2">click here for abs exercises</h5></a>
     	 </div>
     	 
    
           </div>
<div class="clear"></div>
     </div>


<!--      ...................... -->
      <div class="row about">
		 <div class="col-md-12">
		     	 <div class="card">
     	 <a href="<?php echo base_url();?>controlImage/getImage">
     	 <h3 class="m_2">Gallery</h3></a></div>
		     	 <div id="ca-container" class="ca-container card" style="height:180px;">
				    <div class="ca-wrapper">

				    <?php
				    if($image->num_rows()>0){
				    	foreach($image->result() as $row){
				    		?>

				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<img src="<?php echo base_url();?>assets/images/<?php echo $row->image?>" alt="" class="img-responsive">
								<!-- <div> <img src="<?php echo base_url();?>assets/images/triceps.gif" alt=""></div> -->
							</div>
						  </div>
						  	<?php
				    	}
				    }
				    	?>
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   </div>
	       <div class="clear"></div>
	      </div>
	     </div>
		</div>


	    <div class="map">
			<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
			<div class="opening_hours">
			 <ul class="times">
			 	<h3>Opening <span class="opening">Hours</span></h3>
			 	<li><i class="calender"> </i><span class="week">Monday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Tuesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Wednesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Thrusday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Friday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Saturday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Sunday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
			 	<h4>Enjoy it!</h4>
			 </ul>
		    </div>
		 </div>

		
<?php include('footer.php'); ?>
</body></html>

<script type="text/javascript">
	function bmiCalculation(){
		
		var height=document.getElementById('height').value;	
		var heightinch=document.getElementById('heightinch').value;
		var ftheight=(height*0.3084)+(heightinch*0.0254);
		var weight=document.getElementById('weight').value;

		var bmi=weight/(ftheight*ftheight);
		document.getElementById('bmi').value=bmi;
		// note:.value is normally use for form/input
		// .innerhtml is used fo div/span
	}

</script>
