<?php
class ControlVideo extends CI_controller{
 public function newVideo(){

 	$vname=$this->input->post('vname');
 	$vcat=$this->input->post('vcat');
//for uploading video

 	/*
 for uploading video firstly.open xampp 
 goto apache server config and open (php.ini)
 	change on post_max_size=250M;
	change on upload_max_filesize=250M;

 	*/
 		$config['upload_path']="assets/videos";
		$config['allowed_types']  = 'mp4';
		

		$this->load->library('upload',$config);
		//$this->upload->do_upload('video');


		 if ( ! $this->upload->do_upload('video'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$data=array('upload_data'=>$this->upload->data());

	$video=$data['upload_data']['file_name'];
	

	$this->load->model('modelVideo');
	$this->modelVideo->saveVideo($vname,$vcat,$video);

	$this->session->set_flashdata('vdoinsertmsg','data sucessfully insert in video table');
	redirect('controlVideo/getCategory');




 }
			 public function getCategory(){
				$this->load->model('modelVideo');
				$result=$this->modelVideo->retriveCategory();

				$data['vdclass']=$result;
				$this->load->view('admin/adminaction/adminvideos',$data);

				}

				public function getVideo(){
					$this->load->model('modelVideo');
					$result=$this->modelVideo->retriveVideo();

					$data['exvideos']=$result;
					$this->load->view('videos',$data);
				}

		
		public function editVideo(){
	if(isset($_POST['btnsubmitvideo'])){

	$config['upload_path']="assets/images/exercises";
		$config['allowed_types']  = 'mp4';
	

		$this->load->library('upload',$config);
		 if ( ! $this->upload->do_upload('video'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }
		// $this->upload->do_upload('video');
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->model('modelVideo');
		
// for delete of image
	$id=$this->input->post('id');
						$result=$this->modelVideo->retriveVideoById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->eqvideo;

				// 		$path='C:/xampp/htdocs/muscleFactory/assets/images/exercises/'.$filename;
				// unlink($path);
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/exercises/'.$filename;
				unlink($path);	
			

			
		}
	}
// ............................

	$video=$data['upload_data']['file_name'];

	
	$this->modelVideo->updateVideo($id,$video);

	// $result=$this->modelAdmin->retriveMemberById($id);
	$this->session->set_flashData('video_update','video sucessfully update');
	if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToTrainer');
}else{
	redirect('controlAdmin/index');}


	// $data['image_update']='image sucessfull update';
	// $this->load->view('admin/adminPage',$data);
}else if (isset($_POST['btnsubmitvideodetail'])){

	$config['upload_path']="assets/videos";
		$config['allowed_types']  = 'mp4';
	

		$this->load->library('upload',$config);
		 if ( ! $this->upload->do_upload('video'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }
		// $this->upload->do_upload('video');
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->model('modelVideo');
		
// for delete of image
	$id=$this->input->post('id');
						$result=$this->modelVideo->retriveTblVideoById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->video;

				// 		$path='C:/xampp/htdocs/muscleFactory/assets/videos/'.$filename;
				// unlink($path);
			$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/videos/'.$filename;
				unlink($path);	

			
		}
	}
// ............................

	$video=$data['upload_data']['file_name'];

	
	$this->modelVideo->updateTblVideo($id,$video);

	// $result=$this->modelAdmin->retriveMemberById($id);
	$this->session->set_flashData('video_update','video sucessfully update');
	redirect('controlAdmin/index');

	// $data['image_update']='image sucessfull update';
	// $this->load->view('admin/adminPage',$data);
}
}
		
		public function getChestVideo(){
			$id=$this->input->get('id');
			
			$this->load->model('modelVideo');
			$result=$this->modelVideo->retriveChestVideo($id);

			$data['exvideos']=$result;
			

			$this->load->view('exerciseVideo',$data);
		}

		public function getVideoList(){
			$this->load->model('modelVideo');
			$result=$this->modelVideo->retriveVideo();

			$data['videolist']=$result;
			$this->load->view('admin/adminheaderlist/videolist',$data);
		}

		public function removeVideo(){
				$id=$this->input->get('id');
	$this->load->model('modelVideo');
	$this->modelVideo->deleteVideo($id);

		$this->session->set_flashdata('delvdomsg','video sucessfully delete from table video');
			redirect('controlAdmin/index');
		}

		public function editVideoDetails(){

		$id=$this->input->get('id');
			$this->load->model('modelVideo');
			$result=$this->modelVideo->retriveTblVideoById($id);
			$resultcat=$this->modelVideo->retriveCategory();

			$data['retrivevideolist']=$result;
			$data['vclass']=$resultcat;
			$this->load->view('admin/adminupdate/editVideoDetails',$data);
	
}


public function updateEditedVideoDEtails(){
	$id=$this->input->post('id');
	$vname=$this->input->post('vname');
	$vcat=$this->input->post('vcat');

	$this->load->model('modelVideo');
	$this->modelVideo->updateVideoDetails($id,$vname,$vcat);

	$this->session->set_flashData('video_dtl_update','video details sucessfully update');
	redirect('controlAdmin/index');
}

}

?>