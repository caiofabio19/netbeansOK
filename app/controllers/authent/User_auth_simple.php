<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_auth_simple extends CI_Controller {
    
    public function index(){   
        
        if ((empty($_POST['user']) OR empty($_POST['mail'])) AND (empty($_POST['pass'])) ) {            
                header("Location: index.php"); exit;          
        }             
        
        $user = $_GET['user'];
        $mail = $_GET['mail'];
        $pass = $_GET['pass']; 
                 
        if($user == 'caio' OR $mail == 'caiofabiocf@gmail.com' AND $pass = '12345'){        
            echo "Logando no Sistema!"; exit;          
        } 
        else {        
            echo "Login Invalido";
        }       
      
    }
    
    public function tester(){      
        $user = $_GET['user'];
        $mail = $_GET['mail'];
        $pass = $_GET['pass'];    
        $user = $_GET['user'];
        echo $user.$_GET['mail'].$_GET['pass'];     
    }
}