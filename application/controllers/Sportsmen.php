<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sportsmen extends CI_Controller {
	public function show_sportsmen(){ 
	//this method will show data from table on the screen
		$this->load->model('Sportsmen_model');
		$data['sportsmen']=$this->Sportsmen_model->getSportsmen();
		$data['page']='sportsmen/show_sportsmen';
		$this->load->view('menu/content',$data);
	}

	public function add_sportsmen() { 
	//this method will add data to table from the screen
		$this->load->model('Sportsmen_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			//defining table fields
			$insert_data=array(				
				"sname"=>$this->input->post('sn'),
				"dateofbirth"=>$this->input->post('bd'),
				"id_team"=>$this->input->post('tm')
				);
			$data['test']=$this->Sportsmen_model->add_sportsmen($insert_data);

		}
		$data['page']='sportsmen/add_sportsmen';
		$this->load->view('menu/content',$data);
	}

	public function delete_sportsmen() { 
	//this method will delete data from table on the screen		
		$this->load->model('Sportsmen_model');
		$data['sportsmen']=$this->Sportsmen_model->getSportsmen();
		$data['page']='sportsmen/delete_sportsmen';
		$this->load->view('menu/content',$data);
	}

	public function remove_sportsmen($chosen_id){
		//calling 'delete' function
		$this->load->model('Sportsmen_model');
		$this->Sportsmen_model->delete_sportsmen($chosen_id);
		$this->show_sportsmen();
	}

	public function update_sportsmen() {
		$this->load->model('Sportsmen_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			//defining updating fields
			$id_sportsman=$this->input->post('id');
			$a_sname=$this->input->post('sn');
			$a_dateofbirth=$this->input->post('bd');
			$a_id_team=$this->input->post('tm')	;		
			//calculate rows
			$rows=0;
			foreach ($id_sportsman as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(					
					"sname"=>$a_sname[$x],
					"dateofbirth"=>$a_dateofbirth[$x],
					"id_team"=>$a_id_team[$x]					
					);
				$this->Sportsmen_model->update_sportsmen($update_data,$id_sportsman[$x]);
			}
		
		}
		
		$data['sportsmen']=$this->Sportsmen_model->getSportsmen();
		$data['page']='sportsmen/update_sportsmen';
		$this->load->view('menu/content',$data);
	}
}