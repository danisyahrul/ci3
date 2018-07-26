<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

 public function insertKategori()
 {
 	$object = array(
 		'nama_kategori' =>$this->input->post('nama_kategori'),
 );
 	$this->db->insert('kategori', $object);
 }

 public function getDataKategori()
	{
		$query = $this->db->get("Kategori");
		return $query->result_array();
	}
 public function readKategori($id)
	{
		$query = $this->db->where('id_kategori', $id);
		$query = $this->db->get("kategori");
		return $query->result_array();
	}
 public function updateById($id)
		{
			$data = array(
				'nama_kategori' => $this->input->post('nama_kategori'),
			);
			$this->db->where('id_kategori', $id);
			$this->db->update('kategori', $data);
		}
 public function hapus($id) { 
         $query = $this->db->query("Delete from kategori where id_kategori=$id");
         }
 
}