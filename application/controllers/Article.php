<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cms_article','article');
		$this->load->library('upload');
		
		
		// Handling the Method of Request AJAX
		$ajaxMethod	 	= array('post','get');
		$allowedOrigins = array('localhost/olrange');
		$allowMethods = $ajaxMethod;
		if (!in_array(strtolower($_SERVER['REQUEST_METHOD']),$allowMethods) ) { 
			header("Content-Type: application/json; charset=UTF-8");
			die(json_encode(array('status'=>302,'message'=>'Method '.$_SERVER['REQUEST_METHOD'].' not allowed')));
		}
		$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
		if(!$isAjax) {
			header("Content-Type: application/json; charset=UTF-8");
			die("404, Page Not Found");
		}else{
			header("Content-Type: application/json; charset=UTF-8");
		}
	}

	public function ajax_list()
	{
		$list = $this->article->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $article) {
			$no++;
			$row = array();
			$row[] = $article->id;
			$row[] = $article->title;
			$row[] = $article->link_article;
			$row[] = $article->status;
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_article('."'".$article->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_article('."'".$article->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->article->count_all(),
						"recordsFiltered" => $this->article->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		
		$data = $this->article->get_by_id($id);
		echo json_encode($data);
	}
	
	protected function getimg($data){

            $dom = new domDocument;

            /*** load the html into the object ***/
            $dom->loadHTML($data);

            /*** discard white space ***/
            $dom->preserveWhiteSpace = false;

            $images = $dom->getElementsByTagName('img');
            $i=0;
            foreach($images as $img)
                    {

                            $url = $img->getAttribute('src');	
                    }
					
            return $url;
    }

	public function ajax_add()
	{
		$body = $this->input->post('in_body');
		$img    = $this->getimg($body); 
        $images = $img;
		
		$data = array(
				'title' 			=> $this->input->post('title'),
				'image' 			=> $images,
				'body' 				=> $this->input->post('in_body'),
				'link_article' 		=> base_url().'detailarticle?id=',
				'status' 			=> '0'
			);
			
			//print_r($data);die;
		$insert = $this->article->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		
		$body = $this->input->post('in_body');
		$img    = $this->getimg($body); 
        $images = $img;
		
		$data = array(
				'title' 	=> $this->input->post('title'),
				'image' 	=> $images,
				'body' 		=> $this->input->post('in_body'),
			);
		$this->article->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->article->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	
	public function ajax_activate()
	{
		$data = array(
				'status' 	=> $this->input->get('status')
			);
		$this->article->activate(array('id' => $this->input->get('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

}
