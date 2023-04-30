<?php 
class Login_model extends CI_Model {
	public function __construct() {
        parent::__construct();

        // Initialization tasks go here
        $this->load->database();
    }
    public function authenticate() {

        
        
    }
    public function save_user($data){
        $query = $this->db->insert('tbl-users',$data);
        return $query;
    }

}

?>