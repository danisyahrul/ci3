<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

 public function insertBlog()
 {
 	$object = array(
 		'judul' =>$this->input->post('judul'),
 		'isi_konten' =>$this->input->post('isi_konten'),
 		'id_kategori' =>$this->input->post('kategori'),
 		'thumbnail' => $this->upload->data('file_name')
 );
 	$this->db->insert('blog', $object);
 }

 public function getDataBlog()
	{
		$query = $this->db->get("blog");
		return $query->result_array();
	}
 public function readBlog($id)
	{
		$query = $this->db->where('id_blog', $id);
		$query = $this->db->get("blog");
		return $query->result_array();
	}
 public function updateById($id)
		{
			$data = array(
				'judul' => $this->input->post('judul'),
				'isi_konten' => $this->input->post('isi_konten'),
				'id_kategori' =>$this->input->post('kategori'),
			);
			$this->db->where('id_blog', $id);
			$this->db->update('blog', $data);
		}
 public function hapus($id) { 
         $query = $this->db->query("Delete from blog where id_blog=$id");
         }
 
}