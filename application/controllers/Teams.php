<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Controller {
	public function show_teams(){ 
	//this method will show data from table on the screen
		$this->load->model('Teams_model');
		$data['teams']=$this->Teams_model->getTeams();
		$data['page']='teams/show_teams';
		$this->load->view('menu/content',$data);
	}

	public function add_teams() {
	//this method will add data to table from the screen
		$this->load->model('Teams_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$insert_data=array(		
			//defining table fields		
				"nameteams"=>$this->input->post('tn'),
				"country"=>$this->input->post('cn'),
				"sport"=>$this->input->post('spt'),
				"coachname"=>$this->input->post('chn')				
				);
			$data['test']=$this->Teams_model->add_teams($insert_data);

		}
		$data['page']='teams/add_teams';
		$this->load->view('menu/content',$data);
	}

	public function delete_teams() { 
	//this function will delete data from table on the screen		
		$this->load->model('Teams_model');
		$data['teams']=$this->Teams_model->getTeams();
		$data['page']='teams/delete_teams';
		$this->load->view('menu/content',$data);
	}

	public function remove_teams($chosen_id){
		//calling 'delete' function
		$this->load->model('Teams_model');
		$this->Teams_model->delete_teams($chosen_id);
		$this->show_teams();
	}

	public function update_teams() {
		$this->load->model('Teams_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			//defining updating fields
			$id_team=$this->input->post('idtm');
			$a_nameteams=$this->input->post('tn');
			$a_country=$this->input->post('cn');
			$a_sport=$this->input->post('spt');
			$a_coachname=$this->input->post('chn');
					
			//calculate rows
			$rows=0;
			foreach ($id_team as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(					
					"nameteams"=>$a_nameteams[$x],
					"country"=>$a_country[$x],
					"sport"=>$a_sport[$x],
					"coachname"=>$a_coachname[$x]									
					);
				$this->Teams_model->update_teams($update_data,$id_team[$x]);
			}
		
		}
		
		$data['teams']=$this->Teams_model->getTeams();
		$data['page']='teams/update_teams';
		$this->load->view('menu/content',$data);
	}
}