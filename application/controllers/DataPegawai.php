<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawai extends CI_Controller {

	public function index()
	{
		$this->load->model('Biodata');
		$where = array(
			'idpegawai' => $this->uri->segment(3)
		);
		$where2 = array(
			'fk_pegawai' => $this->uri->segment(3)
		);
		$data['pegawai'] = $this->Biodata->cek('pegawai','*',$where)->row_array();
		$data['lulusanPegawai'] = $this->Biodata->cek_order('pendidikan','*',$where2,'tahunLulus','desc');
		$this->load->view('dataPegawai', $data);
	}

}

/* End of file Biodata.php */
/* Location: ./application/controllers/Biodata.php */
?>