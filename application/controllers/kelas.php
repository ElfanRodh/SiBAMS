<?php
class Kelas extends CI_Controller{
    private $limit=10;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation','pagination','upload'));
        $this->load->model('m_kelas');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='id_kelas',$order_type='dsc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_kelas';
        if(empty($order_type)) $order_type='asc';
        
		//load data
        $data['menu']		="menu.php";		//menu sisi kiri
		$data['title']		="kelas"; 			//judul
        $data['content']	="kelas/index.php"; 	//konten
        $data['kelas']		=$this->m_kelas->semua($this->limit,$offset,$order_column,$order_type)->result();
		// $data['jurusan'] 	=$this->m_kelas->data_jurusan();
        
		//pagination atau pengalamatan
		$config['base_url']		=site_url('kelas/index/');
        $config['total_rows']	=$this->m_kelas->jumlah();
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
		
		//parser
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();		
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
        $this->load->view('admin/template',$data);
    }
	
	function nonaktif($offset=0,$order_column='id_guru',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_guru';
        if(empty($order_type)) $order_type='asc';
        
		//load data
        $data['menu']		="menu.php";		//menu sisi kiri
		$data['title']		="guru non aktif"; 	//judul
        $data['content']	="guru/nonaktif.php"; //konten
        $data['guru']		=$this->m_guru->semua_non($this->limit,$offset,$order_column,$order_type)->result();
        
		$config['base_url']=site_url('guru/index/');
        $config['total_rows']=$this->m_guru->jumlah_nonaktif();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        
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
		
		//parser
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
		
        $this->load->view('admin/template',$data);
    }
	
	function detail($id_guru){
		$data['menu']		="menu.php";		//menu sisi kiri
		$data['title']		="detail guru"; 			//judul
        $data['content']	="guru/detail.php"; //konten
        $data['guru']		=$this->m_guru->cek($id_guru)->row_array(); //ambil data
		$this->load->view('admin/template',$data);
	}
	
	function detail_nonaktif($id_guru){
		$data['menu']		="menu.php";		//menu sisi kiri
		$data['title']		="detail guru"; 			//judul
        $data['content']	="guru/detail_non.php"; //konten
        $data['guru']		=$this->m_guru->cek($id_guru)->row_array(); //ambil data
		$this->load->view('admin/template',$data);
	}
	
	function hapus($id_guru){
		$data['menu']		="menu.php";		//menu sisi kiri
		$data['title']		="hapus guru guru"; 			//judul
        $data['content']	="guru/hapus.php"; //konten
        $data['guru']		=$this->m_guru->cek($id_guru)->row_array(); //ambil data
		$this->load->view('admin/template',$data);
	}
    
    function hapus_proses($id_gurukirim){
		$status='nonaktif';
		$info=array(
			'id_guru'=>$id_gurukirim,
			// 'nama_guru'=>$this->input->post('nama'),
			// 'tmpt_lahir'=>$this->input->post('tempat'),
			// 'tgl_lahir'=>$this->input->post('ttl'),
			// 'jenis_kelamin'=>$this->input->post('jk'),
			// 'agama'=>$this->input->post('agama'),
			// 'pendidikan_akhir'=>$this->input->post('pendidikan'),
			'status'=>$status,
			// 'alamat'=>$this->input->post('alamat')
		);
        $this->m_guru->update_hapus($info,$id_gurukirim);
		$this->session->set_flashdata('m_sukses','Data guru sudah berhasil dinonaktifkan!');
		redirect('guru');
    }
	
	function edit($id_guru){
		$data['menu']	="menu.php";		//menu sisi kiri
		$data['title']	="edit guru"; 		//judul
        $data['content']="guru/edit.php"; 	//konten
        $data['guru']	=$this->m_guru->cek($id_guru)->row_array(); //ambil data
		$this->load->view('admin/template',$data);
	}
	
	function edit_proses($id_gurukirim){
		//$id_gurukirim=$this->input->post('id_guru'); 		// mendapatkan input dari kode
		$info=array(
			'id_guru'=>$id_gurukirim,
			'nama_guru'=>$this->input->post('nama'),
			'tmpt_lahir'=>$this->input->post('tempat'),
			'tgl_lahir'=>$this->input->post('ttl'),
			'jenis_kelamin'=>$this->input->post('jk'),
			'agama'=>$this->input->post('agama'),
			'pendidikan_akhir'=>$this->input->post('pendidikan'),
			'status'=>$this->input->post('status'),
			'alamat'=>$this->input->post('alamat')
		);
		$this->m_guru->update($info, $id_gurukirim);
		$this->session->set_flashdata('m_sukses','Data guru sudah berhasil diedit!');
		redirect('guru');
	}
    
    function tambah(){
		$data['menu']	="menu.php";		//menu sisi kiri
		$data['title']	="guru tambah"; 		//judul
		$data['content']="guru/tambah.php";        
		$this->load->view('admin/template',$data);
    }
	
	function tambah_angkatan(){
		$data['menu']	="menu.php";		//menu sisi kiri
		$data['title']	="Angatan tambah"; 		//judul
		$data['content']="kelas/tambah_angkatan.php";
		$data['jurusan'] = $this->m_kelas->data_jurusan();
		$data['walikelas'] = $this->m_kelas->data_walikelas();
		$this->load->view('admin/template',$data);
    }
	
	function tambah_angkatan_proses(){
		$tahun=$this->input->post('tahun'); 
		$jurusan=$this->input->post('jurusan'); 
		$walikelas=$this->input->post('walikelas'); 
		$id=$tahun.$jurusan; 		// mendapatkan input dari kode
		$cek=$this->m_kelas->cek($id); 			// cek kode di database
		if($cek->num_rows()>0){ 				// jika kode sudah ada, maka tampilkan pesan
			$this->session->set_flashdata('message','Id kelas sudah ada!');
			redirect('kelas/tambah_angkatan');
		}else { 								// jika kode buku belum ada, maka simpan
			$info=array(
				'id_kelas'=>$id,
				'id_jurusan'=>$jurusan,
				'tahun_ajaran'=>$tahun,
				'walikelas'=>$walikelas
			);
			$this->m_kelas->simpan($info);
			$this->session->set_flashdata('m_sukses','Data kelas berhasil ditambahkan!');
			redirect('kelas');
		}
	}
	
    function tambah_proses(){	
		$id=$this->input->post('id_guru'); 		// mendapatkan input dari kode
		$cek=$this->m_guru->cek($id); 			// cek kode di database
		if($cek->num_rows()>0){ 				// jika kode sudah ada, maka tampilkan pesan
			$this->session->set_flashdata('message','Id guru sudah ada!');
			redirect('guru/tambah');
		}else { 								// jika kode buku belum ada, maka simpan
			$info=array(
				'id_guru'=>$this->input->post('id_guru'),
				'nama_guru'=>$this->input->post('nama'),
				'tmpt_lahir'=>$this->input->post('tempat'),
				'tgl_lahir'=>$this->input->post('ttl'),
				'jenis_kelamin'=>$this->input->post('jk'),
				'agama'=>$this->input->post('agama'),
				'pendidikan_akhir'=>$this->input->post('pendidikan'),
				'status'=>$this->input->post('status'),
				'alamat'=>$this->input->post('alamat')
			);
			$this->m_guru->simpan($info);
			$this->session->set_flashdata('m_sukses','Data guru berhasil ditambahkan!');
			redirect('guru');
		}
    }
	
	function cari(){
		$data['title']	="Pencarian Guru";
		$data['content']="guru/cari.php";
		$data['menu']	="menu.php";		//menu sisi kiri
        $cari=$this->input->post('cari');
		if ($cari==null){
			//$this->session->set_flashdata('m_eror','Inputkan pencarian terlebih dahulu!');
			redirect('guru/');
		}
		else{
			$cek=$this->m_guru->cari($cari);
			$hasil=$cek->num_rows();
			if($hasil>0){
				$data['guru']=$cek->result();
				$data['ketemu']='<b>'.$hasil.' </b> data ditemukan berdasar pencarian <b>'.$cari.'</b>';
				$data['jumlah']=$hasil;
				$this->load->view('admin/template',$data);
			}else{
				$this->session->set_flashdata('m_eror','Pencarian data <b>'.$cari.'</b> tidak ditemukan!');
				$data['guru']=$cek->result();
				redirect('guru/');
			}
		}
        
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('kode','Kode Buku','required|max_length[5]');
        $this->form_validation->set_rules('judul','Judul Buku','required|max_length[100]');
        $this->form_validation->set_rules('pengarang','Pengarang','required|max_length[50]');
        $this->form_validation->set_rules('klasifikasi','Klasifikasi','required|max_length[25]');
    }
}