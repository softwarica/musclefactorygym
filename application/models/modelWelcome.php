<?php
class ModelWelcome extends CI_Model{
		public function retriveClass(){
			return $this->db->get('tblclass');
		}

		public function retriveMember(){
  $result=$this->db->get("tblregister");
  return $result;
}

		

}
?>