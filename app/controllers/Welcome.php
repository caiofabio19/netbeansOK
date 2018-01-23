<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
    public function index()
	{
		$this->load->view('welcome_message');
        }
        public function teste(){
            $this->load->database();
            
            
                if ($this->db->simple_query('SELECT * FROM teste'))
              {
                      echo "Success!";
              }
              else
              {
                      echo "Query failed!";
              }
              
        }
}