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
        $per_pg = 12;    //  12 product : 1page
        $offset=$this->uri->segment(3);
        $sub = $this->input->get('sub');
        if($sub > 0){
            $row = $this->database->get_row($sub);
        }else{
            $row = $this->database->get_row(0);
        }
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/welcome/product/";
        $config['total_rows'] = $row['rows'];
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['suffix'] = '?sub='.$sub; //
        $config['per_page'] = $per_pg;

        $this->pagination->initialize($config);

        if($sub>0){
            $data['data'] = $this->database->get_all_product($per_pg,$offset,$sub);
        }else{
            $data['data'] = $this->database->get_all_product($per_pg,$offset,0);
        }
        $this->load->view('fontend/menu_root');
        $this->load->view('fontend/product',$data);
        $this->load->view('fontend/menu_root_footer');
    }
    public function select_data_detail(){
        $id = $this->uri->segment(3);
        $data['select'] = $this->database->get_data_select($id);
        $this->load->view('fontend/menu_root');
        $this->load->view('fontend/products-detail.php',$data);
        $this->load->view('fontend/menu_root_footer');
    }

    public function about_us(){
        $this->load->view('fontend/menu_root');
        $this->load->view('fontend/about_us');
        $this->load->view('fontend/menu_root_footer');
    }

    public function news(){
        $this->load->view('fontend/menu_root');
        $this->load->view('fontend/news');
        $this->load->view('fontend/menu_root_footer');
    }

    public function contact(){
        $this->load->view('fontend/menu_root');
        $this->load->view('fontend/contacts');
        $this->load->view('fontend/menu_root_footer');
    }
}