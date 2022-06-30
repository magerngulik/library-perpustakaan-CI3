<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getMenuById($id){
        $this->db->select('*');
        $this->db->from('user_sub_menu a'); 
        $this->db->join('user_menu b', 'a.menu_id=b.id', 'left');
        $this->db->where('a.id',$id);
        return $this->db->get()->row_array();
    }


    public function getAnggota(){     
        $queryMenu = "SELECT * FROM `buku_siswa` JOIN buku_kelas ON buku_siswa.id_kelas = buku_kelas.id_kelas;";
        return $this->db->query($queryMenu)->result_array();
    }

    public function getJS(){

        $query2 = "SELECT COUNT(no_anggota) FROM buku_siswa;";
        return $this->db->query($query2)->result_array();
    }

    public function getKelas()
    {
        $queryMenu = "SELECT * FROM `buku_kelas` ORDER BY `buku_kelas`.`nm_kelas` DESC";
        return $this->db->query($queryMenu)->result_array();
    }
    // absen
    public function getAbsenId($id){
        $query = "SELECT * FROM `buku_kelas` JOIN buku_siswa ON buku_siswa.id_kelas = buku_kelas.id_kelas WHERE buku_siswa.id_kelas =$id";
        return $this->db->query($query)->result_array();
    }

    public function cekAbsen($id){
        $date= date("Y/m/d");
        $query = "SELECT * FROM `buku_absen` WHERE `id_siswa`='$id' and `date_absen` ='$date'";
        return $this->db->query($query)->row_array();
    }

    // endabsen
    public function getKelasSingle($id)
    {
        $this->db->where('id_kelas',$id);
        return $this->db->get('buku_kelas')->row_array();
    }

public function getNoAnggota(){
$this->db->select("MAX(	no_anggota )+1 AS id");
$this->db->from("buku_siswa");
$query = $this->db->get();

return $query->row()->id;
}

public function getMax($tabel = null, $field= null){
    $this->db->select_max($field);
    return $this->db->get($tabel)->row_array()[$field];
    
}

public function HapusBuku($id){
    $this->db->where('id_siswa',$id);
    $this->db->delete('buku_siswa');    
}

public function HapusKelas($id){
    $this->db->where('id_kelas',$id);
    $this->db->delete('buku_kelas');    
}

public function getSiswaById($id)
{
    $query = "SELECT * FROM `buku_siswa` a LEFT JOIN buku_kelas b on a.id_kelas = b.id_kelas WHERE a.id_siswa = $id";
    return $this->db->query($query)->row_array();
}


public function updateDataSiswa(){
    $data = [
        'nm_siswa' => $this->input->post('nm_siswa'),
        'nisn' => $this->input->post('nisn'),
        'id_kelas' => $this->input->post('menu_id'),
        'alamat' => $this->input->post('alamat'),
    ];
    $this->db->where('id_siswa', $this->input->post('id'));
    $this->db->update('buku_siswa',$data);
}

public function updateDataKelas($id){
    $data = [
        'nm_kelas' => $this->input->post('nm_kelas')
    ];
    $this->db->where('id_kelas', $id);
    $this->db->update('buku_kelas',$data);
}

public function deleteData($id= null,$tabel = null , $idName=null){
    $this->db->where($idName,$id);
    $this->db->delete($tabel);
}


//get tabel buku single
public function getBukuSingle($id)
{
    $this->db->where('id_buku',$id);
    return $this->db->get('buku_induk')->row_array();
}

//get all data absen
public function getAbsen(){
    $query = "SELECT * FROM buku_absen JOIN buku_siswa ON buku_absen.id_siswa = buku_siswa.id_siswa join buku_kelas ON buku_siswa.id_kelas = buku_kelas.id_kelas order by buku_absen.date_absen asc";
    return $this->db->query($query)->result_array();
}


public function getTabelSingle($id, $tabel, $idtabel){

    $this->db->where($idtabel,$id);
    return $this->db->get($tabel)->row_array();
}

public function getTabelSingle1($id, $tabel, $idtabel){
    $this->db->where($idtabel,$id);
    return $this->db->get($tabel)->row_array();
}


public function get1DataBuku($id){
    $this->db->where('no_induk',$id);
    return $this->db->get('buku_induk')->row_array();
}

public function getPinjam(){
    $query = "SELECT * FROM `buku_pinjam` a JOIN buku_siswa b on a.id_siswa = b.id_siswa JOIN buku_induk c on c.id_buku = a.id_buku JOIN buku_kelas d on b.id_kelas = d.id_kelas";
    return $this->db->query($query)->result_array();
}

//mencari data anggota
public function cariBuku(){
    $keyword = $this->input->post('keyword');
    $this->db->like('jd_buku',$keyword);
    $this->db->or_like('penulis',$keyword);
    $this->db->or_like('penerbit',$keyword);
    $this->db->or_like('tmp_terbit',$keyword);
    $this->db->or_like('th_terbit',$keyword);
    $this->db->or_like('isbn',$keyword);
    $this->db->or_like('sumber',$keyword);
    return $this->db->get('buku_induk')->result_array();
}

