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
<h5 align="center" class="btn btn-link">edit user registration form:
<span style="color:red"><?php  echo $this->session->flashdata('update_message');?></span>
</h5>

  </div>
<div class="panel panel-body" id="menu" style="font-size: 12px;">
<?php
if($memberdetails->num_rows() > 0){
  foreach($memberdetails->result() as $row){
?>

<form class="" action="<?php echo base_url();?>controlAdmin/updateEditedMember" method="post">

<div class="form-group">
    
    <input type="hidden" name="id" class="form-control" id="id" required="required" value="<?php echo $row->id; ?>">
  </div>
<div class="col-lg-6">
   <div class="form-group">
    <label for="mname">Member Name:</label>
    <input type="text" name="mname" class="form-control" id="mname" placeholder="please enter member name" value="<?php echo $row->mname; ?>" required="required">
  </div>
  <div class="form-group">
   <label for="address">Member Address:</label>
   <input type="text"  name="address" class="form-control" id="address" value="<?php echo $row->address; ?>" placeholder="please enter member address"  required="required">
 </div>

 <div class="form-group">
  <label for="email">Member Email:</label>
  <input type="text" name="email" class="form-control" id="email" value="<?php echo $row->email; ?>" placeholder="please enter member email" required="required">
</div>
 <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" name="uname" class="form-control" id="uname" placeholder="please enter username" required="required"
          value="<?php echo $row->uname;?>">

        </div>
         <div class="form-group">
      <label for="pword">Password:</label>
      <input type="password" name="pword" class="form-control" id="pword"  placeholder="please enter password" required="required" value="<?php echo $row->pword;?>">
    </div>
    <div class="form-group">
      <label for="repword">Re-password:</label>
      <input type="password" name="repword" onchange="checkPassword()" class="form-control" id="repword" placeholder="please re-enter password" required="required">
    </div>
    <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" value="<?php echo $row->dob;?>" name="dob" class="form-control" id="dob" placeholder="please enter date of birth" required="required">
        </div>
</div>
<div class="col-lg-6">

        <div class="form-group">
          <label for="weight">weight(in kg):</label>
          <input type="text" value="<?php echo $row->weight;?>" name="weight" class="form-control" id="weight" placeholder="please enter member weight" required="required">
        </div>
        <div class="form-group">
          <label for="ftheight">height(feet):</label>
          <input type="text" name="ftheight"  value="<?php echo $row->ftheight;?>" class="form-control" id="ftheight" placeholder="please enter feet" required="required">
        </div>
         <div class="form-group">
          <label for="heightinch">height(inch):</label>
          <input type="text" name="heightinch"  value="<?php echo $row->heightinch;?>" class="form-control" id="heightinch" placeholder="please enter inch" onchange="bmiCalculation()" required="required">
        </div>
<div class="form-group">
 <label for="contact">Member Contact:</label>
 <input type="text" name="contact" class="form-control" id="contact" value="<?php echo $row->contact; ?>" placeholder="please enter member contact" required="required">
</div>

<div class="form-group">
 <label for="jdate">Join Date:</label>
 <input type="date" name="jdate" class="form-control" id="jdate" value="<?php echo $row->jdate; ?>" placeholder="please enter join date" required="required">
</div>

<div class="form-group">
 <label for="package">Package:</label>
 <input type="text" name="package" class="form-control" id="package" value="<?php echo $row->package; ?>" placeholder="please enter package" required="required">
</div>
<div class="form-group">
     <label for="bmi">BMI:</label>
     <input type="text" name="bmi" value="<?php echo $row->bmi; ?>" class="form-control" id="bmi" placeholder="please enter body mass index" required="required">
    </div>

<div class="panel panel-footer">
<input type="submit" name="btnsubmitedit" value="submit" class="btn btn-success" >
  <a type="button" href="<?php  echo base_url();?>controlAdmin/index" class="btn btn-success">back</a>
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
<script type="text/javascript">
  function bmiCalculation(){
    
    var ftheight=document.getElementById('ftheight').value; 
    var heightinch=document.getElementById('heightinch').value;
    var ans=(ftheight*0.3084)+(heightinch*0.0254);
    var weight=document.getElementById('weight').value;

    var bmi=weight/(ans*ans);
    document.getElementById('bmi').value=bmi;
    // note:.value is normally use for form/input
    // .innerhtml is used fo div/span
  }

</script>
