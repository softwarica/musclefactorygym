<style type="text/css">
  h4{
font-size: 12px !important;
  }
</style>
<div class="container" style="margin-top:10px;">

<ul class="nav navabar-default" style="margin-left:50px;">
  <li><a href="<?php echo base_url();?>controlWelcome/goToMemberRegistration" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/register.png" class="img-responsive" style="height:50px;margin-left:25px;"/>
     <h4 style="color:#337ab7">Member register</h4>
  </a></li>
   <li><a href="<?php echo base_url();?>controlWelcome/goToTrainerRegistration" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/customer.png" class="img-responsive" style="height:50px;margin-left:25px;"/>
     <h4 style="color:#337ab7">Trainer register</h4>
  </a></li>
  <li><a href="<?php echo base_url();?>controlEntry/goToMemberEntry" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/register.png" class="img-responsive" style="height:50px;margin-left:25px;"/>
     <h4 style="color:#337ab7">Entry record</h4>
  </a></li>
  <li><a href="<?php echo base_url();?>controlExercise/getCategory" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/manage.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">Exercise</h4>
  </a></li>
   <li><a href="<?php echo base_url();?>controlImage/getCategory" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/exercise.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">images</h4>
  </a></li>
  <li><a href="<?php echo base_url();?>controlVideo/getCategory" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/equip.png" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">videos</h4>
  </a></li>
  <li><a href="<?php echo base_url();?>controlPayment/goToMemberPayment" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/payment.png" class="img-responsive" style="height:50px;margin-left:25px;"/>
     <h4 style="color:#337ab7">payment record</h4>
  </a></li>
   <li><a href="<?php echo base_url();?>controlMessage/getMessage" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/payment.png" class="img-responsive" style="height:50px;margin-left:25px;"/>
     <h4 style="color:#337ab7">view feedback</h4>
  </a></li>
</ul>
</div>

<div class="col-lg-8 col-lg-offset-3" style="margin-top:10px; margin-bottom: 10px;">
  <form method="post" action="<?php echo base_url();?>controlAdmin/searchMember">
  <div class="col-lg-8">
    <input type="text" name="forsearch" placeholder="search member..." class="form-control"/>
    </div>
    <div class="col-lg-4">
    <input type="submit" class="btn btn-success" name="btnsearch" value="search"/>
    </div>
    </form>
</div>

<div class="container-fluid">
<div class="col-lg-3 col-lg-offset-3">
<div class="panel panel-default">
  <div class="panel panel-heading">
  <h3 align="center" class="btn btn-link">member entry action:
<span style="color:red"><?php  echo $this->session->flashdata('entrydelete');?></span>
  </h3>
  </div>
  <div class="panel panel-body" style="height:30px;">

 <a style="margin-top:-20px;" class="btn btn-link"  href="<?php echo base_url();?>controlEntry/retriveEntryMembers?date=<?php echo date("Y/m/d");?>"><h4><b>todays:</b><br/> total number of member in gym hall</h4></a> 
  </div>
  <div class="panel panel-footer"  style="height:80px;">
  <form action="<?php echo base_url();?>controlEntry/retriveMemberEntryOnSelectedDate" method="post">
 <div class="form-group">
 <input type="date" name="rmbedate" id="rmbedate" required="required" class="form-control"/>
 </div>
 <input type="submit" value="search..." class="btn btn-link center-block"/>
  </form>
  </div>

</div>
</div>



<div class="col-lg-3">
<div class="panel panel-default">
  <div class="panel panel-heading">
  <h3 align="center" class="btn btn-link">member payment action:
<span style="color:red"><?php  echo $this->session->flashdata('paymentdelete');?></span>
  </h3>
  </div>
  <div class="panel panel-body" style="height:30px;">

 <a style="margin-top:-20px;" class="btn btn-link"  href="<?php echo base_url();?>controlPayment/retrivePaymentMembers?date=<?php echo date("Y/m/d");?>"><h4><b>this months:</b><br/>total members who clear payment<br/> for this months</h4></a> 
  </div>
  <div class="panel panel-footer"  style="height:80px;">
 <a style="margin-top:10px;" class="btn btn-link"  href="<?php echo base_url();?>controlPayment/getPayment"><h4><b>payment history:</b> of members</h4></a> 
  </div>

</div>
</div>

</div>

