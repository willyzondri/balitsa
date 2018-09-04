<?php
	defined('BASEPATH') or die('not allowed direct access script');

	class Search extends Ci_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('M_permohonan');
			$this->load->helper('url');

		}

	public function tampil(){
		$nip_user = $this->session->userdata('loger');
		$data['pegawai'] = $this->M_permohonan->dataPemohon($nip_user);
		$data['blok'] = $this->M_permohonan->dataLahan();
		$this->load->helper('url');
		$this->load->view('v_permohonan',$data);
	}

	public function tampil_permohonan(){
		$data['data']= $this->M_permohonan->data_permohonan()->result_array();
		$this->load->helper('url');
		$this->load->view('v_dataPermohonan',$data);
	}
	public function tampil_peneliti(){
		$this->load->view('v_dPeneliti');
	}

	public function tampil_admin(){
		$this->load->view('v_dAdmin');
	}

	public function data_permohonan_user(){
		$nip_user = $this->session->userdata('loger');
		$data['laporan'] = $this->M_permohonan->data_permohonan_peneliti($nip_user);
		$this->load->helper('url');
		//print_r($data);
		$this->load->view('v_data_permohonan_peneliti',$data);
	}

	public function tampil_pengguna(){
	$data['data']= $this->M_permohonan->getPengguna()->result_array();
	$this->load->helper('url');
	$this->load->view('v_dataPengguna',$data);
}
}
