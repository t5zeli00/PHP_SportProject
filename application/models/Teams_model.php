<?php
Class Teams_model extends CI_model {
	public function getTeams(){
		//getting data from selected fileds of selected table of the database
		$this->db->select('id_team, nameteams, country, sport, coachname');
		$this->db->from('Teams');
		return $this->db->get()->result_array();
	}

	public function add_teams($insert_data){
		//adding data in selected fileds of selected table of the database
		$this->db->insert('teams',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function delete_teams($chosen_id) {
		//delete data in selected fileds of selected table of the database
		$this->db->where('id_team',$chosen_id);
		$this->db->delete('teams');
	}

	public function update_teams($update_data,$id_team){
		//updating data in selected fileds of selected table of the database
		$this->db->where('id_team',$id_team);
		$this->db->update('teams',$update_data);

	}
}