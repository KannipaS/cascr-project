<?
class database extends CI_Model{

    function checklogin($user,$pass){
        $sql = "select * from admin where ad_username = '$user' AND ad_password = '$pass'";
        $query = $this->db->query($sql);
        $row = $query->num_rows();

        if($row == 1)
        {
            $data = $query->row_array();
        }
        else
        {
            $data = '';
        }

        return $data;
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
}

?>