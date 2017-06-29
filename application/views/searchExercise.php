<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<b class="btn btn-link" style="float:left">Exercises with its picture, its category and details</b>
		<form method="post" action="<?php echo base_url();?>controlExercise/searchExercise">
		<input type="text" name="forsearch" placeholder="search..." class="form-control" style="width:500px;float:left;margin-left: 80px;"/>
		<input type="submit" class="btn btn-success" name="btnsearch" value="search" style="margin-left: 20px;"/>
		</form>
	</div>
	
<div class="panel panel-body" style="font-size: 12px;">
	


	<?php
if($exercise->num_rows() > 0){
	foreach($exercise->result() as $row){
	?>
	<div class="col-lg-4 card" style="margin-top:15px;height:450px;">

     <!-- 	 <div class="events"> -->
     	 	<div class="col-lg-8">
	     	 	
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		
	     	 		<img src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqimage;?>" alt="" class="img-responsive" >
	     	 		<div class="btn2">
					   <a href="<?php echo base_url();?>controlExercise/getExerciseVideo?id=<?php echo $row->id;?>">click for video</a>
					</div>
	     	 		
	     	 </div>
	     	 <div class="col-lg-4">
	     	<!--  	<ul class="event1_text"> -->
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<b>Exercise name:</b>
	     	 		<p><?php echo $row->eqname;?></p>
	     	 	
	     	 		<b>Exercise Category:</b>
	     	 		<p><?php echo $row->eqcat;?></p>
	     	 		
	     	 		</div>
	     	 		<div class="col-lg-12">
	     	 		<h4>Exercise details:</h4>
	     	 		<p><?php echo $row->eqdetails;?></p>
	     	 		</div>
	     	 	
     	 		<div class="clear"></div>
    
    
     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>