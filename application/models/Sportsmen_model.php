<?php
Class Sportsmen_model extends CI_model {
	public function getSportsmen(){
		//getting data from selected fileds of selected table of the database
		$this->db->select('id_sportsman, sname, dateofbirth, id_team');
		$this->db->from('Sportsmen');
		return $this->db->get()->result_array();
	}

	public function add_sportsmen($insert_data){
		//adding data in selected fileds of selected table of the database
		$this->db->insert('sportsmen',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function delete_sportsmen($chosen_id) {
		//delete data in selected fileds of selected table of the database
		$this->db->where('id_sportsman',$chosen_id);
		$this->db->delete('sportsmen');
	}

	public function update_sportsmen($update_data,$id_sportsman){
		//updating data in selected fileds of selected table of the database
		$this->db->where('id_sportsman',$id_sportsman);
		$this->db->update('sportsmen',$update_data);

	}
}