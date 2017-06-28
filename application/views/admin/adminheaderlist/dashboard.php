<style type="text/css">
  h4{
font-size: 12px !important;
  }
</style>
<div class="container" style="margin-top:10px;">

<ul class="nav navabar-default" style="margin-left:250px;">
  <li><a href="<?php echo base_url();?>controlWelcome/goToMemberRegistration" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/register.png" class="img-responsive" style="height:50px;margin-left:25px;"/>
     <h4 style="color:#337ab7">Member register</h4>
  </a></li>
   <li><a href="<?php echo base_url();?>controlWelcome/goToTrainerRegistration" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/customer.png" class="img-responsive" style="height:50px;margin-left:25px;"/>
     <h4 style="color:#337ab7">Trainer register</h4>
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

 <!--  <li><a data-toggle="pill" href="#totalincome" class="btn btn-link">
     <img src="<?php echo base_url();?>assets/images/logo/income.jpg" class="img-responsive" style="height:50px;"/>
     <h4 style="color:#337ab7">incomes</h4>
  </a></li> -->
 
</ul>
</div>

<!-- <div class="tab-content main">
  <div id="member" class="tab-pane fade in active">
    <?php
    // $this->load->view('admin/memberregister');
    ?>
  </div>
   <div id="trainer" class="tab-pane fade">
    <?php
    // $this->load->view('admin/trainerregister');
    ?>
  </div>
          <script type="text/javascript">
                        $(document).ready(function(){
                            $("#exercisePage").load("<?php echo base_url();?>controlExercise/getCategory");
                        })
                        </script>
  <div id="exercise" class="tab-pane fade">
      <div id="exercisePage"></div>
  </div>
     <script type="text/javascript">
                        $(document).ready(function(){
                            $("#imagePage").load("<?php echo base_url();?>controlImage/getCategory");
                        })
                        </script>
  <div id="img" class="tab-pane fade">
   <div id="imagePage"></div>
  </div>
                      <script type="text/javascript">
                        $(document).ready(function(){
                            $("#videoPage").load("<?php echo base_url();?>controlVideo/getCategory");
                        })
                        </script>
  <div id="video" class="tab-pane fade">
    <div id="videoPage"></div>
  </div>

  <div id="totalincome" class="tab-pane fade">
   
  </div>

  </div>
 -->