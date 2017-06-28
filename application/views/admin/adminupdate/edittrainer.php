
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
<h5 align="center" class="btn btn-link">edit trainer form:
<span style="color:red"><?php  echo $this->session->flashdata('edit_trainer_message');?></span>
</h5>

  </div>
<div class="panel panel-body" id="menu" style="font-size: 12px;">
<?php
if($trainerdetails->num_rows() > 0){
  foreach($trainerdetails->result() as $row){
?>

<form class="" action="<?php echo base_url();?>controlTrainer/updateEditedTrainer" method="post">
<div class="form-group">
  <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $row->id; ?>" required="required" >
</div>
<div class="col-lg-6" >

           <div class="form-group">
            <label for="tname">Trainer Name:</label>
            <input type="text" name="tname" class="form-control" id="tname" value="<?php echo $row->tname; ?>" placeholder="please enter trainer name" required="required" >
          </div>
          <div class="form-group">
           <label for="address">Trainer Address:</label>
           <input type="text"  name="address" class="form-control" value="<?php echo $row->address; ?>" id="address" placeholder="please enter member address" required="required">
         </div>
           <div class="form-group">
     <label for="contact">Trainer Contact:</label>
     <input type="text" name="contact" value="<?php echo $row->contact; ?>" onchange="checkContact()" class="form-control" id="contact" placeholder="please enter member contact" required="required">
    </div>
    <div class="form-group">
          <span id="contactMessage"></span>
        </div>
         <div class="form-group">
          <label for="email">Trainer Email:</label>
          <input type="email" name="email" class="form-control" value="<?php echo $row->email; ?>" id="email" placeholder="please enter member email" required="required">
        </div>
        <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" name="uname" value="<?php echo $row->uname; ?>" class="form-control" id="uname" placeholder="please enter username" required="required">
        </div>
       
</div>
<!-- .................................................................... -->
<div class="col-lg-6" >
    <div class="form-group">
      <label for="pword">Password:</label>
      <input type="password" name="pword" onchange="checkLength()" value="<?php echo $row->pword; ?>" class="form-control" id="pword"  placeholder="please enter password" required="required">
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
          <input type="date" name="dob" class="form-control" value="<?php echo $row->dob; ?>" id="dob" placeholder="please enter Daet of birth" required="required">
        </div>
      
      
    <div class="form-group">
     <label for="jdate">Join Date:</label>
     <input type="date" name="jdate" class="form-control" id="jdate" value="<?php echo $row->jdate; ?>" placeholder="please enter join date" required="required">
    </div>

    <div class="form-group">
     <label for="package">Package:</label>
     <input type="text" name="package" class="form-control" id="package" value="<?php echo $row->package; ?>" placeholder="please enter package" required="required">
    </div>
     
    <div class="panel panel-footer">
    <input type="submit" name="btnsubmit" id="btnsubmit" value="submit" onclick="return confirm('Do you want to edit trainer?')" class="btn btn-success center-block" >
    </div>
</div>
</form>
</div>

<?php
  }
}
?>

</div>
</div>
<div><?php $this->load->view('footer');?></div>

