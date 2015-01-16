<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class backend extends SecureController {

    function __construct(){
        parent::__construct();
        $this->load->model('database');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("login/index"));
    }

    public function root_menu(){
        $this->load->view('backend/menu_root');
        $this->load->view('backend/homepage');
        $this->load->view('backend/menu_root_down');
    }

    public function  add_product(){
        $data['cat'] = $this->database->get_category();
        $this->load->view('backend/menu_root');
        $this->load->view('backend/addproduct',$data);
        $this->load->view('backend/menu_root_down');
    }

    public function input_data_add(){
        date_default_timezone_set("Asia/Bangkok");
        $data = array(
            'pro_name'      => htmlspecialchars($this->input->post('pname')),
            'pro_title'     => htmlspecialchars($this->input->post('pdetail')),
            'pro_detail'    => $this->input->post('editor1'),
            'pro_create'    => date("Y-m-d h:i:sa"),
            'pro_show'      => htmlspecialchars($this->input->post('show')),
            'cat_id'        => htmlspecialchars($this->input->post('pcat'))
        );
        $check = $this->database->insert_product($data);
        if($check == 1){
            $this->session->set_userdata('error','เพิ่มข้อมูลสู่ระบบแล้วค่ะ');
        }else{
            $this->session->set_userdata('error','การทำรายการผิดผลาดกรุณาลองใหม่อีกครั้งค่ะ');
        }
        redirect(site_url("backend/root_menu"));
    }

    public function get_Pdata(){
        $data['pro'] = $this->database->get_Data_all();
        $this->load->view('backend/menu_root');
        $this->load->view('backend/checkdataAll',$data);
        $this->load->view('backend/menu_root_down');
    }

}

