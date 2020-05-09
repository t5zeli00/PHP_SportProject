<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Championships extends CI_Controller {
	public function show_championships(){ 
	//this method will show data from table on the screen
		$this->load->model('Championships_model'); 
		$data['championships']=$this->Championships_model->getChampionships();
		$data['page']='championships/show_championships';
		$this->load->view('menu/content',$data); 
	}

	public function add_championships() { 
	//this method will add data to table from the screen
		$this->load->model('Championships_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			//defining table fields
			$insert_data=array(				
				"namechamp"=>$this->input->post('cmp'),
				"year"=>$this->input->post('yr'),
				"id_sportsman"=>$this->input->post('idsp'),
				"id_team"=>$this->input->post('idtm'),
				"resultchamp"=>$this->input->post('resl')
				);
			$data['test']=$this->Championships_model->add_championships($insert_data);

		}
		$data['page']='championships/add_championships';
		$this->load->view('menu/content',$data);
	}

	public function delete_championships() { 
	//this method will delete data from table on the screen		
		$this->load->model('Championships_model');
		$data['championships']=$this->Championships_model->getChampionships();
		$data['page']='championships/delete_championships';
		$this->load->view('menu/content',$data);
	}

	public function remove_championships($chosen_id){
		//calling 'delete' function
		$this->load->model('Championships_model');
		$this->Championships_model->delete_championships($chosen_id);
		$this->show_championships();
	}

	public function update_championships() {
		$this->load->model('Championships_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			//defining updating fields
			$id_champ=$this->input->post('idcm');
			$a_namechampe=$this->input->post('cmp');
			$a_year=$this->input->post('yr');
			$a_id_sportsman=$this->input->post('idsp')	;
			$a_id_team=$this->input->post('idtm');
			$a_resultchamp=$this->input->post('resl')	;			
			//calculate rows
			$rows=0;
			foreach ($id_champ as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(					
					"namechamp"=>$a_namechampe[$x],
					"year"=>$a_year[$x],
					"id_sportsman"=>$a_id_sportsman[$x],
					"id_team"=>$a_id_team[$x],
					"resultchamp"=>$a_resultchamp[$x]					
					);
				$this->Championships_model->update_championships($update_data,$id_champ[$x]);
			}
		
		}
		
		$data['championships']=$this->Championships_model->getChampionships();
		$data['page']='championships/update_championships';
		$this->load->view('menu/content',$data);
	}
}