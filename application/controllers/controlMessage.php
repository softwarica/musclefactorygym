<?php
class ControlMessage extends CI_Controller{
	// public function newMessage(){
	// 	$msg=$this->input->post('msg');

	// 	$this->load->model('modelMessage');
	// 	$this->modelMessage->saveMessage($msg);

	// 	$this->session->set_flashData('feedbackmsg','your feedback sucessfully insert');
	// 	redirect('controlWelcome/index');
	// }
public function sendMessage(){
	$config=array(
		'protocol'=>'smtp',
		'smtp_host'=>'ssl://smtp.googlemail.com',
		'smtp-post'=>465,
		'smtp_user'=>'sharan.softwarica@gmail.com',
		'smtp_pass'=>'.*150212#.',
		'mailtype'=>'html',
		'wordwrap'=>TRUE,
		'charset'=>'utf-8'
		);
	$this->load->library('email',$config);
	$this->email->from('sharan.softwarica@gmail.com','admin');
	$this->email->to('hsharanstha123@gmail.com');
	$this->email->subject('email test');
	$this->email->message('testing the email class');
	$this->email->set_newline('\r\n');

	$result=$this->email->send();
	$this->email->print_debugger();
}
}

?>