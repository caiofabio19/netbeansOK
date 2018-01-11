<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
        }
        public function teste(){
            echo 'ola';
          echo  $this->load->database();
            
            
           
            
            $query = $this->db->query("SELECT * FROM MODAL.AUTHENTI");
  
            foreach ($query->result() as $row)
            {
                    echo $row->login;
                    echo $row->email;
                    echo $row->passw;
            }

            
        }
        
}
