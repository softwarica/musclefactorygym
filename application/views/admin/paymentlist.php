<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
 <div class="panel panel-heading" style="height:80px;">
	<div class="col-lg-3">
		<h6 style="word-wrap: break-word;">members who clear payment:</h6>
		</div>
		<form method="post" action="<?php echo base_url();?>controlPayment/searchPaidMember">
		<div class="col-lg-3">
		<input type="text" name="mname" placeholder="search members..." class="form-control" required/>
		</div>
		<div class="col-lg-3">
		<input type="date" name="repdate" placeholder="search..." class="form-control" required/>
		</div>
		<div class="col-lg-3">
		<input type="submit" class="btn btn-success" name="btnsearch" value="search" style="clear: both"/>
		</div>
		</form>
		
	</div>

<div class="panel panel-body" >
<div class="table-responsive">
<table class="table" style="font-size: 12px;">
  <tr>
    <th>Member ID</th><th>Member name</th><th>Member payment date</th><th>Member re payment date</th>
    <th>actions</th>
  </tr>
  <?php
 
if($paymentlist->num_rows() > 0)
{
	foreach ($paymentlist->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $row->mid; ?></td>
			<td><?php echo $row->mname; ?></td>
			<td><?php echo $row->pdate; ?></td>
			<td><?php echo $row->repdate; ?></td>
			
		
			<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlPayment/removePayment?id=<?php echo $row->id; ?> && pdate=<?php echo $row->pdate;?>">delete</a></td>
			<td><a href="<?php echo base_url();?>controlAdmin/viewDetails?id=<?php echo $row->mid; ?>">view details</a></td>
			

		</tr>
		<?php
	}

}
else
{
?>
<tr colspan="7"><td>data not found...</td></tr>
<?php
}
  ?>


</table>
</div>

</div>
</div>
</div>
<?php $this->load->view('footer');?>