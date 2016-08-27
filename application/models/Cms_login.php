<?php 

class Cms_login extends CI_Model{	


	function cek_login($where){		
	
		$table = 'user';
		return $this->db->get_where($table,$where)->num_rows();
	}	
	
	function get_menu(){
		$query = $this->db->query("SELECT * FROM cms_menu where status='1';");
		return $query->result();
	}
	
	function get_article(){
		$query = $this->db->query("SELECT * FROM article where status='1';");
		return $query->result();
	}
}

