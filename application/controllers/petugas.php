<?php
class Petugas extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_petugas');
        $this->load->library(array('form_validation','template'));
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index(){
		$data['title']		="Petugas";
        $data['menu']		="menu.php";			//menu sisi kiri
		$data['content']	="petugas/index.php"; //konten        
        $data['petugas']=$this->m_petugas->semua()->result();
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
        $this->load->view('admin/template',$data);
    }
    
    function tambah(){
        $data['title']		="Tambah Petugas";
        $data['menu']		="menu.php";			//menu sisi kiri
		$data['content']	="petugas/tambah.php"; //konten  
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $user=$this->input->post('user');
            $cek=$this->m_petugas->cekKode($user);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Username sudah digunakan</div>";
                $this->template->display('petugas/tambah',$data);
            }else{
                $info=array(
                    'user'=>$this->input->post('user'),
                    'password'=>md5($this->input->post('password'))
                );
                $this->m_petugas->simpan($info);
                redirect('petugas/petugas/add_success');
            }
        }else{
            $data['message']="";
            $this->load->view('admin/template',$data);
        }
    }
    
    function edit($id){
		$data['title']		="Edit Data Petugas";
        $data['menu']		="menu.php";			//menu sisi kiri
		$data['content']	="petugas/editpetugas.php"; //konten
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $id=$this->input->post('id');
            $info=array(
                'user'=>$this->input->post('user'),
                'password'=>md5($this->input->post('password'))
            );
            $this->m_petugas->update($id,$info);
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            $this->load->view('admin/template',$data);
        }else{
            $data['message']="";
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $this->load->view('admin/template',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_petugas->hapus($kode);
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('user','username','required|trim');
        $this->form_validation->set_rules('password','password','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
	
	function cari(){
        $data['title']="Pencarian petugas";
		$data['content']="petugas/cari.php";
		$data['menu']		="menu.php";		//menu sisi kiri
        $cari=$this->input->post('cari');
        $cek=$this->m_petugas->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['petugas']=$cek->result();
            $this->load->view('admin/template',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['petugas']=$cek->result();
            $this->load->view('admin/template',$data);
        }
    }
    
    function logout(){
        $this->session->unset_userdata('username');
        redirect('web');
    }
}