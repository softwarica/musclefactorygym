<?php
class ModelDiet extends CI_Model{
	public function saveDiet($dname,$dcat,$dimage,$ddetails,$dvideo){
		$arr=array(
				'dname'=>$dname,
				'dcat'=>$dcat,
				'dimage'=>$dimage,
				'ddetails'=>$ddetails,
				'dvideo'=>$dvideo

				);
			$this->db->insert('tbldiet',$arr);
	}
	public function retriveDiet(){

			return $this->db->get('tbldiet');
		}

		public function retriveDietById($id){
			$this->db->where('id',$id);
			return $this->db->get('tbldiet');
		}

		public function deleteDiet($id){
			$this->db->where('id',$id);
			$this->db->delete('tbldiet');
		}

}

?>