<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');

		$this->hak_admin();
	}

	public function hak_admin() {
		if($this->session->has_userdata('logged_in')) {
			if($this->session->userdata('level') != 0) {
				redirect('blog/index');
			}
		} else {
		    redirect('login/index');
		}
	}

	// List all your items
	public function index()
	{
		
		$data['kategori_list'] = $this->kategori_model->getDataKategori();
		$this->load->view('navbar');
		$this->load->view('kategori', $data);
	}

	// Add a new item
	public function buat()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('navbar');
			$this->load->view('buat_kategori');
		} else {
			
			$this->kategori_model->insertKategori();
			$this->load->view('navbar');
			$this->load->view('buat_kategori_sukses');
		}
		
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
		
		$data['kategori'] = $this->kategori_model->readKategori($id);

		if ($this->form_validation->run()==FALSE)
		{

			$this->load->view('edit_kategori',$data);
		}
		else
		{
			$this->kategori_model->updateById($id);
			$this->load->view('edit_kategori_sukses');
		}
	}

	//Delete one item
	public function hapus($id)
	{
		$this->kategori_model->hapus($id);
		redirect('kategori', 'refresh');
	}

}
