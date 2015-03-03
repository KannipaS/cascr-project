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

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $_SERVER['REQUEST_TIME'].rand().'-'.htmlspecialchars($this->input->post('pname'));

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('pimage')){		 // Can't upload
            $name = "no_pic.jpg";
        }
        else{ 												// Can upload
            $upload = array('upload_data' => $this->upload->data());
            $name = 	$upload['upload_data']['file_name'];
            //$part =		$_SERVER['DOCUMENT_ROOT']."/upload/";
        }

        $data = array(
            'pro_name'      => htmlspecialchars($this->input->post('pname')),
            'pro_title'     => htmlspecialchars($this->input->post('pdetail')),
            'pro_detail'    => $this->input->post('editor1'),
            'pro_create'    => date("Y-m-d h:i:sa"),
            'pro_show'      => htmlspecialchars($this->input->post('show')),
            'pro_pic'       => $name,
            'cat_id'        => htmlspecialchars($this->input->post('pcat')),
            'sub_id'        => htmlspecialchars($this->input->post('s_pcat'))
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

    public function  delete_Pdata(){
        $id = $this->uri->segment(3);
        $check = $this->database->delete_Pdata($id);
        if($check == 1){
            $this->session->set_userdata('error','ลบข้อมูลสู่ระบบแล้วค่ะ');
        }else{
            $this->session->set_userdata('error','การทำรายการผิดผลาดกรุณาลองใหม่อีกครั้งค่ะ');
        }
        redirect(site_url("backend/get_Pdata"));
    }

    public function edit_Pdata(){
        $id = $this->uri->segment(3);
        $data['pro'] = $this->database->get_data_select($id);
        $data['cat'] = $this->database->get_category();
        $this->load->view('backend/menu_root');
        $this->load->view('backend/editproduct',$data);
        $this->load->view('backend/menu_root_down');
    }

    public function  save_edit_data(){
        date_default_timezone_set("Asia/Bangkok");
        $id = $this->input->post('id');

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $_SERVER['REQUEST_TIME'].rand().'-'.htmlspecialchars($this->input->post('pname'));

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('pimage')){		 // Can't upload
            $name = $this->input->post('oldpic');
        }
        else{ 												// Can upload
            if($this->input->post('oldpic') != 'no_pic.jpg') {
                unlink("upload/".$this->input->post('oldpic'));
            }
            $upload = array('upload_data' => $this->upload->data());
            $name = 	$upload['upload_data']['file_name'];
            //$part =		$_SERVER['DOCUMENT_ROOT']."/upload/";
        }

        $data = array(
            'pro_name'      => htmlspecialchars($this->input->post('pname')),
            'pro_title'     => htmlspecialchars($this->input->post('pdetail')),
            'pro_detail'    => $this->input->post('editor1'),
            'pro_show'      => htmlspecialchars($this->input->post('show')),
            'pro_pic'       => $name,
            'cat_id'        => htmlspecialchars($this->input->post('pcat')),
            'sub_id'        => htmlspecialchars($this->input->post('s_pcat'))
        );
        $check = $this->database->update_data_select($id,$data);
        if($check == 1){
            $this->session->set_userdata('error','แก้ไขข้อมูลสู่ระบบแล้วค่ะ');
        }else{
            $this->session->set_userdata('error','การทำรายการผิดผลาดกรุณาลองใหม่อีกครั้งค่ะ');
        }
        redirect(site_url("backend/root_menu"));
    }

    public function add_news(){
        $this->load->view('backend/menu_root');
        $this->load->view('backend/add_news');
        $this->load->view('backend/menu_root_down');
    }

    public function add_news_save(){
        date_default_timezone_set("Asia/Bangkok");

        $data = array(
            'news_name'       => htmlspecialchars($this->input->post('pname')),
            'news_detail'     => htmlspecialchars($this->input->post('editor1')),
            'news_show'       => $this->input->post('show'),
            'news_create'     => date("Y-m-d h:i:sa")
        );

        $check = $this->database->insert_news($data);
        if($check == 1){
            $this->session->set_userdata('error','แก้ไขข้อมูลสู่ระบบแล้วค่ะ');
        }else{
            $this->session->set_userdata('error','การทำรายการผิดผลาดกรุณาลองใหม่อีกครั้งค่ะ');
        }
        redirect(site_url("backend/root_menu"));
    }

    public function check_news_data(){
        $data['pro'] = $this->database->get_data_news_all();
        $this->load->view('backend/menu_root');
        $this->load->view('backend/checkNews',$data);
        $this->load->view('backend/menu_root_down');
    }

    public function edit_news(){
        $id = $this->uri->segment(3);
        $data['data'] = $this->database->get_data_news($id);
        $this->load->view('backend/menu_root');
        $this->load->view('backend/edit_news',$data);
        $this->load->view('backend/menu_root_down');
    }

    public function edit_newssave(){
        $id = $this->input->post('id');
        $data = array(
            'news_name'       => htmlspecialchars($this->input->post('pname')),
            'news_detail'     => htmlspecialchars($this->input->post('editor1')),
            'news_show'       => $this->input->post('show')
        );

        $check = $this->database->update_data_news($id,$data);
        if($check == 1){
            $this->session->set_userdata('error','แก้ไขข้อมูลสู่ระบบแล้วค่ะ');
        }else{
            $this->session->set_userdata('error','การทำรายการผิดผลาดกรุณาลองใหม่อีกครั้งค่ะ');
        }
        redirect(site_url("backend/root_menu"));
    }

    public function delete_data_news(){
        $id = $this->uri->segment(3);
        $check = $this->database->delete_news($id);
        if($check == 1){
            $this->session->set_userdata('error','ลบข้อมูลสู่ระบบแล้วค่ะ');
        }else{
            $this->session->set_userdata('error','การทำรายการผิดผลาดกรุณาลองใหม่อีกครั้งค่ะ');
        }
        redirect(site_url("backend/check_news_data"));
    }

    public function get_catagory(){
        $id = $this->input->post('name');
        $data['s_cat'] = $this->database->get_subcatagory($id);
        $this->load->view('backend/get_subcatagory',$data);
    }

    public function get_catagory_editpage(){
        $id = $this->input->post('name');
        $data['sub'] = $this->input->post('sub');
        $data['s_cat'] = $this->database->get_subcatagory($id);
        $this->load->view('backend/get_subcatagory',$data);
    }

}

