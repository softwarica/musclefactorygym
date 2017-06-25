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
<h5 align="center" class="btn btn-link">Schedule form</h5>

  </div>


<form id="myForm" action="<?php echo base_url();?>controlSchedule/newSchedule" method="post" enctype="multipart/form-data">
  <div class="panel panel-body" style="font-size: 12px;">
  <div class="col-lg-4">
   <div class="form-group">
    <label for="mid">Member id:</label>
   <select class="form-control" id="mid" name="mid" onchange="getMember()">
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
<div id="memname"></div>
<div class="form-group">
  <label for="mname">Member name:</label>
  <input type="text" name="mname" class="form-control" id="mname" required="required" placeholder="please enter member name">
</div>
<div class="form-group">
  <label for="esdate">exericse start date:</label>
  <input type="date" name="esdate" class="form-control" id="esdate" required="required" placeholder="please enter start date">
</div>
<div class="form-group">
  <label for="eedate">Exercise end date:</label>
  <input type="date" name="eedate" class="form-control" id="eedate" required="required" placeholder="please enter exercise end date">
</div>
</div>

<div class="col-lg-8">
<!-- =========================================== -->

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed btn btn-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <!--  Collapsible Group Item #1 -->
          SUNDAY:

        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <div class="form-group">

   <label for="cat1">Exercise category:</label>
    <select class="form-control" id="cat1" name="cat1">

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

   <label for="day1">day:</label>
    <select class="form-control" id="day1" name="day1">

    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>
 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
  <input type="text" name="ename1cat1" class="form-control" id="ename1cat1" required="required" placeholder="please enter first exercise">
   <input type="text" name="ename2cat1" class="form-control" id="ename2cat1" required="required" placeholder="please enter second exercise" >
    <input type="text" name="ename3cat1" class="form-control" id="ename3cat1" required="required" placeholder="please enter third exercise">
     <input type="text" name="ename4cat1" class="form-control" id="ename4cat1" required="required" placeholder="please enter fourth exercise">
      <input type="text" name="ename5cat5" class="form-control" id="ename5cat1" required="required" placeholder="please enter fifth exercise">
       <input type="text" name="ename6cat1" class="form-control" id="ename6cat1" required="required" placeholder="please enter sixth exercise" >
       </div>
  </div>






      </div>
    </div>
  </div>

