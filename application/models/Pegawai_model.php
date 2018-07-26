<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

 public function insertPegawai()
 {
 	$tanggal            = $this->input->post('tanggalLahir');
 	$convert            = date('Y-m-d', strtotime($tanggal));
 	$object = array(
 		'namaPegawai' =>$this->input->post('nama'),
 		'alamatPegawai' =>$this->input->post('alamat'),
 		'tanggalLahirPegawai' => $convert,
 		'foto' => $this->upload->data('file_name')
 );
 	$this->db->insert('pegawai', $object);
 }

public function getDataPegawai()
	{
		$query = $this->db->get("pegawai");
		return $query->result_array();
	}
public function getPegawai($id)
		{
			$this->db->where('idpegawai', $id);
			$query = $this->db->get('pegawai');
			return $query->result();
		}
public function getPendidikan($id)
		{
			$this->db->where('idpendidikan', $id);
			$query = $this->db->get('pendidikan');
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'namaPegawai' => $this->input->post('namaPegawai'),
				'tanggalLahirPegawai' => $this->input->post('tanggalLahir'),
				'alamatPegawai' => $this->input->post('alamatPegawai'),
			);
			$this->db->where('idpegawai', $id);
			$this->db->update('pegawai', $data);
		}
		public function updateById2($id)
		{
			$data = array(
 		'namaSekolah' =>$this->input->post('nama'),
 		'tahunLulus' =>$this->input->post('lulus'),
			);
			$this->db->where('idpendidikan', $id);
			$this->db->update('pendidikan', $data);
		}
		public function delete($id) { 
         $query = $this->db->query("Delete from pegawai where idpegawai=$id");
         } 

         public function delete2($id) { 
 $query = $this->db->query("Delete from pendidikan where idpendidikan=$id");
         } 
     


       public function insertPendidikan($id)
 {
 	$object = array(
 		'namaSekolah' =>$this->input->post('nama'),
 		'tahunLulus' =>$this->input->post('lulus'),
 		'fk_pegawai' =>$id
 );
 	$this->db->insert('pendidikan', $object);
 }
public function getPendidikanPegawai($id)
	{
			$query = $this->db->query("select * from pendidikan where fk_pegawai='$id'");
			return $query->result_array();
	}

}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */
