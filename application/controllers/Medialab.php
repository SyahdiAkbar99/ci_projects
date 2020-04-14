<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Medialab extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->helper('html');
        }
        public function index(){
            $this->load->view('start_template/header');
            $this->load->view('index');
            $this->load->view('start_template/footer');
        }
    }
?>