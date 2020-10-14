<?php 

    class Medilab extends CI_Model{
        public function getVM(){
            $this->db->select('*');
            $this->db->from('tb_visi_misi');
            $query = $this->db->get();
            return $query;
        }
        function login($user,$pass,$table){
            $this->db->select('*');
            $this->db->from('tm_user');
            $this->db->where('username',$user);
            $this->db->where('password',$pass);
            $query = $this->db->get();
            return $query;
        }
        public function save($data,$table){
		    $this->db->insert($table,$data);
        }
        function edit($id){
		    $this->db->select('*');
		    $this->db->from('tb_visi_misi');
		    $this->db->where('id_v_m', $id);
		    return $this->db->get()->row_array();
        }
        function save_edit($id, $data){
            $this->db->where('id_v_m', $id);
            
		    $berhasil = $this->db->update('tb_visi_misi', $data);
		        if($berhasil){
			        redirect('MedilabC/intoCrud'.$id.'?update=1','refresh');
		        }
		        else{
			        redirect('MedilabC/intoCrud'.$id.'?update=2','refresh');
		        }
	}

	
	// function delete($id){
	// 	$_id = $this->db->get_where('tb_visi_misi',['id_v_m' => $id])->row();
        
    //     $query = $this->db->delete('tb_visi_misi',['id_v_m'=>$id]);
    //         if($query){
    //                 unlink("assets/img/".$_id->photo_v_m);
    //             }
	// 	    if($query){
    //                 redirect('MedilabC/intoCrud'.$id.'?delete=1','refresh');
	// 	        }
	// 	    else{
    //                 redirect('MedilabC/intoCrud'.$id.'?delete=2','refresh');
	// 	        }
    //         }

    function delete($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }     
    }

?>