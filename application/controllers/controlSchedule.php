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

	public function newSchedule(){
		$mid=$this->input->post('mid');
		$mname=$this->input->post('mname');
		$esdate=$this->input->post('esdate');
		$eedate=$this->input->post('eedate');
		$day=$this->input->post('day');
		$cat1=$this->input->post('cat1');
		$ename1cat1=$this->input->post('ename1cat1');
		$ename2cat1=$this->input->post('ename2cat1');
		$ename3cat1=$this->input->post('ename3cat1');
		$ename4cat1=$this->input->post('ename4cat1');
		$ename5cat1=$this->input->post('ename5cat1');
		$ename6cat1=$this->input->post('ename6cat1');
		$cat2=$this->input->post('cat2');
		$ename1cat2=$this->input->post('ename1cat2');
		$ename2cat2=$this->input->post('ename2cat2');
		$ename3cat2=$this->input->post('ename3cat2');
		$ename4cat2=$this->input->post('ename4cat2');
		$ename5cat2=$this->input->post('ename5cat2');
		$ename6cat2=$this->input->post('ename6cat2');
		$cat3=$this->input->post('cat3');
		$ename1cat3=$this->input->post('ename1cat3');
		$ename2cat3=$this->input->post('ename2cat3');
		$ename3cat3=$this->input->post('ename3cat3');
		$ename4cat3=$this->input->post('ename4cat3');
		$ename5cat3=$this->input->post('ename5cat3');
		$ename6cat3=$this->input->post('ename6cat3');
		$cat4=$this->input->post('cat4');
		$ename1cat4=$this->input->post('ename1cat4');
		$ename2cat4=$this->input->post('ename2cat4');
		$ename3cat4=$this->input->post('ename3cat4');
		$ename4cat4=$this->input->post('ename4cat4');
		$ename5cat4=$this->input->post('ename5cat4');
		$ename6cat4=$this->input->post('ename6cat4');
			$cat5=$this->input->post('cat5');
		$ename1cat5=$this->input->post('ename1cat5');
		$ename2cat5=$this->input->post('ename2cat5');
		$ename3cat5=$this->input->post('ename3cat5');
		$ename4cat5=$this->input->post('ename4cat5');
		$ename5cat5=$this->input->post('ename5cat5');
		$ename6cat5=$this->input->post('ename6cat5');
			$cat6=$this->input->post('cat6');
		$ename1cat6=$this->input->post('ename1cat6');
		$ename2cat6=$this->input->post('ename2cat6');
		$ename3cat6=$this->input->post('ename3cat6');
		$ename4cat6=$this->input->post('ename4cat6');
		$ename5cat6=$this->input->post('ename5cat6');
		$ename6cat6=$this->input->post('ename6cat6');

		$this->load->model('modelSchedule');
		$this->modelSchedule->saveSchedule($mid,$mname,$esdate,$eedate,$day,
			$cat1,$ename1cat1,$ename2cat1,$ename3cat1,$ename4cat1,$ename5cat1,$ename6cat1,
			$cat2,$ename1cat2,$ename2cat2,$ename3cat2,$ename4cat2,$ename5cat2,$ename6cat2,
			$cat3,$ename1cat3,$ename2cat3,$ename3cat3,$ename4cat3,$ename5cat3,$ename6cat3,
			$cat4,$ename1cat4,$ename2cat4,$ename3cat4,$ename4cat4,$ename5cat4,$ename6cat4,
			$cat5,$ename1cat5,$ename2cat5,$ename3cat5,$ename4cat5,$ename5cat5,$ename6cat5,
			$cat6,$ename1cat6,$ename2cat6,$ename3cat6,$ename4cat6,$ename5cat6,$ename6cat6
			);

		$this->session->set_flashData('schinsert','data sucessfully insert into schedule table');
		redirect('controlSchedule/goToSchedule');
		


	}

	public function getScheduleList(){
		$this->load->model('modelSchedule');
		$result=$this->modelSchedule->retriveSchedule();
		$data['schedulelist']=$result;
		$this->load->view('trainer/trainerheaderlist/schedulelist',$data);


	}

	public function editSchedule(){
	$mid=11;
		$this->load->model('modelSchedule');
		$result=$this->modelSchedule->retriveScheduleByMid($mid);
		$resultcat=$this->modelSchedule->retriveCategory();
		$data['cat']=$resultcat;

		$data['retriveSchByMid']=$result;
		$this->load->view('trainer/trainerupdate/trainereditschedule',$data);


	}

}


?>