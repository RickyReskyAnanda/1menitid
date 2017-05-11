<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_balai_diklat extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function select_data_balai_diklat(){
        // $nomor = $this->input->post('nomor');

        // $this->db->where('jenis_tempat','balai-diklat');
        $this->db->order_by('id_tempat','DESC');
        $this->db->limit(9);
        $data = $this->db->get('tabel_tempat')->result_array();

        $this->load->library('teknikal');

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['link_detail'] = base_url().'balai-diklat/'.$this->teknikal->namakelink($data[$i]['nama_tempat']).'/'.$data[$i]['id_tempat'];
        }

        return $data;
    }
    public function select_load_data_balai_diklat(){
        $nomor = $this->input->post('nomor');

        // $this->db->where('jenis_tempat','balai-diklat');
        $this->db->order_by('id_tempat','DESC');
        $this->db->limit(6,$nomor);
        $data = $this->db->get('tabel_tempat')->result_array();
        $this->load->library('teknikal');

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['link_detail'] = base_url().'balai-diklat/'.$this->teknikal->namakelink($data[$i]['nama_tempat']).'/'.$data[$i]['id_tempat'];
        }

        return $data;
    }

    public function select_data_detail_balai_diklat(){
        $id = $this->uri->segment(3);

        $this->db->join('tabel_user', 'tabel_user.id_user = tabel_tempat.id_user');
        $this->db->where('id_tempat',$id);
        $data = $this->db->get('tabel_tempat')->row_array();        

        $this->db->where('id_back',$id);
        $data['gambar'] = $this->db->get('tabel_gambar')->result_array();

        $this->db->join('tabel_user', 'tabel_user.id_user = tabel_komentar.id_user');
        $this->db->where('id_tempat',$data['id_tempat']);
        $this->db->order_by('id_tempat', 'desc');
        $data['komentar'] = $this->db->get('tabel_komentar')->result_array();

        return $data;
    }

    public function select_data_search_balai_diklat(){

        $sNamaTempat    = $this->input->post('sNamaTempat');
        $sHarga         = $this->input->post('sHarga');
        $sKecamatan     = $this->input->post('sKecamatan');
        $sTanggal       = $this->input->post('sTanggal');

        // ---- pengambilan data berdasarkan seleksinya -----
        $this->db->like('nama_tempat',$sNamaTempat);
        $hNamaTempat = $this->db->get('tabel_tempat')->result_array();
        
        if ($sHarga == '1'){
            $hargaawal=100000;
            $hargaakhir=500000;
        }elseif ($sHarga == '2'){
            $hargaawal=500000;
            $hargaakhir=1000000;
        }elseif ($sHarga == '3'){
            $hargaawal=1000000;
            $hargaakhir=2000000;
        }elseif ($sHarga == '4'){
            $hargaawal=2000000;
            $hargaakhir=5000000;
        }elseif ($sHarga == '5'){
            $hargaawal=5000000;
            $hargaakhir=10000000;
        }elseif ($sHarga == '6'){
            $hargaawal=10000000;
            $hargaakhir = 100000000;
        }
        $hHarga = $this->db->query(" SELECT * FROM tabel_tempat WHERE harga BETWEEN $hargaawal AND $hargaakhir")->result_array();
        // lokasi dilewati

        $tanggal = explode(',', $sTanggal);

        for ($i=0; $i < count($tanggal); $i++) { 
            $tanggal[$i] = date("Y-m-d",strtotime($tanggal[$i]));
        }

        $this->db->where_in('tanggal_peminjaman', $tanggal);




        //----batas----

        
        /*
        1. nama tempat menggukan seleksi like terhadap nama tempatnya
        2. harga memerlukan range sehingga seleksinya menggunakan seleksi range lebih besar dan lebih kecil
        3. kecamatan di ambil dari tabel kecamatan kemudian idnya nanti yang akan dihubungkan di 

        */

        // $this->db->where('jenis_tempat','balai-diklat');
        // $this->db->where('harga','balai-diklat');

        // $this->db->get_where('tabel_tempat',array('jenis_tempat' => 'balai-diklat',''));
        // // $this->db->or_where('sKecamatan','balai-diklat');
        // $this->db->or_where('jam_buka','balai-diklat');
        // $this->db->or_where('jam','balai-diklat');
        // $this->db->or_where('sHarga','balai-diklat');
        // $this->db->like('nama_tempat',$sNamaTempat);
        // $this->db->order_by('id_tempat','DESC');
        // $this->db->limit(9,$nomor);
        // $data = $this->db->get('tabel_tempat')->result_array();
        // $this->load->library('teknikal');

        // for ($i=0; $i < count($data); $i++) { 
        //     $data[$i]['link_detail'] = base_url().'balai-diklat/'.$this->teknikal->namakelink($data[$i]['nama_tempat']).'/'.$data[$i]['id_tempat'];
        // }

        // return $data;
    }

    public function select_data_pencarian_tempat(){
        $jenis      = $this->input->post('jenispost');
        $pencarian  = $this->input->post('hasilpencarian');
        $data = array();
        $data['jenis']=$jenis;
        if($jenis == 1){
            $this->db->like('nama_tempat',$pencarian);
            $data['data']   = $this->db->get('tabel_tempat')->result_array(); 
        }elseif ($jenis == 2) {
            if ($pencarian == '1'){
                $hargaawal=100000;
                $hargaakhir=500000;
            }elseif ($pencarian == '2'){
                $hargaawal=500000;
                $hargaakhir=1000000;
            }elseif ($pencarian == '3'){
                $hargaawal=1000000;
                $hargaakhir=2000000;
            }elseif ($pencarian == '4'){
                $hargaawal=2000000;
                $hargaakhir=5000000;
            }elseif ($pencarian == '5'){
                $hargaawal=5000000;
                $hargaakhir=10000000;
            }elseif ($pencarian == '6'){
                $hargaawal=10000000;
                $hargaakhir = 100000000;
            }
            $data['data'] = $this->db->query(" SELECT * FROM tabel_tempat WHERE harga BETWEEN $hargaawal AND $hargaakhir")->result_array();
        }elseif ($jenis==3) {
            $this->db->where('kecamatan',$pencarian);
            $data['data'] = $this->db->get('tabel_tempat')->result_array();
        }elseif($jenis == 4){
            $tanggal = explode(',', $pencarian);

            for ($i=0; $i < count($tanggal); $i++) { 
                $tanggal[$i] = date("Y-m-d",strtotime($tanggal[$i]));

                $this->db->join('tabel_tempat', 'tabel_tempat.id_tempat = tabel_pendaftaran.id_tempat');
                $this->db->where('tanggal_peminjaman', $tanggal[$i]);
                $sementara = $this->db->get('tabel_pendaftaran')->result_array();
                
                $data['data'][$i]=$sementara;

            }
            $data['tanggal']=$tanggal;
        }
        //-- proses menambahkan link data
        $this->load->library('teknikal');

        if($jenis !=4){
            for ($i=0; $i < count($data['data']); $i++) { 
                $data['data'][$i]['link_detail'] = base_url().'balai-diklat/'.$this->teknikal->namakelink($data['data'][$i]['nama_tempat']).'/'.$data['data'][$i]['id_tempat'];
            }
        }elseif($jenis==4){
            for ($i=0; $i < count($data['data']); $i++) {
                for ($a=0; $a < count($data['data'][$i]); $a++) { 
                    $data['data'][$i][$a]['link_detail'] = base_url().'balai-diklat/'.$this->teknikal->namakelink($data['data'][$i][$a]['nama_tempat']).'/'.$data['data'][$i][$a]['id_tempat'];
                } 
            }
        }
        return $data;
    }

    public function cek_tanggal_detail_tempat(){
        $pencarian = $this->input->post('tanggal');
        $idTempat = $this->input->post('idTempat');
        $tanggal = explode(',', $pencarian);

        $this->db->where('id_tempat', $idTempat);
        $data = $this->db->get('tabel_waktu')->result_array();

/**
*   Proses Seleksi untuk menyusun : 
*   data dari variabel $data ke variabel $terisi jika
*   tanggal yang diinputkan sama dengan tanggal yang ada di tabel
**/
        $terisi = array();
        $hasil = array();
        for ($i=0; $i < count($tanggal); $i++) { 
            $tanggal[$i] = date("Y-m-d",strtotime($tanggal[$i]));

            for ($a=0; $a < count($data); $a++) { 
                if($tanggal[$i]==$data[$a]['tanggal'])
                $terisi[] = $data[$a]['tanggal'];
            }
        }
        $hasil['tanggal'] = $terisi; 

        if(count($hasil['tanggal'])==0){
            $this->db->select('harga');
            $this->db->where('id_tempat',$idTempat);
            $dataTempat = $this->db->get('tabel_tempat')->row_array();
 
            $hasil['harga'] = "Rp. " . number_format(count($tanggal) * $dataTempat['harga'],2,',','.');
        }
        echo json_encode($hasil);  
    }

    public function insert_data_pemesanan_balai(){
        $data['id_user']            = '3';
        $data['id_tempat']          = $this->input->post('idTempat');
        $data['waktu_pendaftaran']  = date('Y-m-d h:i:s');
        $data['keterangan']         = $this->input->post('keterangan');
        $data['status']             = 'daftar';
        $data['nama_kegiatan']      = $this->input->post('namaKegiatan');
        $data['nama_organisasi']    = $this->input->post('organisasi');
        $data['kebutuhan']          = $this->input->post('kebutuhan');
        $this->db->insert('tabel_pendaftaran',$data);

        $this->db->where('id_tempat',$data['id_tempat']);
        $this->db->where('waktu_pendaftaran',$data['waktu_pendaftaran']);
        $this->db->order_by('id_pendaftaran','desc');
        $pendaftaran = $this->db->get('tabel_pendaftaran')->row_array();

        $pencarian = $this->input->post('tanggal');
        $tanggal = explode(',', $pencarian);
        for ($i=0; $i < count($tanggal); $i++) {
            $tanggal[$i] = date("Y-m-d",strtotime($tanggal[$i]));

            $waktu['id_pendaftaran']    = $pendaftaran['id_pendaftaran'];
            $waktu['tanggal']           = $tanggal[$i];
            $waktu['jam']               = '00:00:00';
            $waktu['id_tempat']         = $data['id_tempat'];
            $this->db->insert('tabel_waktu',$waktu);
        }
        echo "berhasil";
    }

}
?>