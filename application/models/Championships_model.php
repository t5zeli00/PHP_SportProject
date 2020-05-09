<?php
Class Championships_model extends CI_model {
	public function getChampionships(){
		//getting data from selected fileds of selected table of the database
		$this->db->select('id_champ, namechamp, year, id_sportsman, id_team, resultchamp');
		$this->db->from('Championships');
		return $this->db->get()->result_array();
	}

	public function add_championships($insert_data){
		//adding data in selected fileds of selected table of the database
		$this->db->insert('championships',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function delete_championships($chosen_id) {
		//delete data in selected fileds of selected table of the database
		$this->db->where('id_champ',$chosen_id);
		$this->db->delete('championships');
	}

	public function update_championships($update_data,$id_champ){
		//updating data in selected fileds of selected table of the database
		$this->db->where('id_champ',$id_champ);
		$this->db->update('championships',$update_data);

	}
}