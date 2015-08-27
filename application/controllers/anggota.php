<?php
class Anggota extends CI_Controller{
    private $limit=20;
    
	function __construct(){
        parent::__construct();
        $this->load->library(array('template','pagination','form_validation','upload'));
        $this->load->model('m_anggota');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }	
    }
    
    function index($offset=0,$order_column='nis',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='nis';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['anggota']	=$this->m_anggota->semua($this->limit,$offset,$order_column,$order_type)->result();
		$data['menu']		="menu.php";		//menu sisi kiri
		$data['title']		="Siswa"; 	//judul
        $data['content']	="anggota/tampil.php"; //konten
        
		//pagination atau pengalamatan
        $config['base_url']		=site_url('anggota/index/');
        $config['total_rows']	=$this->m_anggota->jumlah();
        $config['per_page']		=$this->limit;
        $config['uri_segment']	=3;
		
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

        $this->pagination->initialize($config);
        $data['pagination']		=$this->pagination->create_links();        
        
		//message atau tampilan pesan
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->load->view('admin/template',$data);
    }
    
    function edit($id){
        $data['title']="Edit Data Anggota";
		$data['menu']		="menu.php";		//menu sisi kiri
		$data['content']="anggota/edit.php";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nis=$this->input->post('nis');
            //setting konfiguras upload image
            $config['upload_path'] 		= './assets/img/anggota/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000';
			$config['max_width']  		= '2000';
			$config['max_height']  		= '1024';
                
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }
            
            $info=array(
                'nama'=>$this->input->post('nama'),
                'kelas'=>$this->input->post('kelas'),
                'ttl'=>$this->input->post('ttl'),
                'jk'=>$this->input->post('jk'),
                'image'=>$gambar
            );
            //update data angggota
            $this->m_anggota->update($nis,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            //tampilkan data anggota 
            $data['anggota']=$this->m_anggota->cek($id)->row_array();
            $this->load->view('admin/template',$data);
        }else{
            $data['anggota']=$this->m_anggota->cek($id)->row_array();
            $data['message']="";
            $this->load->view('admin/template',$data);
        }
    }    
    
    function tambah(){
        $data['title']="Tambah Data Anggota";		
		$data['menu']		="menu.php";		//menu sisi kiri
		$data['content']="anggota/tambah.php";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nis=$this->input->post('nis');
            $cek=$this->m_anggota->cek($nis);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-warning'>Nis sudah digunakan</div>";
                $this->load->view('admin/template',$data);
            }else{
                //setting konfigurasi upload image
                $config['upload_path'] 	= base_url().'assets/img/anggota/';
				$config['allowed_types']= 'gif|jpg|png';
				$config['max_size']		= '1000';
				$config['max_width']  	= '2000';
				$config['max_height']  	= '1024';
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }
                
                $info=array(
                    'nis'=>$this->input->post('nis'),
                    'nama'=>$this->input->post('nama'),
                    'jk'=>$this->input->post('jk'),
                    'ttl'=>$this->input->post('ttl'),
                    'kelas'=>$this->input->post('kelas'),
                    'image'=>$gambar
                );
                $this->m_anggota->simpan($info);
                redirect('anggota');
            }
        }else{
            $data['message']="";
            $this->load->view('admin/template',$data);
        }
    }    
    
    function hapus(){
        $kode=$this->input->post('kode');
		$data['menu']		="menu.php";		//menu sisi kiri
        $detail=$this->m_anggota->cek($kode)->result();
		foreach($detail as $det):
			unlink("assets/img/anggota/".$det->image);
		endforeach;
			$this->m_anggota->hapus($kode);
    }
    
    function cari(){
        $data['title']="Pencarian";
		$data['menu']		="menu.php";		//menu sisi kiri
		$data['content']="anggota/cari.php";
        $cari=$this->input->post('cari');
        $cek=$this->m_anggota->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['anggota']=$cek->result();
            $this->load->view('admin/template',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['anggota']=$cek->result();
            $this->load->view('admin/template',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('nis','NIS','required|max_length[10]');
        $this->form_validation->set_rules('nama','Nama','required|max_length[50]');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required|max_length[2]');
        $this->form_validation->set_rules('ttl','Tanggal Lahir','required');
        $this->form_validation->set_rules('kelas','Kelas','required|max_length[10]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}