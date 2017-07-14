
<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<html>
<?php $this->load->view("link"); ?>


<body>


          <div class="menu" >
          <div class="container">
          
                   
                     <a href="<?php echo base_url();?>controlWelcome/goToAdmin">
              <div class="header-bottom_left">
                <img src="<?php echo base_url();?>assets/images/logo/logo.png" alt"" class="img-responsive" width="100"/>
              </div>
              </a>
           <div class="h_menu4"><!-- start h_menu4 -->
         
             <ul class="nav"  > 
               <li class="active"><a data-toggle="pill" href="#home">DASHBOARD</a></li>
               <li><a data-toggle="pill" href="#menu1">MEMBERS LIST</a></li>
               <li><a data-toggle="pill" href="#menu2">EXERCISE LIST</a></li>
               <li><a data-toggle="pill" href="#menu3">TRAINER LIST</a></li>
                <li><a data-toggle="pill" href="#menu4">IMAGES LIST</a></li>
                 <li><a data-toggle="pill" href="#menu5">VIDEOS LIST</a></li>
                     <li class="active">
                     <a href="">Actions</a>
                  <ul class="sub-menu">
                    <li><a href="<?php echo base_url();?>controlCheck/destroySession">LOGOUT</a></li>
                    <li><a href="<?php echo base_url();?>controlWelcome/goToChangePassword">change username and password</a></li>
                  </ul>
                  </li>
               
             </ul>
               
             <script type="text/javascript" src="<?php echo base_url();?>assets/js/nav.js"></script>
           </div><!-- end h_menu4 -->

           <div class="clear"></div>

           </div>
           </div>
           <div class="col-lg-12">
             <h3 align="center" style="color:red; font-size:15px;">
                  <?php 
                  
                  echo $this->session->flashdata('delete_message');
                  echo $this->session->flashdata('delexmsg');
                  echo $this->session->flashdata('image_update');
                  echo $this->session->flashdata('video_update');
                  echo $this->session->flashdata('exercise_update');
                  
                   echo $this->session->flashdata('delete_trainer_message');
                    echo $this->session->flashdata('edit_trainer_message');
                 
                      echo $this->session->flashdata('tblimage_update');
                       echo $this->session->flashdata('delimgmsg');
                       echo $this->session->flashdata('delvdomsg');
                         echo $this->session->flashdata('video_dtl_update');
                       echo $this->session->flashdata('image_dtl_update');
                   ?></h3>
                   </div>
             <div class="tab-content main" id="menu">
               <div id="home" class="tab-pane fade in active">
                 <?php
                 $this->load->view('admin/adminheaderlist/dashboard');
                 ?>
               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#memberlistcontent").load("<?php echo base_url();?>controlAdmin/getMember");
            })
            </script>

               <div id="menu1" class="tab-pane fade">
              <div id="memberlistcontent"></div>
               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#exerciselistcontent").load("<?php echo base_url();?>controlExercise/getExerciseList");
            })
            </script>
               <div id="menu2" class="tab-pane fade">
               <div id="exerciselistcontent"></div>
               </div>


                <script type="text/javascript">
            $(document).ready(function(){
                $("#trainerlistcontent").load("<?php echo base_url();?>controlTrainer/getTrainerList");
            })
            </script>
               <div id="menu3" class="tab-pane fade">
                 <div id="trainerlistcontent"></div>
               </div>

                  <script type="text/javascript">
            $(document).ready(function(){
                $("#imageslistcontent").load("<?php echo base_url();?>controlImage/getImageList");
            })
            </script>
               <div id="menu4" class="tab-pane fade">
                <div id="imageslistcontent"></div>

               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#videoslistcontent").load("<?php echo base_url();?>controlvideo/getVideoList");
            })
            </script>
               <div id="menu5" class="tab-pane fade">
              <div id="videoslistcontent"></div>
               </div>


             </div>



<div>
  
  <?php
$this->load->view("footer");
  ?>
</div>

<body>
</html>
