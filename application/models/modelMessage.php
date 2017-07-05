<?php
class ControlMessage extends CI_Model{
	public function saveMessage($msg){
		$arr=array(
		'msg'=>$msg
			);
		$this->db->insert('tblmessage',$msg);
	}
}
?>