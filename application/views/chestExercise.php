<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<h4 class="btn btn-link">Exercises with its picture, its category and details</h4>
	</div>
	
<div class="panel panel-body card" style="font-size: 12px;">
	


	<?php
if($chestexercise->num_rows() > 0){
	foreach($chestexercise->result() as $row){
	?>
	<div class="col-lg-6 card" style="margin-top:15px;height:450px;">

     	 <!-- <div class="events"> -->
     	 	<div class="col-lg-6">
	     	 	
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		
	     	 		<img src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqimage;?>" alt="" class="img-responsive" >
	     	 		<div class="btn2">
					   <a href="<?php echo base_url();?>controlVideo/getChestVideo?id=<?php echo $row->id;?>">click for video</a>
					</div>
	     	 		
	     	 </div>
	     	 <div class="col-lg-6">
	     
	     	 
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
     	 

     	 <!-- </div> -->
    
    
     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>