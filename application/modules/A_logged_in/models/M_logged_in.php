<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_logged_in extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cek_data_login(){
        $email  = $this->input->post('eml');
        $pass   = $this->input->post('pwd');

        $this->db->where('email',$email);
        $this->db->where('password',md5(md5($pass).'1mntID').md5($pass));
        $data=$this->db->get('tabel_akun');

        if ($data->num_rows() > 0) {
            
            $row = $data->row_array();
            if($row['email']==$email){ 
                if($row['status']=='aktif'){
                    $newdata = array(
                        'nama'      => $row['nama'],
                        'posisi'    => $row['posisi'],
                        'email'     => $row['email'],//no_hp
                        'id_akun'   => $row['id_akun'],
                        'role'      => $row['role'],
                        'logged_in' => "78jhk391menitID",
                    );
                    $this->session->set_userdata($newdata);
                    redirect('1menitadmin/beranda');
                }else{
                    $this->session->set_flashdata('pesan', 'Akun belum aktif !');
                    redirect('1menitadmin');    
                }
            }else{
                $this->session->set_flashdata('pesan', 'Email atau Password salah !');
                redirect('1menitadmin');
            }
        }else{
            $this->session->set_flashdata('pesan', 'Email atau Password salah !');
            redirect('1menitadmin');   
        }
    }
}
?>