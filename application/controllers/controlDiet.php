<?php
class ControlDiet extends CI_Controller{
	public function newDiet(){
		$dname=$this->input->post('dname');
			$dcat=$this->input->post('dcat');
			$ddetails=$this->input->post('ddetails');
//for image
				$config['upload_path']="assets/images/diets";
				$config['allowed_types']  = 'gif|jpg|png|mp4';
				$config['max-width']="100";
				$config['max-height']="100";

				$this->load->library('upload',$config);
				$this->upload->do_upload('dimage');
				$data=array('upload_data'=>$this->upload->data());

			$dimage=$data['upload_data']['file_name'];
// ..................
//for video
		// 	$configvideo['upload_path']="assets/videos";
		// $configvideo['allowed_types']  = 'mp4';
		

		$this->load->library('upload',$config);
		//$this->upload->do_upload('video');


		 if ( ! $this->upload->do_upload('dvideo'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$datavideo=array('upload_data'=>$this->upload->data());

	$dvideo=$datavideo['upload_data']['file_name'];
// .......................

			$this->load->model('modelDiet');
			$this->modelDiet->saveDiet($dname,$dcat,$dimage,$ddetails,$dvideo);

			// $data['eqinsertmsg']='data sucessfully insert into table equipment';
			// $this->load->view('admin/adminPage',$data);
		
			$this->session->set_flashdata('dietinsertmsg','data sucessfully insert into table diet');
			redirect('controlWelcome/goToTrainerDietRegistration');
			}
				public function getDietList(){
			
				$this->load->model('modelDiet');
				$result=$this->modelDiet->retriveDiet();

				$data['dietlist']=$result;
				$this->load->view('trainer/trainerheaderlist/dietlist',$data);
		}

		public function removeDiet(){
			$id=$this->input->get('id');

			$this->load->model('modelDiet');
			
			$result=$this->modelDiet->retriveDietById($id);
				if($result->num_rows() > 0){
					foreach($result->result() as $row){
				$imagename=$row->dimage;
				$videoname=$row->dvideo;
				
				
				$imagepath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/diets/'.$imagename;
				unlink($imagepath);
				$videopath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/diets/'.$videoname;
				unlink($videopath);
			
		}
	}
	$this->modelDiet->deletediet($id);
	
		$this->session->set_flashdata('dietdeletemsg','data sucessfully delete from table diet');
			redirect('controlWelcome/goToTrainer');

		}




		public function editDiet(){
			$id=$this->input->get('id');
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveExerciseById($id);
			$resultcat=$this->modelExercise->retriveCategory();

			$data['retriveexerciselist']=$result;
			$data['eqclass']=$resultcat;
			$this->load->view('admin/adminupdate/editexercise',$data);
}
}

?>