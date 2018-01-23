<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plevel extends CI_Controller {
    
    public function index(){
       
        if (!isset($_SESSION)) session_start();
        $nivel_necessario = 2;
        // Verifica se não há a variável da sessão que identifica o usuário
        if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
          // Destrói a sessão por segurança
          session_destroy();
          // Redireciona o visitante de volta pro login
          header("Location: index.php"); exit;
        }
    }
}
