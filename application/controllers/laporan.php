<?php
defined('BASEPATH') or exit('No direct script access allowed');


require 'vendor/autoload.php';
use Dompdf\Dompdf;
class Laporan extends CI_Controller
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
        $data['title'] = 'Laporan Buku Induk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataA'] = $this->menu->getNoAnggota();
        $data['jumlah'] = $this->menu->getKelas();
        $data['buku'] = $this->db->get('buku_induk')->result_array();

        $keyword= $this->input->post('keyword');

        if ($keyword) {
            $data['siswa'] = $this->menu->cariBuku();
        }

        //generate code
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/index', $data);
            $this->load->view('templates/footer');
    }

      //Laporan absen
      public function absen(){
        //get model
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Laporan Absen Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataA'] = $this->menu->getNoAnggota();
        $data['jumlah'] = $this->menu->getKelas();
        $data['buku'] = $this->db->get('buku_induk')->result_array();
        $data['absen'] = $this->menu->getAbsen();

        //generate code
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/report_absen', $data);
            $this->load->view('templates/footer');
    }


    public function peminjaman(){
        //get model
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Laporan Peminjaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['pinjam'] = $this->menu->getAllPinjaman();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/report_peminjaman', $data);
        $this->load->view('templates/footer');
    }

    
    public function pengembalian(){
        //get model
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Laporan Pengembalian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['siswa'] = $this->menu->getAnggota();
        $data['kelas'] = $this->menu->getKelas();
        $data['kembali'] = $this->menu->getTabelKembali();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/report_pengembalian', $data);
        $this->load->view('templates/footer');
    }



    public function printbuku(){        
        $dompdf = new Dompdf();
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Data Buku';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['jumlah'] = $this->menu->getKelas();
        $data['buku'] = $this->db->get('buku_induk')->result_array();
        $keyword= $this->input->post('keyword');
        $html =$this->load->view('laporan/print_buku', $data,TRUE);
        $dompdf->loadHtml($html);
        //dompdf library
        $dompdf->setPaper(array(0,0,609.4488,935.433), 'landscape');
        // $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("Laporan"."-"."Buku-Induk"."-"."Man-1-Kepulauan-Meranti".".pdf");
  
    }
    
    public function printAbsen(){        
        $dompdf = new Dompdf();
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Data Buku';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['jumlah'] = $this->menu->getKelas();
        $data['buku'] = $this->db->get('buku_induk')->result_array();
        $keyword= $this->input->post('keyword');
        $data['absen'] = $this->menu->getAbsen();
        $html = $this->load->view('laporan/print_absen', $data,TRUE);
        $dompdf->loadHtml($html);
        //dompdf library
        $dompdf->setPaper(array(0,0,609.4488,935.433), 'landscape');
        // $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("Laporan"."-"."Absen"."-"."Man-1-Kepulauan-Meranti".".pdf");
  
    }
  
    public function printPeminjaman(){        
        $dompdf = new Dompdf();
        $this->load->model('Menu_model', 'menu');
        $data['buku'] = $this->db->get('buku_induk')->result_array();
        $keyword= $this->input->post('keyword');
        $data['absen'] = $this->menu->getAbsen();
        $data['pinjam'] = $this->menu->getAllPinjaman();
        $html = $this->load->view('laporan/print_peminjaman', $data,TRUE);
        $dompdf->loadHtml($html);
        //dompdf library
        $dompdf->setPaper(array(0,0,609.4488,935.433), 'landscape');
        // $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("Laporan"."-"."Peminjaman"."-"."Man-1-Kepulauan-Meranti".".pdf");
  
    }

    public function printPengembalian(){        
        $dompdf = new Dompdf();
        $this->load->model('Menu_model', 'menu');
        $data['buku'] = $this->db->get('buku_induk')->result_array();
        $keyword= $this->input->post('keyword');
        $data['absen'] = $this->menu->getAbsen();
        $data['kembali'] = $this->menu->getTabelKembali();
        $html = $this->load->view('laporan/print_pengembalian.php', $data,TRUE);
        $dompdf->loadHtml($html);
        //dompdf library
        $dompdf->setPaper(array(0,0,609.4488,935.433), 'landscape');
        // $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("Laporan"."-"."Pengembalian"."-"."Man-1-Kepulauan-Meranti".".pdf");
  
    }


  


}



   
 

