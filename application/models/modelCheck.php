<?php
class ModelCheck extends CI_Model{
	public function forloginTrainer($uname,$pword){
	$this->db->where('uname',$uname);
	$this->db->where('pword',$pword);

	return $this->db->get('tbltrainer');

	}
	public function forloginAdmin($uname,$pword){
	$this->db->where('uname',$uname);
	$this->db->where('pword',$pword);

	return $this->db->get('tblregister');
	}

	public function isUnameAvailable($uname){
		$this->db->where('uname',$uname);
		$query=$this->db->get('tblregister');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}

	public function isMemberAvailable($mid){
		$this->db->where('id',$mid);
		$query=$this->db->get('tblregister');

		if($query->num_rows() >0){
			foreach ($query->result() as $row) {
				return $row->mname;
			}
			
		}else{
			return false;
		}
	}

		public function isCategoryAvailable($cat){
		$this->db->where('eqcat',$cat);
		return $this->db->get('tblexercise');

		// if($query->num_rows() >0){
		// 	foreach ($query->result() as $row) {
		// 		return $row->eqname;
		// 	}
			
		// }else{
		// 	return false;
		// }
	}

	public function retriveScheduleById($mid){

		$this->db->where('mid',$mid);
		return $this->db->get('tblschedule');
	}


}
?>