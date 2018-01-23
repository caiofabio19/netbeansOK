<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_auth_simple extends CI_Controller {
    
    public function index(){
        
        try {
            mysql_query("SELECT name, email, codigo FROM tablecode WHERE codigo = codigo");
        }
        catch (MySQLException $e) {
            // other mysql exception
            echo "Numero Incorreto";
            $e->getMessage();
        }
        catch (Exception $e) {
            // not a MySQL exception
            echo "Entre em contato.....";
            $e->getMessage();
        }
         
           
    }
}