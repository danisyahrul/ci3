<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Home extends CI_Controller {
 
 	
 	public function index()
 	{
 		$this->load->model('biodata');
 		$data['biodata_array'] = $this->biodata->getBiodataQueryArray();
 		$data['biodata_object'] = $this->biodata->getBiodataQueryObject();

 		$data['biodata_builder_array'] = $this->biodata->getBiodataBuilderArray();
 		$data['biodata_builder_object'] = $this->biodata->getBiodataBuilderObject();

 		
 		$data['nama'] = "Dani Syahrul A";
		$this->load->view('home', $data);
 	}

 	public function pegawai()
 	{
 		redirect(base_url().'pegawai/1');
 		
 	}
 }
 
 /* End of file About.php */
 /* Location: ./application/controllers/About.php */ 
 ?>