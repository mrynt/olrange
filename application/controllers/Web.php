<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_web');
 
	}
	
	
	function index() {
      
		$banner = $this->Model_web->Get_banner();
		$article = $this->Model_web->Get_article();
		
		$this->smarty->assign('banner',$banner);
		$this->smarty->assign('article',$article);
		
		//echo '<pre>';
		//print_r($article);die;
        $this->smarty->view('web/home');
 
    }
	
	function detailarticle() {
        
		$article_id = $this->Model_web->Get_article_id($this->input->get('id'));
		//print_r ($article_id);die;
		///echo count($article_id);die;
		
		if(count($article_id) == 0){
			echo '404 Page Not found';
		}else{
		$this->smarty->assign('getarticle',$article_id);	
        $this->smarty->view('web/detailarticle');
		}
    }
}
