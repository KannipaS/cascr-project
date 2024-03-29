<?
class database extends CI_Model{

    function checklogin($user,$pass){
        $sql = "select * from admin where ad_username = '$user' AND ad_password = '$pass'";
        $query = $this->db->query($sql);
        $row = $query->num_rows();

        if($row == 1) {
            $data = $query->row_array();
        }
        else{
            $data = '';
        }

        return $data;
    }

    function get_row($sub){
        if($sub>0){
            $sql = "select count(*)as rows from product where pro_show = 1 AND sub_id = $sub";
        }
        else{
            $sql = "select count(*)as rows from product where pro_show = 1";
        }
        $query = $this->db->query($sql);

        return $query->row_array();
    }

    function get_category(){
        $sql = "select * from category";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    function insert_product($data){
        $this->db->insert('product',$data);
        $check = $this->db->affected_rows();

        return $check;
    }

    function get_Data_all(){
        $sql = "select * from product INNER JOIN category ON product.cat_id = category.cat_id";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    function delete_Pdata($id){
        $this->db->where('pro_id', $id);
        $this->db->delete('product');
        $check = $this->db->affected_rows();

        return $check;
    }

    function get_data_select($id){
        $sql = "select * from product INNER JOIN category ON product.cat_id = category.cat_id where product.pro_id = $id";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    function update_data_select($id,$data){
        $this->db->where('pro_id', $id);
        $this->db->update('product', $data);
        $check = $this->db->affected_rows();

        return $check;
    }

    function get_all_product($per_pg,$offset,$sub){   //pagination
        $this->db->order_by('pro_id','ase');
        if($sub>0){
            $this->db->where('pro_show', 1);
            $this->db->where('sub_id', $sub);
        }else{
            $this->db->where('pro_show', 1);
        }
        $query=$this->db->get('product',$per_pg,$offset);

        //echo $this->db->last_query();

        return $query->result_array();
    }

    function insert_news($data){
        $this->db->insert('news',$data);
        $check = $this->db->affected_rows();

        return $check;
    }

    function get_data_news_all(){
        $sql = "select * from news";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    function get_data_news($id){
        $sql = "select * from news where news_id = $id";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    function update_data_news($id,$data){
        $this->db->where('news_id', $id);
        $this->db->update('news', $data);
        $check = $this->db->affected_rows();

        return $check;
    }

    function delete_news($id){
        $this->db->where('news_id', $id);
        $this->db->delete('news');
        $check = $this->db->affected_rows();

        return $check;
    }

    function get_subcatagory($id){
        $sql = "select * from sub_category where cat_id = $id";
        $query = $this->db->query($sql);

        return $query->result_array();
    }
}

?>