<!-- 
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed btn btn-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         MONDAY:
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
              <div class="form-group">

   <label for="cat2">Exercise category:</label>
    <select class="form-control" id="cat2" name="cat2">

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

   <label for="day2">day:</label>
    <select class="form-control" id="day3" name="day3">

    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>
 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
  <input type="text" name="ename1cat2" class="form-control" id="ename1cat2" required="required" placeholder="please enter first exercise">
   <input type="text" name="ename2cat2" class="form-control" id="ename2cat2" required="required" placeholder="please enter second exercise" >
    <input type="text" name="ename3cat2" class="form-control" id="ename3cat2" required="required" placeholder="please enter third exercise">
     <input type="text" name="ename4cat2" class="form-control" id="ename4cat2" required="required" placeholder="please enter fourth exercise">
      <input type="text" name="ename5cat2" class="form-control" id="ename5cat2" required="required" placeholder="please enter fifth exercise">
       <input type="text" name="ename6cat2" class="form-control" id="ename6cat2" required="required" placeholder="please enter sixth exercise" >
       </div>
  </div>

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed btn btn-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         TUESDAY:
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       <div class="form-group">

   <label for="cat3">Exercise category:</label>
    <select class="form-control" id="cat3" name="cat3">

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

   <label for="day3">day:</label>
    <select class="form-control" id="day3" name="day3">

    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>
 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
  <input type="text" name="ename1cat3" class="form-control" id="ename1cat3" required="required" placeholder="please enter first exercise">
   <input type="text" name="ename2cat3" class="form-control" id="ename2cat3" required="required" placeholder="please enter second exercise" >
    <input type="text" name="ename3cat3" class="form-control" id="ename3cat3" required="required" placeholder="please enter third exercise">
     <input type="text" name="ename4cat3" class="form-control" id="ename4cat3" required="required" placeholder="please enter fourth exercise">
      <input type="text" name="ename5cat3" class="form-control" id="ename5cat3" required="required" placeholder="please enter fifth exercise">
       <input type="text" name="ename6cat3" class="form-control" id="ename6cat3" required="required" placeholder="please enter sixth exercise" >
       </div>
  </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfour">
      <h4 class="panel-title">
        <a class="collapsed btn btn-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
          WEDNESDAY:
        </a>
      </h4>
    </div>
    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
      <div class="panel-body">
       <div class="form-group">

   <label for="cat4">Exercise category:</label>
    <select class="form-control" id="cat4" name="cat4">

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

   <label for="day4">day:</label>
    <select class="form-control" id="day4" name="day4">

    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>
 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
  <input type="text" name="ename1cat4" class="form-control" id="ename1cat4" required="required" placeholder="please enter first exercise">
   <input type="text" name="ename2cat4" class="form-control" id="ename2cat4" required="required" placeholder="please enter second exercise" >
    <input type="text" name="ename3cat4" class="form-control" id="ename3cat4" required="required" placeholder="please enter third exercise">
     <input type="text" name="ename4cat4" class="form-control" id="ename4cat4" required="required" placeholder="please enter fourth exercise">
      <input type="text" name="ename5cat4" class="form-control" id="ename5cat4" required="required" placeholder="please enter fifth exercise">
       <input type="text" name="ename6cat4" class="form-control" id="ename6cat4" required="required" placeholder="please enter sixth exercise" >
       </div>
  </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfive">
      <h4 class="panel-title">
        <a class="collapsed btn btn-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
          THURSDAY:
        </a>
      </h4>
    </div>
    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
      <div class="panel-body">
       <div class="form-group">

   <label for="cat5">Exercise category:</label>
    <select class="form-control" id="cat5" name="cat5">

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

   <label for="day5">day:</label>
    <select class="form-control" id="day5" name="day5">

    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>
 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
  <input type="text" name="ename1cat5" class="form-control" id="ename1cat5" required="required" placeholder="please enter first exercise">
   <input type="text" name="ename2cat5" class="form-control" id="ename2cat5" required="required" placeholder="please enter second exercise" >
    <input type="text" name="ename3cat5" class="form-control" id="ename3cat5" required="required" placeholder="please enter third exercise">
     <input type="text" name="ename4cat5" class="form-control" id="ename4cat5" required="required" placeholder="please enter fourth exercise">
      <input type="text" name="ename5cat5" class="form-control" id="ename5cat5" required="required" placeholder="please enter fifth exercise">
       <input type="text" name="ename6cat5" class="form-control" id="ename6cat5" required="required" placeholder="please enter sixth exercise" >
       </div>
  </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed btn btn-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
        FRIDAY:
        
        </a>
      </h4>
    </div>
    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
        <div class="form-group">

   <label for="cat6">Exercise category:</label>
    <select class="form-control" id="cat6" name="cat6">

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

   <label for="day6">day:</label>
    <select class="form-control" id="day6" name="day6">

    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>
 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
  <input type="text" name="ename1cat6" class="form-control" id="ename1cat6" required="required" placeholder="please enter first exercise">
   <input type="text" name="ename2cat6" class="form-control" id="ename2cat6" required="required" placeholder="please enter second exercise" >
    <input type="text" name="ename3cat6" class="form-control" id="ename3cat6" required="required" placeholder="please enter third exercise">
     <input type="text" name="ename4cat6" class="form-control" id="ename4cat6" required="required" placeholder="please enter fourth exercise">
      <input type="text" name="ename5cat6" class="form-control" id="ename5cat6" required="required" placeholder="please enter fifth exercise">
       <input type="text" name="ename6cat6" class="form-control" id="ename6cat6" required="required" placeholder="please enter sixth exercise" >
       </div>
  </div>
      </div>
    </div>
  </div>-->
</div> 
<!--   ---------------------------------------- -->

      </div>
      </div>
  <div class="panel panel-footer">
<input type="submit" name="btntreqsubmit" value="submit" class="btn btn-success center-block" >
</div>
</form>

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


