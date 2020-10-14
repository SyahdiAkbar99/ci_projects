<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('Medilab');
        }

        public function index(){
            $this->load->view('crud/Home/homelab');
        }

        public function cek_log(){
            $username = $this->input->post('txt_user');
            $password = $this->input->post('txt_pass');
            $cek = $this->Medilab->login($username,$password,'tm_user')->result();
            if ($cek != FALSE){
                foreach ($cek as $row){
                    $user = $row->username;
                    $grup = $row->grup;
                }
                $this->session->set_userdata('session_user', $user);
                $this->session->set_userdata('session_grup', $grup);
                redirect('MedilabC/intoCrud');
            }else{
                redirect('MedilabC');
            }
        }
    }
?>