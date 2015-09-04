
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

   public function __construct()
   {
   	parent::__construct();
   	$this->load->database();
   }
	
  public function get_data(){

  	$query = $this->db->get('tbl_data');
  	foreach ($query->result() as $row) {
  		return $row;
  	}
  	return FALSE;
  }

  public function get_insert($data){
  	
  $this->db->insert('tbl_data', $data);
  }

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */