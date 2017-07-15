<?php
class ControlPayment extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		// header('Expires: Thu, 01-Jan-70 00:00:01 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control:no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
	}
	
	public function goToMemberPayment(){

	$this->load->model('modelPayment');
		$result=$this->modelPayment->retriveMember();

		$data['mid']=$result;
		$this->load->view('admin/adminaction/payment',$data);

	}

	public function newPayment(){
		
		$mid=$this->input->post('mid');
		$mname=$this->input->post('mname');
		$pdate=$this->input->post('pdate');
		$repdate=$this->input->post('repdate');

		$this->load->model('modelPayment');
		$this->modelPayment->savePayment($mid,$mname,$pdate,$repdate);

		$this->session->set_flashData('payment','payment is done');
		redirect('ControlPayment/goToMemberPayment');
	

	}

	public function retrivePaymentMembers(){
		$date=$this->input->get('date');

		$this->load->model('modelPayment');
		$result=$this->modelPayment->retrivePaymentByDate($date);

		$data['paymentlist']=$result;
		$this->load->view('admin/paymentlist',$data);
	}

	public function getPayment(){
$this->load->model('modelPayment');
		$result=$this->modelPayment->retrivePayment();

		$data['paymentlist']=$result;
		$this->load->view('admin/paymentlist',$data);
	}

	public function removePayment(){
		$id=$this->input->get('id');
		$pdate=$this->input->get('pdate');
		$this->load->model('modelPayment');
		$this->modelPayment->deletePayment($id);

		$this->session->set_flashData('paymentdelete','delete sucessfull');
		redirect('controlWelcome/goToAdmin');
	}

	public function searchPaidMember(){
		$mname=$this->input->post('mname');
		$repdate=$this->input->post('repdate');

		$this->load->model('modelPayment');
		$result=$this->modelPayment->retrivePaidMember($mname,$repdate);

		$data['paymentlist']=$result;
		$this->load->view('admin/paymentlist',$data);
	}
}