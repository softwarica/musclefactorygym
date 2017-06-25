<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">Trainer registration form:
<span style="color:red"><?php echo $this->session->flashdata('inserttrainermsg');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<!-- < --><!-- ?php echo form_open_multipart('controlAdmin/newMember');?> 
<form action="http://localhost/muscleFactory/index.php/controlAdmin/newMember" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
<form class="" action="<?php echo base_url();?>controlTrainer/newTrainer" method="post" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
<div class="col-lg-6" >
           <div class="form-group">
            <label for="tname">Trainer Name:</label>
            <input type="text" name="tname" class="form-control" id="tname" placeholder="please enter trainer name" required="required" >
          </div>
         <div class="form-group">
            <label for="image">trainer image:</label>
            <input type="file" id="image" name="userfile" class="form-control" placeholder="please insert image" required="required"/>
          </div>
          <div class="form-group">
           <label for="address">Trainer Address:</label>
           <input type="text"  name="address" class="form-control" id="address" placeholder="please enter member address" required="required">
         </div>
           <div class="form-group">
     <label for="contact">Trainer Contact:</label>
     <input type="text" name="contact" onchange="checkContact()" class="form-control" id="contact" placeholder="please enter member contact" required="required">
    </div>
    <div class="form-group">
          <span id="contactMessage"></span>
        </div>
         <div class="form-group">
          <label for="email">Trainer Email:</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="please enter member email" required="required">
        </div>
        <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" name="uname" class="form-control" id="uname" placeholder="please enter username" required="required">
        </div>
       
</div>
<!-- .................................................................... -->
<div class="col-lg-6" >
    <div class="form-group">
      <label for="pword">Password:</label>
      <input type="password" name="pword" onchange="checkLength()" class="form-control" id="pword"  placeholder="please enter password" required="required">
    </div>
    <div class="form-group">
          <span id="pwordMessage"></span>
        </div>
    <div class="form-group">
      <label for="repword">Re-password:</label>
      <input type="password" name="repword" onchange="checkPassword()" class="form-control" id="repword" placeholder="please re-enter password" required="required">
    </div>
        <div class="form-group">
          <span id="pMessage"></span>
        </div>
   <div class="form-group">
          <label for="dob">Date of birth:</label>
          <input type="date" name="dob" class="form-control" id="dob" placeholder="please enter Daet of birth" required="required">
        </div>
      
      
    <div class="form-group">
     <label for="jdate">Join Date:</label>
     <input type="date" name="jdate" class="form-control" id="jdate" placeholder="please enter join date" required="required">
    </div>

    <div class="form-group">
     <label for="package">Package:</label>
     <input type="text" name="package" class="form-control" id="package" placeholder="please enter package" required="required">
    </div>
     
    <div class="panel panel-footer">
    <input type="submit" name="btnsubmit" id="btnsubmit" value="submit" onclick="return confirm('Do you want to register trainer?')" class="btn btn-success center-block" >
    </div>
</div>
</form>
</div>
</div>
</div>
<?php $this->load->view('footer');?>
<script type="text/javascript">


    function checkLength(){

          var pword=document.forms["myForm"]["pword"].value;
          var pwordMessage=$('#pwordMessage');//this variable is for css
          

          if(pword.length<9){
        document.getElementById('pword').focus();
        pwordMessage.css({
            'color':'red'
          });
         document.getElementById('pwordMessage').innerHTML='please enter password greater than 8 letter';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
          document.getElementById('pwordMessage').innerHTML='';
        }

    }

  function checkPassword() {

          var pword=document.forms["myForm"]["pword"].value;
          var pwordMessage=$('#pwordMessage');//this variable is for css
          var pMessage=$('#pMessage');// css for password matching message

          if(pword.length<9){
        document.getElementById('pword').focus();
        pwordMessage.css({
            'color':'red'
          });
         document.getElementById('pwordMessage').innerHTML='please enter password greater than 8 letter';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
          document.getElementById('pwordMessage').innerHTML='';
        }




    if(document.getElementById('pword').value === document.getElementById('repword').value && pword.length>8) {
       pMessage.css({
        'color':'blue'
      });
        document.getElementById('pMessage').innerHTML = "password match";
        // alert('password match');
         $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
    } else {
      pMessage.css({
        'color':'red'
      });
        document.getElementById('pMessage').innerHTML = "password is not matching";
        // alert('password is not matching');
        $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });
        document.getElementById('pword').focus();
    }
}

function checkWeight(){

 var weight=document.forms["myForm"]["weight"].value;
 var weightMessage=$('#weightMessage');//this variable is for css
          if(weight <= 40){
            
            document.getElementById('weight').focus();
            weightMessage.css({
            'color':'red'
          });
            document.getElementById('weightMessage').innerHTML='please enter weight greater than 40kg';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('weightMessage').innerHTML='';
            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }

}

function checkftHeight(){

 var ftheight=document.forms["myForm"]["ftheight"].value;
 var ftheightMessage=$('#ftheightMessage');//this variable is for css
          if(ftheight <= 4){
            
            document.getElementById('ftheight').focus();
             ftheightMessage.css({
            'color':'red'
          });
            document.getElementById('ftheightMessage').innerHTML='please enter height greater than 4 feet';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('ftheightMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }

}

function checkHeightinch(){
 var heightinch=document.forms["myForm"]["heightinch"].value;
 var heightinchMessage=$('#heightinchMessage');//this variable is for css
          if(heightinch > 12){
            
            document.getElementById('heightinch').focus();
             heightinchMessage.css({
            'color':'red'
          });
            document.getElementById('heightinchMessage').innerHTML='please enter height less than 12 inch';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('heightinchMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }

}

function checkContact(){

 var contact=document.forms["myForm"]["contact"].value;
 var contactMessage=$('#contactMessage');
 if(contact.length < 10){

  document.getElementById('contact').focus();
             contactMessage.css({
            'color':'red'
          });
document.getElementById('contactMessage').innerHTML='please enter valid mobile number';
 $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });
 } else{
          document.getElementById('contactMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }


}


</script>
