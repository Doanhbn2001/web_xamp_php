<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertData($ten,$tuoi,$sdt,$anhavatar,$sodonhang,$linkfb){
		$dulieu = array(
			'ten' => $ten,
			'tuoi' => $tuoi,
			'sdt' => $sdt,
			'sodonhang' => $sodonhang,
			'linkfb' => $linkfb,
			'anhavatar' => $anhavatar,
		);
		$this->db->insert('nhan_viien', $dulieu);
		return $this->db->insert_id();
	}
	public function getAllData(){
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$dulieu = $this->db->get('nhan_viien');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function getDataById($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('nhan_viien');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function xoaNhansu($id){
		$this->db->where('id', $id);
		return $this->db->delete('nhan_viien');
	}
	public function updateById($id,$ten,$tuoi,$sdt,$anhavatar,$linkfb,$sodonhang){
		$dulieuupdate = array('id'=>$id,'ten'=>$ten,'tuoi'=>$tuoi,'sdt'=>$sdt,'linkfb'=>$linkfb,'sodonhang'=>$sodonhang,'anhavatar'=>$anhavatar);
		$this->db->where('id', $id);
		return $this->db->update('nhan_viien', $dulieuupdate);
	}
}

/* End of file model.php */
/* Location: ./application/models/model.php */