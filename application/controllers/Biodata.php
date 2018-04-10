<?php
class Biodata extends CI_Controller{
	public function	index(){
		$this->load->model('Bio');
		$data['biodata'] = $this->Bio->getBiodataQueryObject();
		$this->load->view('biodata',$data);
	}
}
?>