<?php
class Pembayaran extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation','template'));
        $this->load->model('m_peminjaman');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index(){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_guru';
        if(empty($order_type)) $order_type='asc';
        
		//load data
        $data['menu']		="menu.php";		//menu sisi kiri
		$data['title']		="Pembayaran"; 	//judul
        $data['content']	="Pembayaran/index.php"; //konten
        
		//style untuk pengalamatan dengan bootstrap
		$config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";	
		
		$this->load->view('admin/template',$data);
    }
	
	function spp(){
		$data['menu']	="menu.php";		//menu sisi kiri
		$data['title']	="guru tambah"; 		//judul
		$data['content']="pembayaran/spp.php";        
		$this->load->view('admin/template',$data);
    }
}