<?php
class M_guru extends CI_Model{
	private $table="tbl_guru";
    private $primary="id_guru";
    private $state="status";
	
	function semua($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type)){
            $this->db->like($this->state,'pns');
			$this->db->or_like($this->state,'gtt');
            $this->db->order_by($order_column,$order_type);
		}
        else{
			$this->db->like($this->state,'pns');
			$this->db->or_like($this->state,'gtt');
            $this->db->order_by($order_column,$order_type);
		}
        return $this->db->get($this->table,$limit,$offset);
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
}