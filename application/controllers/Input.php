<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
   

    public function __construct()
    {
    	parent::__construct();
        $this->load->helper(array('form', 'url'));
    	$this->load->model('admin_model');
    	
    	
    }
    public function data(){
        $data = $this->admin_model->get_data();
        print_r($data);
    }
	public function get()
	{  
       $this->load->view('input');
	}
    
    public function masuk(){
    	
    	$data = array(
    		'nama_data' => substr(implode(',', $this->input->post('nama_data')), 0));
    	$cek = $this->admin_model->get_insert($data);

        if (empty($cek)) {
            echo '<script> alert("berhasil"); </script>';
        }else{
            redirect('get','refresh');
        }

    	

    }
}

/* End of file Input.php */
/* Location: ./application/controllers/Input.php */