<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_auth_simple extends CI_Controller {
    
    public function index(){  
                 
        $user = $_GET['user'];
        $mail = $_GET['mail'];
        $pass = $_GET['pass'];       
            
        if(empty($user) && empty($mail) && empty(pass)){
            echo"Favo Prencher Usuario ou Email e Senha";
        }
        elseif(empty($pass)){
            echo "Favor digitar sua senha";
        }
        elseif(empty ($mail)){
            if(empty($user)){
            echo "Favo Prencher Usuario ou Email";
            }
        }
        else{
            echo "Efetuando login";
            //$userq = mysql_query("SELECT username, password FROM users WHERE (username = '{HoloText($_POST['credentials_username'])}' OR mail='$email') AND password = '$pwd' LIMIT 1")
        }
    }
    
    public function tester(){
        $user = $_GET['user'];
        echo $user.$_GET['mail'].$_GET['pass'];     
    }
}