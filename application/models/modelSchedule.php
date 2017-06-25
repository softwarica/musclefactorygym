<?php

class ModelSchedule extends CI_Model{
	public function retriveCategory(){
		return $this->db->get('tblexcategory');
	}

	public function retriveMember(){
		return $this->db->get('tblregister');
	}

	public function retriveMemberById($id){
		$this->db->where('id',$id);
	return $this->db->get('tblregister');
	}
}
?>