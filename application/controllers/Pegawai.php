<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('pegawai_model');
		$data['pegawai_list'] = $this->pegawai_model->getDataPegawai();
		$this->load->view('pegawai', $data);
	}

	// Add a new item
	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('pegawai_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'TanggalLahir', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('tambah_pegawai_view');
		} else {
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '10000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_pegawai_view', $error);
			}
			else{
			$this->pegawai_model->insertPegawai();
			$this->load->view('tambah_pegawai_sukses');
			}
		}
		
	}

	//Update one item
	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaPegawai', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamatPegawai', 'ALamat', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'Tgl Lahir', 'trim|required');

		$this->load->model('pegawai_model');
		$data['pegawai'] = $this->pegawai_model->getPegawai($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_pegawai_view',$data);
		}
		else
		{
			$this->pegawai_model->updateById($id);
			$this->load->view('edit_pegawai_sukses');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("pegawai_model");
		$this->pegawai_model->delete($id);
		redirect('pegawai');
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 