<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index($id)
	{
		$this->load->helper('url','form');
		$this->load->model('pegawai_model');
		$data['pendidikan_list'] = $this->pegawai_model->getPendidikanPegawai($id);
		$this->load->view('pendidikan', $data);
	}

	// Add a new item
	public function create($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('pegawai_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('lulus', 'Lulus', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('tambah_pendidikan_view');
		} else {
			$this->pegawai_model->insertPendidikan($id);
			$this->load->view('tambah_pendidikan_sukses');
	}
}
	//Update one item
	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('lulus', 'Lulus', 'trim|required');
		$this->load->model('pegawai_model');
		$data['pendidikan'] = $this->pegawai_model->getPendidikan($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_pendidikan_view',$data);
		}
		else
		{
			$this->pegawai_model->updateById2($id);
			$this->load->view('edit_pendidikan_sukses');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("pegawai_model");
		$this->pegawai_model->delete2($id);
		redirect('pegawai');
	}
}

/* End of file Pendidikan.php */
/* Location: ./application/controllers/Pendidikan.php */
