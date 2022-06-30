<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        //get model
        $this->load->model('Menu_model', 'menu');

        $data['title'] = 'Data Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataA'] = $this->menu->getNoAnggota();
        $data['jumlah'] = $this->menu->getKelas();
        //input kode anggota
        $tabel ="buku_siswa";
        $field ="no_anggota";
        $lastcode = $this->menu->getMax($tabel,$field);
        $noUrut =(int) substr($lastcode,-3,3);
        $noUrut++;
        $str="P/";
        $newKode = $str.sprintf('%03s',$noUrut);
       // var_dump($newKode);
        //generate code
        $keyword= $this->input->post('keyword');
        if ($keyword) {
            $data['siswa'] = $this->menu->cariSiswa();
        }else {
            $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('menu_id','menu_id', 'required');
            $this->form_validation->set_rules('nisn', 'NISN', 'required');
            $this->form_validation->set_rules('Alamat', 'Alamat Lengkap', 'required');                   
        } 
        
    
        if ($this->form_validation->run() == false) {
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/index', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'no_anggota' => $newKode,
                'nm_siswa' => $this->input->post('nama'),
                'nisn' => $this->input->post('nisn'),
                'id_kelas' => $this->input->post('menu_id'),
                'alamat' => $this->input->post('Alamat'),
                'tanggal_terbit' => date("Y/m/d") 
            ];
            $this->db->insert('buku_siswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Siswa Berhasil Di Tambahkan!</div>');
            redirect('anggota/');
        }
    }



    public function hapusAnggota($id){
        $this->load->model('Menu_model', 'menu');
        $this->menu->HapusBuku($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('Anggota');
    }

    public function kelas(){
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Data Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['kelas'] = $this->db->get('buku_kelas')->result_array();


        $this->form_validation->set_rules('nama', 'Nama Kelas', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/kelas', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nm_kelas' => $this->input->post('nama'),
            ];
            $this->db->insert('buku_kelas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kelas Berhasil Di Tambahkan!</div>');
            redirect('anggota/kelas');
        }
    }
    

    public function hapusKelas($id){

        $this->load->model('Menu_model', menu);
        $this->menu->HapusKelas($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('anggota/kelas');

    }



    public function editSiswa($id){
        
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Edit Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['kelas'] = $this->db->get('buku_kelas')->result_array();
        $data['siswa'] = $this->menu->getSiswaById($id);
                
        $this->form_validation->set_rules('nm_siswa', 'Nama siswa', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('menu_id', 'kelas', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/editAnggota', $data);
            $this->load->view('templates/footer');
        } else {
        
            $this->menu->updateDataSiswa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Siswa Berhasil Di Ubah!</div>');
            redirect('anggota/');

        }

    }

    public function editKelas($id){
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Edit Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['kelas'] = $this->db->get('buku_kelas')->result_array();
        $data['kelasS'] = $this->menu->getKelasSingle($id);

        $this->form_validation->set_rules('nm_kelas', 'Nama Kelas', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/editKelas', $data);
            $this->load->view('templates/footer');
        }else {
            $this->menu->updateDataKelas($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Siswa Berhasil Di Ubah!</div>');
            redirect('anggota/kelas');
        }
    }

    public function riwayat($id){

        $this->load->model('Menu_model', 'menu');
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['title'] = 'Data Pengembalian';
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['pinjam'] = $this->menu->getPinjam();
        $data['siswa'] = $this->menu->getSiswaKelasBy($id);
        $data['riwayat'] = $this->menu->getAllSiswaKelasBy($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/riwayatsiswa', $data);
        $this->load->view('templates/footer');
    }
    
    public function absenSiswa(){
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Data Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataA'] = $this->menu->getNoAnggota();
        $data['jumlah'] = $this->menu->getKelas();
        $data['absen'] = $this->menu->getAbsen();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('anggota/absen', $data);
        $this->load->view('templates/footer');
    }


    //tampilan di menu admin
    public function addabsen(){
        //get model
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Data Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataA'] = $this->menu->getNoAnggota();
        $data['kelas'] = $this->menu->getKelas();

        $this->load->view('templates/header', $data);
        $this->load->view('anggota/tmb_absen_test', $data);
        $this->load->view('templates/footer');
    }

    //untuk get nama buat absen
    //parsing id kelas
    public function formAbsen($id){
        //get model
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Form Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataA'] = $this->menu->getNoAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['absen'] = $this->menu->getAbsenId($id);
        $data['siswaId'] = $this->menu->getSiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/form_absen', $data);
        $this->load->view('templates/footer');
    }

    //get keterangan data absensi
    public function ketAbsensi($id){
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Form Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataA'] = $this->menu->getNoAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['absen'] = $this->menu->getAbsenId($id);
        $data['siswaId'] = $this->menu->getSiswaById($id);
        $absen = $this->menu->cekAbsen($id);
         $this->form_validation->set_rules('id_siswa', 'id_siswa','required');      
         $this->form_validation->set_rules('ket', 'Keterangan', 'required');
         
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('anggota/tambah_ket_absensi.php', $data);
            $this->load->view('templates/footer');
        }else {
            //belum besa ke error handler 
            if($absen==false) {    
                $data = [
                    'id_absen' => null,
                    'id_siswa' => $this->input->post('id_siswa'),
                    'ket_absen' => $this->input->post('ket'),            
                    'date_absen	' => date("Y/m/d"),             
                ];
                $this->db->insert('buku_absen', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Berhasil Di Tambahkan!</div>');
                  redirect('anggota/addabsen');

            }else{
                  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda sudah absen hari ini!</div>');
                  redirect('anggota/addabsen');
            }
         }

    }


}
