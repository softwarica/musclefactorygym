<?php $this->load->view('admin/adminheader'); ?>
<?php $this->load->view('link');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Member list</h5>

  </div>
<div class="panel panel-body" >
<div class="table-responsive">
<table class="table" style="font-size: 12px;">
  <tr>
    <th>Member ID</th><th>Member name</th><th>Member address</th><th>Member email</th>
    <th>Member contact</th><th>joinDate</th><th>package ID</th><th>actions</th>
  </tr>
  <?php
 
if($memberlist->num_rows() > 0)
{
	foreach ($memberlist->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->mname; ?></td>
			<td><?php echo $row->address; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->contact; ?></td>
			<td><?php echo $row->jdate; ?></td>
			<td><?php echo $row->package; ?></td>
			<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlAdmin/removeMember?id=<?php echo $row->id; ?>">delete</a></td>
			<td><a href="<?php echo base_url();?>controlAdmin/editMember?id=<?php echo $row->id;?>">edit</a></td>
			<td><a href="<?php echo base_url();?>controlAdmin/viewDetails?id=<?php echo $row->id; ?>">view details</a></td>

		</tr>
		<?php
	}

}
else
{
?>
<tr colspan="7"><h5 align="center">data not found</h5></tr>
<?php
}
  ?>


</table>
</div>

</div>
</div>
</div>
<?php $this->load->view('footer');?>