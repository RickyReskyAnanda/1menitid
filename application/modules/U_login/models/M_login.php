<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cek_login(){
        $logged_in = $this->session->userdata('logged_in_y');
            if($logged_in == "xdev") {
                redirect('beranda');
            }
    }

    public function login(){
        $eml        = $this->input->POST('email', TRUE);
        $keyword    = md5($this->input->POST('pass', TRUE));
        $data       = $this->db->query("SELECT * from tabel_user where email_user='$eml' and pass_user='$keyword' LIMIT 1");

        if ($data->num_rows() > 0) {
            $row = $data->row_array();
            if($row['blokir']=='tidak'){

                $newdata = array(
                    'id_user'           => $row['id_user'],
                    'nama_user'         => $row['nama_user'],
                    'email_user'        => $row['email_user'],
                    'logged_in_y'       => "xdev",
                    'foto_profil'       => $row['foto_profil'],
                );
                $this->session->set_userdata($newdata);
                redirect('user');
            }else{
                $this->session->set_flashdata('u_pesan', 'Akun diblokir !');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('u_pesan', 'Email atau Password salah !');
            redirect('login');
        }

    }

    public function insert_data_pendaftaran(){
        // seleksi password
        if($this->input->post('pass')!=$this->input->post('kon_pass')){
            $this->session->set_flashdata('d_pesan', 'Password tidak sama !');
            $this->session->set_flashdata('d_pesan_n', $this->input->post('nama'));
            $this->session->set_flashdata('d_pesan_e', $this->input->post('email'));
            $this->session->set_flashdata('d_pesan_p', $this->input->post('pass'));
            $this->session->set_flashdata('d_pesan_p', $this->input->post('pass'));
            redirect('login');
        }else{
            //seleksi email terdaftar
            $this->db->where('email_user',$this->input->post('email'));
            $hasil_email = $this->db->get('tabel_user')->num_rows();
            if($hasil_email > 0){
                $this->session->set_flashdata('d_pesan', 'Email Telah Terdaftar !');
                redirect('login');
            }
        }
       // INPUT KE DATABASE 
        $data['nama_user']             = $this->input->post('nama');
        $data['email_user']            = $this->input->post('email');
        $data['pass_user']             = md5($this->input->post('pass'));
        $data['jk_user']               = 'laki-laki';
        $data['tgl_lahir_user']        = '1992-12-01';
        $data['tempat_lahir_user']     = '-';
        $data['pekerjaan_user']        = '-';
        $data['no_hp_user']            = '0';
        $data['blokir']                = 'tidak';
        $data['alamat_user']           = '-';
        $data['foto_profil']           = 'empty.png';
        $data['foto_ktp']              = 'empty.png';

        $this->db->insert('tabel_user',$data);

        //MENGAMBIL DATA YG TELAH DIINPUT
        $this->db->where('email_user',$data['email_user']);
        $this->db->where('pass_user',$data['pass_user']);
        $row = $this->db->get('tabel_user')->row_array();


        // menampung data yang d input
        $newdata = array(
            'id_user'           => $row['id_user'],
            'nama_user'         => $row['nama_user'],
            'email_user'        => $row['email_user'],
            'logged_in_y'       => "xdev",
            'foto_profil'       => $row['foto_profil']
        );

        $this->session->set_userdata($newdata);
        redirect('user/profil');
    }

}
?>