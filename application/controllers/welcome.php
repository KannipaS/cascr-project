<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('database');
    }
	public function index(){
		$this->load->view('fontend/menu_root');
        $this->load->view('fontend/homepage');
        $this->load->view('fontend/menu_root_footer');
	}
    public function product(){
        $this->load->view('fontend/menu_root');
        $this->load->view('fontend/product');
        $this->load->view('fontend/menu_root_footer');
    }
    public function detail(){
        $this->load->view('fontend/menu_root');
        $this->load->view('fontend/products-detail.php');
        $this->load->view('fontend/menu_root_footer');
    }
}