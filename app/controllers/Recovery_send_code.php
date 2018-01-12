<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recovery_send_code extends CI_Controller {
    
    public function index(){  
     
        if($_GET['acao'] == 'recuperar'){
            
            $email = strip_tags(filter_input(INPUT_GET, 'emailRecupera', FILTER_SANITIZE_STRING));

            //$verificar = mysql_query("SELECT `email` FROM `usuarios` WHERE email = '$email'");
            //if(mysql_num_rows($verificar) == 1){
            $verficar = "caiofabiocf@gmail.com";
            $codigo = rand (1000, 9999 );
            $data_expirar = date('Y-m-d H:i:s', strtotime('+1 day'));

            $mensagem = '<p>Recebemos uma tentativa de recuperação de senha para este e-mail, caso não tenha sido você,
                    desconsidere este e-mail, caso contrário clique no link abaixo<br /> 
                    <a href="http://vitorrc.com/recuperar/recuperar.php?codigo='.$codigo.'">Recuperar Senha</a></p>';
            $email_remetente = 'cfr@modalnetworks.com';

            $headers = "MIME-Version: 1.1\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
            $headers .= "From: $email_remetente\n";
            $headers .= "Return-Path: $email_remetente\n"; 
            $headers .= "Reply-To: $email\n"; 

           
            mail("$email", "Assunto", "$mensagem", $headers, "-r"."$email_remetente");
            echo 'Enviamos um e-mail com um link para recuperação de senha, para o endereço de e-mail informado!';
        }
        
    }
}