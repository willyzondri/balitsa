<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {
  public function index(){
    return $this->db->query('select * from t_permohonan where status=0')->result();
  }

   public function detail(){
    return $this->db->query('select * from t_permohonan where no_permohonan = 1 ')->result();
	 }

	  function get_lahan(){
		$hasil=$this->db->query("SELECT * FROM t_lahan");
		return $hasil;
	}

	function get_no($id){
		$hasil=$this->db->query("SELECT * FROM t_lahan WHERE blok='$id' ORDER BY nomor ASC");
		return $hasil->result();
	}
	function get_data_peneliti($id){
		$hasil=$this->db->query("SELECT * FROM t_permohonan WHERE no_permohonan='$id'");
		return $hasil->result();
	}

	function get_luas($id,$no){
		$hasil=$this->db->query("SELECT * FROM t_lahan WHERE blok='$id' AND nomor='$no'");
		return $hasil->result();
	}
}
