<?php
class ControlSchedule extends CI_COntroller{
	public function goToSchedule(){
		$this->load->model('modelSchedule');
		$resultcat=$this->modelSchedule->retriveCategory();
		$resultmember=$this->modelSchedule->retriveMember();

		$data['mid']=$resultmember;
		$data['cat']=$resultcat;

		$this->load->view('trainer/traineraction/trainerschedule',$data);
	}
}


?>