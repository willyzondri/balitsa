<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_permohonan extends CI_Model {
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function proseslogin($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('t_login')->row();
	}

	public function dataPemohon($nip_user){
		 // return $this->db->query('SELECT * FROM t_peneliti AS pe INNER JOIN t_login AS lo WHERE pe.nip = "195407051979021001"')->result();
		 return $this->db->query("SELECT * FROM t_login tl INNER JOIN t_peneliti tp ON tp.nip = tl.nip WHERE tp.nip = '${nip_user}'")->result();
	}

	public function data_permohonan_peneliti($nip_user){
		 return $this->db->query("SELECT * FROM t_permohonan WHERE nip = '${nip_user}'")->result();
	}

	public function dataLahan(){
		return $this->db->query('SELECT * FROM t_blok')->result();
	}

	public function dataLuasLahan(){
		return $this->db->query('SELECT * FROM t_lahan')->result();
	}

	public function insert_permohonan(){
		$no = $this->input->post('no');
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$kelompok = $this->input->post('kelompok');
		$penanggung = $this->input->post('penanggung');
		$sumber = $this->input->post('sumber');
		$judul = $this->input->post('judul');
		$kode = $this->input->post('kode');
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		$komoditas = $this->input->post('komoditas');
		$luas = $this->input->post('luas');
		$blok = $this->input->post('blok');
		$no_lahan = $this->input->post('no_lahan');
		$tanaman = $this->input->post('tanaman');
		$object = array(
				'no_permohonan'=> $no,
				'nip'=> $nip,
				'nm_peneliti'=> $nama,
				'klmpok_peneliti'=> $kelompok,
				'penanggung_jawab'=> $penanggung,
				'sumber_dana'=>$sumber,
				'judul_kegiatan'=> $judul,
				'kd_kegiatan'=> $kode,
				'waktu_mulai'=>$mulai,
				'waktu_selesai'=>$akhir,
				'komoditas'=> $komoditas,
				'kd_lahan'=>null,
				'luas_lahan'=>$luas,
				'tanaman_sebelumnya'=> $tanaman,
				'keterangan'=> 'Belum Acc',
				'status'=>0
			);
			// print_r($object);
		return $this->db->insert('t_permohonan',$object);

	}

public function data_permohonan(){
	return $this->db->get('t_permohonan');
}

  public function data_konfirmasi($kode,$table) {
        return $this->db->get_where($table,$kode);
    }

    function get_data_permohonan($id){
		$hasil=$this->db->query("SELECT * FROM t_permohonan WHERE no_permohonan='$id'");
		return $hasil->result();
	}

	public function getPengguna(){
		return $this->db->get('t_login');
}

}