public function cariSiswa(){
    $keyword = $this->input->post('keyword');
    $this->db->select('*');
    $this->db->from('buku_siswa a'); 
    $this->db->join('buku_kelas b', 'a.id_kelas = b.id_kelas', 'left');
    $this->db->like('no_anggota',$keyword);
    $this->db->or_like('nm_siswa',$keyword);
    $this->db->or_like('nisn',$keyword);
    $this->db->or_like('alamat',$keyword);
    $this->db->or_like('nm_kelas',$keyword);
    return $this->db->get()->result_array();
}

public function cariPinjam(){
    $keyword = $this->input->post('keyword');
    $this->db->select('*');
    $this->db->from('buku_pinjam a'); 
    $this->db->join('buku_siswa b', 'a.id_siswa=b.id_siswa', 'left');
    $this->db->join('buku_induk c', 'a.id_buku=c.id_buku', 'left');
    $this->db->join('buku_kelas d', 'b.id_kelas = d.id_kelas', 'left');
    $this->db->where('a.status_pinjaman',1);
    $this->db->like('b.nm_siswa',$keyword);
    $this->db->or_like('b.nisn',$keyword);
    $this->db->or_like('b.alamat',$keyword);
    $this->db->or_like('d.nm_kelas',$keyword);
    $this->db->or_like('a.jns_pinjam',$keyword);
    $this->db->or_like('c.jd_buku',$keyword);
    return $this->db->get()->result_array();

}


public function getKembali($keyword){
        $this->db->select('*');
        $this->db->from('transaksi a'); 
        $this->db->join('menu_makanan b', 'a.id_makanan=b.id_makanan', 'left');
        $this->db->join('toping c', 'a.id_toping=c.id_toping', 'left');
        $this->db->join('user d', 'a.id = d.id', 'left');
        $this->db->where('a.status',"Diantar");
        if($keyword){
            $this->db->like('d.name',$keyword);
        }
        return $this->db->get()->result_array();
}


public function getTabelSingle2($id,$idtabel){
    $this->db->select('*');
    $this->db->from('buku_pinjam a'); 
    $this->db->join('buku_siswa b', 'a.id_siswa=b.id_siswa', 'left');
    $this->db->join('buku_induk c', 'a.id_buku=c.id_buku', 'left');
    $this->db->join('buku_kelas d', 'b.id_kelas = d.id_kelas', 'left');
    $this->db->where($idtabel,$id);
    return $this->db->get()->row_array();
}

public function getTabelEx($da){
    $this->db->select('*');
    $this->db->from('buku_pinjam a'); 
    $this->db->join('buku_siswa b', 'a.id_siswa=b.id_siswa', 'left');
    $this->db->join('buku_induk c', 'a.id_buku=c.id_buku', 'left');
    $this->db->join('buku_kelas d', 'b.id_kelas = d.id_kelas', 'left');
    $this->db->where('a.status_pinjaman',$da);
    return $this->db->get()->result_array();
    //pastikan get data nya benar dari database
}

public function getTabelKembali(){
    $this->db->select('*');
    $this->db->from('buku_kembali e'); 
    $this->db->join('buku_pinjam a','e.no_pinjaman=a.no_peminjaman', 'left'); 
    $this->db->join('buku_siswa b', 'a.id_siswa=b.id_siswa', 'left');
    $this->db->join('buku_induk c', 'a.id_buku=c.id_buku', 'left');
    $this->db->join('buku_kelas d', 'b.id_kelas = d.id_kelas', 'left');
    return $this->db->get()->result_array();
    //pastikan get data nya benar dari database
}



public function getAllPinjaman(){
    $this->db->select('*');
    $this->db->from('buku_pinjam a'); 
    $this->db->join('buku_siswa b', 'a.id_siswa=b.id_siswa', 'left');
    $this->db->join('buku_induk c', 'a.id_buku=c.id_buku', 'left');
    $this->db->join('buku_kelas d', 'b.id_kelas = d.id_kelas', 'left');
    return $this->db->get()->result_array();
   
}


//get single data dari tabel siswa dan kelas
public function getSiswaKelasBy($id){
    $this->db->select('*');
    $this->db->from('buku_siswa a');
    $this->db->join('buku_kelas b', 'a.id_kelas = b.id_kelas','left');
    $this->db->where('a.id_siswa',$id);
    return $this->db->get()->row_array();
}


public function getAllSiswaKelasBy($id){
    $this->db->select('*');
    $this->db->from('buku_pinjam a'); 
    $this->db->join('buku_siswa b', 'a.id_siswa=b.id_siswa', 'left');
    $this->db->join('buku_induk c', 'a.id_buku=c.id_buku', 'left');
    $this->db->join('buku_kelas d', 'b.id_kelas = d.id_kelas', 'left');
    $this->db->where('b.id_siswa',$id);
    return $this->db->get()->result_array();
}




}