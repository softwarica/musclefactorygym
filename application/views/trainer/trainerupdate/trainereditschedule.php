<?php
if(!isset($this->session->userdata['sess_id_for_trainer'])){
  redirect('controlWelcome/goToLogin');
}
?>
<html>

<?php $this->load->view("link"); ?>
<?php $this->load->view('trainer/trainerheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">edit Schedule form:
 <span style="color:red"><?php  echo $this->session->flashdata('');?></span>
</h5>

  </div>
<?php
if($retriveSchByMid->num_rows()>0){
  foreach($retriveSchByMid->result() as $schedulerow){
    ?>


<form id="myForm" action="<?php echo base_url();?>controlSchedule/newSchedule" method="post" enctype="multipart/form-data">
  <div class="panel panel-body" style="font-size: 12px;">
  <div class="col-lg-4">
   <div class="form-group">
    <label for="mid">Member id:</label>
   <input type="text" value="<?php echo $schedulerow->mid;?>" class="form-control"/>
  </div>
<div class="form-group">
  <label for="mname">Member name:</label>
  <input type="text" name="mname" value="<?php echo $schedulerow->mname;?>" class="form-control" id="mname" required="required" placeholder="please enter member name">
</div>
<div class="form-group">
  <label for="esdate">exericse start date:</label>
  <input type="date" name="esdate" value="<?php echo $schedulerow->esdate;?>" class="form-control" id="esdate" required="required" placeholder="please enter start date">
</div>
<div class="form-group">
  <label for="eedate">Exercise end date:</label>
  <input type="date" name="eedate" value="<?php echo $schedulerow->eedate;?>" class="form-control" id="eedate" required="required" placeholder="please enter exercise end date">
</div>
</div>

<div class="col-lg-8" id="menu">
<!-- =========================================== -->

  <div class="panel panel-default">
  
    <div class="panel-heading">
      <h4 class="panel-title" align="center">
        
          <div class="form-group">

   <label for="day">day:</label>
    <select class="form-control" id="day" name="day">

    
    <option><?php echo $schedulerow->day;?></option>
    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
    
<div class="col-lg-6">
    
      <div class="panel-body">
      <div class="form-group">

   <label for="cat1">Exercise category:</label>
    <select class="form-control" id="cat1" name="cat1" onchange="fetch_select(this.value);">
    <option><?php echo $schedulerow->cat1;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
    present exercise:<b><?php echo $schedulerow->ename1cat1;?></b>
    <select class="form-control" id="new_select1" name="ename1cat1">
    <option>please select exercise</option>
    <option></option> 
    </select>

present exercise:<b><?php echo $schedulerow->ename2cat1;?></b>
 <select class="form-control" id="new_select2" name="ename2cat1">
    <option>please select exercise</option>
    <option></option>
    
</select>
present exercise:<b><?php echo $schedulerow->ename3cat1;?></b>
 <select class="form-control" id="new_select3" name="ename3cat1">
  
    <option>please select exercise</option>
    <option></option>
    
</select>
present exercise:<b><?php echo $schedulerow->ename4cat1;?></b>
 <select class="form-control" id="new_select4" name="ename4cat1">
 
    <option>please select exercise</option>
    <option></option>
    
</select>
present exercise:<b><?php echo $schedulerow->ename5cat1;?></b>
 <select class="form-control" id="new_select5" name="ename5cat1">
 <
    <option>please select exercise</option>
    <option></option>
    
</select>
present exercise:<b><?php echo $schedulerow->ename6cat1;?></b>
 <select class="form-control" id="new_select6" name="ename6cat1">
 
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>

  </div>

      </div>
    
</div>
<!-- ............... -->

<div class="col-lg-6">
    
      <div class="panel-body">
      <div class="form-group">

   <label for="cat2">Exercise category:</label>
    <select class="form-control" id="cat2" name="cat2" onchange="fetch_select2(this.value);">
    <option><?php echo $schedulerow->cat2;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
    present exercise:<b><?php echo $schedulerow->ename1cat2;?></b>
    <select class="form-control" id="new_select12" name="ename1cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>
  present exercise:<b><?php echo $schedulerow->ename2cat2;?></b>
 <select class="form-control" id="new_select22" name="ename2cat2">
<option><?php echo $row->ename2cat2;?></option>    <option>please select exercise</option>
    <option></option>
    
</select>
  present exercise:<b><?php echo $schedulerow->ename3cat2;?></b>
 <select class="form-control" id="new_select32" name="ename3cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>
  present exercise:<b><?php echo $schedulerow->ename4cat2;?></b>
 <select class="form-control" id="new_select42" name="ename4cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>
  present exercise:<b><?php echo $schedulerow->ename5cat2;?></b>
 <select class="form-control" id="new_select52" name="ename5cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>
  present exercise:<b><?php echo $schedulerow->ename6cat2;?></b>
 <select class="form-control" id="new_select62" name="ename6cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>

      </div>
   
</div>



<!-- ............... -->


  </div>


<!--   ---------------------------------------- -->

      </div>
      </div>
  <div class="panel panel-footer">
<input type="submit" name="btnscheditsubmit" value="submit" class="btn btn-success center-block" >
</div>
</form>
  <?php
  }

}
  ?>
</div>


</div>

<?php $this->load->view('footer');?>

{
<script>
 
    $(document).ready(function(){
      $('#mid').click(function(){
          var mid=$('#mid').val();
          
          if(mid!="please select member ID"){
           
            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkMemberName",
              type:"POST",
              data:{mid:mid},
              success:function(data){
                $('#mname').val(data);
              }

            });
          }
      });
    });
 

</script>


<script> 
 function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val
 },
 success: function (data) {
    document.getElementById("new_select1").innerHTML=data; 
    document.getElementById("new_select2").innerHTML=data;
    document.getElementById("new_select3").innerHTML=data; 
    document.getElementById("new_select4").innerHTML=data;
    document.getElementById("new_select5").innerHTML=data; 
    document.getElementById("new_select6").innerHTML=data; 
 }
 });
}

 function fetch_select2(val2)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val2
 },
 success: function (data) {
    document.getElementById("new_select12").innerHTML=data; 
    document.getElementById("new_select22").innerHTML=data;
    document.getElementById("new_select32").innerHTML=data; 
    document.getElementById("new_select42").innerHTML=data;
    document.getElementById("new_select52").innerHTML=data; 
    document.getElementById("new_select62").innerHTML=data; 
 }
 });
}

</script>




