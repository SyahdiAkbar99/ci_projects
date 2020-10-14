<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class MedilabC extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('Medilab');
            $this->load->library('MediTemplate');
            $this->load->library('Template');
            
        }
        public function index(){
            $data['user'] = $this->Medilab->getVM()->result();
            $this->meditemplate->show('crud/Home/homelab',$data);
        }
        public function intoCrud(){
            $data['user'] = $this->Medilab->getVM()->result();
            $this->template->tampil('crud/Home/home_vm',$data);
        }
        public function tambah_vm(){
            $this->template->tampil('crud/Add/tambah_vm');
        }
        public function hapus_vm($id){
            $where = array ('id_v_m'=>$id);
            $this->Medilab->delete($where,'tb_visi_misi');
            redirect('MedilabC/intoCrud');
        }

        public function proses_tambah(){
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');
		
            $data = array(
                'nama_v_m' => $nama,
                'deskripsi_v_m' => $deskripsi
            );
			if (!empty($_FILES['photo']['name'])) {
			$upload = $this->_do_upload();
			$data['photo_v_m'] = $upload;
		}
            $this->Medilab->save($data,"tb_visi_misi");
            
            redirect('MedilabC/intoCrud',$data);
        }
        
        private function _do_upload(){
		    $config['upload_path'] 		= 'upload/img/';
		    $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		    $config['max_size'] 			= 2048;
		    $config['max_widht'] 			= 1000;
		    $config['max_height']  		= 1000;
		    $config['file_name'] 			= round(microtime(true)*1000);
 
            $this->load->library('upload', $config);
            
		    if (!$this->upload->do_upload('photo')) {
			    $this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			    redirect('MedilabC/intoCrud');
		    }
		    return $this->upload->data('file_name');
        }
        
        public function logout(){
            $data['logout'] = $this->session->sess_destroy();
            $data['user'] = $this->Medilab->getVM()->result();
            $this->meditemplate->show('crud/Home/homelab',$data);
        }
    }      
?>