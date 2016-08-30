<?php 

class Model_web extends CI_Model{	

	var $table = 'article';

	
	function Get_banner(){		
		$query = $this->db
					-> select('id')
					-> select('image')
					-> select('title')
					-> select('body')
					-> limit(4)
					-> where('status','1')
					-> order_by('id','desc')
					-> get($this->table);
		return $query->result();
	}

	function Get_article(){		
		$query = $this->db
					-> select('id')
					-> select('title')
					-> select('image')
					-> select('body')
					-> where('status','1')
					-> order_by('id','desc')
					-> get($this->table);
		return $query->result();
	}
	
	function Get_article_id($id){
		//print_r ($id);die;
		$array = array('id' => $id, 'status' => '1');
		$query = $this->db
					-> select('title')
					-> select('body')
					-> select('status')
					-> where ($array)
					-> get($this->table);	
		return $query->result();
	}
	
}

