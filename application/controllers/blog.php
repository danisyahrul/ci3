<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('kategori_model');

	}

	// List all your items
	public function index()
	{
		
		$data['blog_list'] = $this->blog_model->getDataBlog();
		$this->load->view('navbar');
		$this->load->view('blog', $data);
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

	// Add a new item
	public function buat()
	{
		$this->hak_admin();

		$data['error'] = null;
		$data['kategori'] = $this->kategori_model->getDataKategori();
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('isi_konten', 'Isi Konten', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('navbar');
			$this->load->view('buat_blog', $data);
		} else {
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '10000';
			$config['max_width']  = '102400';
			$config['max_height']  = '76800';
			
			$this->load->library('upload', $config);
		
			if ( ! $this->upload->do_upload('userfile'))
			{
				$data['error'] = $this->upload->display_errors();
				$data['kategori'] = $this->kategori_model->getDataKategori();
				$this->load->view('navbar');
				$this->load->view('buat_blog', $data);
			}
			else{
				$this->blog_model->insertBlog();
				$this->load->view('navbar');
				$this->load->view('buat_blog_sukses');
			}
		}
		
	}

	public function baca($id)
	{
		
		$data['blog'] = $this->blog_model->readBlog($id);
		$this->load->view('navbar');
		$this->load->view('baca', $data);
	}	

	//Update one item
	public function edit($id)
	{
		$this->hak_admin();

		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('isi_konten', 'Isi Konten', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');


		$data['blog'] = $this->blog_model->readBlog($id);
		$data['kategori'] = $this->kategori_model->getDataKategori();

		if ($this->form_validation->run()==FALSE)
		{

			$this->load->view('edit_blog',$data);
		}
		else
		{
			$this->blog_model->updateById($id);
			$this->load->view('edit_blog_sukses');
		}
	}

	//Delete one item
	public function hapus($id)
	{
		$this->hak_admin();
		
		$this->blog_model->hapus($id);
		redirect('blog', 'refresh');
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 