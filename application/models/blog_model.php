<?php
class Blog_model extends CI_Model {


	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	function read_data($id)
	{
		$query = $this->db->get_where('posts', array('id' => $id), $limit=1);
		return $query->result();

	}


}