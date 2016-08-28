<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('cms_login');
		$this->load->library('session');
		
		$menu = $this->cms_login->get_menu();
		$this->smarty->assign("menu",$menu);
 
	}
	
	function index() {
		 
		 if(isset($_SESSION['login']) && $_SESSION['login'] != 0){
		 	header ("Location: ".base_url(). "cms/home");
		 }else{
			$this->smarty->view('cms/pages/login'); 
		 }
		
    }
	
	function login() {
		
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->cms_login->cek_login($where);
		$_SESSION['login'] = $cek;
		if($cek != 0){	
			redirect((base_url().'cms/home'));
		}else{
			echo "Username dan password salah !";
		}
	}
	
	function home() {
		
		if(!isset($_SESSION['login']) && $_SESSION['login'] == 0){
        header ("Location: ".base_url(). "cms/");
		}
		
		$activate = "home";
		
		$this->smarty->assign('activate',$activate);
		$this->smarty->view('cms/pages/index');
	}
	
	function dataarticle() {
		
		if(!isset($_SESSION['login']) && $_SESSION['login'] == 0){
        header ("Location: ".base_url(). "cms/");
		}
		
		$activate = "dataarticle";
		
		$this->smarty->assign('activate',$activate);
		$this->smarty->view('cms/pages/tables');
	}
	
	
	function logout() {
		session_destroy(); 		
		header("Location: ".base_url(). "cms/");
	}
}
