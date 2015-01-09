<?
class database extends CI_Model{

    function checklogin($user,$pass)
    {
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

}

?>