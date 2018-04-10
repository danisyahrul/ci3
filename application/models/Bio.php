<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bio extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}
	//semua method digunakan untuk proses yang berhubungan dengan databse
	public function getBiodataQueryArray()
	{
		$query = $this->db->get('biodata');
		return $query;
	}

	public function getBiodataQueryObject()
	{
		$query = $this->db->query('Select * from biodata');
		return $query;
	}

	public function getBiodataBuilderArray()
	{
		$query = $this->db->get('biodata');
		return $query->result_array();
	}

	public function getBiodataBuilderObject()
	{
		$query = $this->db->get('biodata');
		return $query->result();
	}

}

/* End of file Biodata.php */
/* Location: ./application/models/Biodata.php */

?>