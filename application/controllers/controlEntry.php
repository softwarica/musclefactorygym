<?php
class ControlEntry extends CI_Controller{
	public function goToMemberEntry(){
		$this->load->model('modelEntry');
		$result=$this->modelEntry->retriveMember();

		$data['mid']=$result;
		$this->load->view('admin/adminaction/entryrecord',$data);
	}

	public function newEntry(){
		$mid=$this->input->post('mid');
		$mname=$this->input->post('mname');
		$edate=$this->input->post('edate');
		$etime=$this->input->post('etime');

		$this->load->model('modelEntry');
		$this->modelEntry->saveEntry($mid,$mname,$edate,$etime);

		$this->session->set_flashData('entry','member enter in gym hall');
		redirect('ControlEntry/goToMemberEntry');
	}

	public function getLeftTimeOfNewEntry(){
		$mid=$this->input->post('leftmid');
		$ltime=$this->input->post('ltime');
		$ldate=$this->input->post('ldate');

		$this->load->model('modelEntry');
		$this->modelEntry->saveLeftTimeOfNewEntry($mid,$ltime,$ldate);

		$this->session->set_flashData('left','member left from gym hall');
		redirect('ControlEntry/goToMemberEntry');

	}
}

?>