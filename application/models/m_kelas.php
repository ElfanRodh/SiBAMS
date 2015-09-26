<?php
class M_kelas extends CI_Model{
	private $table="kelas";
    private $primary="id_kelas";
    private $state="status";
	
	function semua($limit=10,$offset=0,$order_column='',$order_type='dsc'){
        // $data=$this->db->get($this->table,$limit,$offset);
        // return $data;
		$this->db->select('paket_pekerjaan.Kode_Pkt_Pekerjaan,paket_pekerjaan.Nama_Pkt_Pkrjaan,paket_pekerjaan.Nilai,bidang.nama_bidang,periode.Nama_Periode')
		->join('bidang','bidang.id_bidang=paket_pekerjaan.id_bidang')
		->join('periode','periode.id_periode=paket_pekerjaan.ID_Periode');
		return $this->db->get('paket_pekerjaan')->result();
    }
	
	function semua_non($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type)){
            $this->db->like($this->state,'nonaktif');
            $this->db->order_by($this->primary,'asc');
		}
        else{
            $this->db->order_by($order_column,$order_type);
			$this->db->like($this->state,'nonaktif');
		}
        return $this->db->get($this->table,$limit,$offset);
    }
	
	function cek($id){
        $this->db->where($this->primary,$id);
        $query=$this->db->get($this->table);        
        return $query;
    }
	
	function simpan($info){
        $this->db->insert($this->table,$info);
        return $this->db->insert_id();
    }
	
	function update($info, $id){
        $this->db->where($this->primary, $id);
		$this->db->update($this->table, $info);
    }
	
	function update_hapus($info,$id){
        $this->db->where($this->primary, $id);
		$this->db->update($this->table, $info);
    }
	
	function jumlah(){
		$this->db->like($this->state, 'pns');
		$this->db->or_like($this->state, 'gtt');
		$this->db->from($this->table);
		return $this->db->count_all_results();
		// $this->db->where($this->state,'pns');
		// $this->db->where($this->state,'gtt');
        // return $this->db->count_all($this->table);
    }
	
	function jumlah_nonaktif(){
		$this->db->like($this->state, 'nonaktif');
		$this->db->from($this->table);
		return $this->db->count_all_results();
		// $this->db->where($this->state,'pns');
		// $this->db->where($this->state,'gtt');
        // return $this->db->count_all($this->table);
    }
	
	function cari($cari){
        $this->db->like($this->primary,$cari);
		$this->db->or_like("nama_guru",$cari);
        return $this->db->get($this->table);
    }
	
	function data_walikelas()
	{
		$q = $this->db->query("select * from tbl_guru order by id_guru");
		return $q;
	}
	
	function data_jurusan()
	{
		$q = $this->db->query("select * from jurusan order by id_jurusan");
		return $q;
	}
}