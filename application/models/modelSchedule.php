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

	public function saveSchedule($mid,$mname,$esdate,$eedate,$day,
			$cat1,$ename1cat1,$ename2cat1,$ename3cat1,$ename4cat1,$ename5cat1,$ename6cat1,
			$cat2,$ename1cat2,$ename2cat2,$ename3cat2,$ename4cat2,$ename5cat2,$ename6cat2,
			$cat3,$ename1cat3,$ename2cat3,$ename3cat3,$ename4cat3,$ename5cat3,$ename6cat3,
			$cat4,$ename1cat4,$ename2cat4,$ename3cat4,$ename4cat4,$ename5cat4,$ename6cat4,
			$cat5,$ename1cat5,$ename2cat5,$ename3cat5,$ename4cat5,$ename5cat5,$ename6cat5,
			$cat6,$ename1cat6,$ename2cat6,$ename3cat6,$ename4cat6,$ename5cat6,$ename6cat6){
				$arr=array(
					'mid'=>$mid,
					'mname'=>$mname,
					'esdate'=>$esdate,
					'eedate'=>$eedate,
					'day'=>$day,
					'cat1'=>$cat1,
					'ename1cat1'=>$ename1cat1,
					'ename2cat1'=>$ename2cat1,
					'ename3cat1'=>$ename3cat1,
					'ename4cat1'=>$ename4cat1,
					'ename5cat1'=>$ename5cat1,
					'ename6cat1'=>$ename6cat1,
					'cat2'=>$cat2,
					'ename1cat2'=>$ename1cat2,
					'ename2cat2'=>$ename2cat2,
					'ename3cat2'=>$ename3cat2,
					'ename4cat2'=>$ename4cat2,
					'ename5cat2'=>$ename5cat2,
					'ename6cat2'=>$ename6cat2,
					'cat3'=>$cat3,
					'ename1cat3'=>$ename1cat3,
					'ename2cat3'=>$ename2cat3,
					'ename3cat3'=>$ename3cat3,
					'ename4cat3'=>$ename4cat3,
					'ename5cat3'=>$ename5cat3,
					'ename6cat3'=>$ename6cat3,
					'cat4'=>$cat4,
					'ename1cat4'=>$ename1cat4,
					'ename2cat4'=>$ename2cat4,
					'ename3cat4'=>$ename3cat4,
					'ename4cat4'=>$ename4cat4,
					'ename5cat4'=>$ename5cat4,
					'ename6cat4'=>$ename6cat4,
					'cat5'=>$cat5,
					'ename1cat5'=>$ename1cat5,
					'ename2cat5'=>$ename2cat5,
					'ename3cat5'=>$ename3cat5,
					'ename4cat5'=>$ename4cat5,
					'ename5cat5'=>$ename5cat5,
					'ename6cat5'=>$ename6cat5,
					'cat6'=>$cat6,
					'ename1cat6'=>$ename1cat6,
					'ename2cat6'=>$ename2cat6,
					'ename3cat6'=>$ename3cat6,
					'ename4cat6'=>$ename4cat6,
					'ename5cat6'=>$ename5cat6,
					'ename6cat6'=>$ename6cat6,

					);


					$this->db->insert('tblschedule',$arr);
	}

	public function retriveSchedule(){
		return $this->db->get('tblschedule');
	}

	public function retriveScheduleByMid($mid){
		$this->db->where('mid',$mid);
		return $this->db->get('tblschedule');
	}

}
?>