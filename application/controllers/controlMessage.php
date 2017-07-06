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
	// $config=array(
	// 	'protocol'=>'smtp',
	// 	'smtp_host'=>'ssl://smtp.googlemail.com',
	// 	'smtp-post'=>465,
	// 	'smtp_user'=>'sharan.softwarica@gmail.com',
	// 	'smtp_pass'=>'.*150212#.',
	// 	'mailtype'=>'html',
	// 	'wordwrap'=>TRUE,
	// 	'charset'=>'utf-8'
	// 	);
	// $this->load->library('email',$config);
	// $this->email->from('sharan.softwarica@gmail.com','admin');
	// $this->email->to('hsharanstha123@gmail.com');
	// $this->email->subject('email test');
	// $this->email->message('testing the email class');
	// $this->email->set_newline('\r\n');

	// $result=$this->email->send();
	// $this->email->print_debugger();
	  $config = array();
                $config['useragent']           = "CodeIgniter";
                $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
                $config['protocol']            = "starttls";
                $config['smtp_host']           = "ssl://smtp.googlemail.com";
                $config['smtp_port']           = "587";
                $config['mailtype'] = 'html';
                $config['charset']  = 'utf-8';
                $config['newline']  = "\r\n";
                $config['wordwrap'] = TRUE;

                $this->load->library('email');

                $this->email->initialize($config);

                $this->email->from('sharan.softwarica@gmail.com', 'admin');
                $this->email->to('hsharanstha123@gmail.com');
                // $this->email->cc('xxx@gmail.com'); 
                $this->email->bcc($this->input->post('email')); 
                $this->email->subject('Registration Verification: Continuous Imapression');
                $msg = "Thanks for signing up!
            Your account has been created, 
            ";

            $this->email->message($msg);   
            //$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));

            $this->email->send();
           
}
}

?>