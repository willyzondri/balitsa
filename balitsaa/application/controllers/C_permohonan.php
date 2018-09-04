<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_permohonan extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_permohonan');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('v_login');
	}

		public function login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$otoritas = $this->input->post('otorisasi');
			$cek = $this->M_permohonan->proseslogin($username,$password,$otoritas);
			$hasil=count($cek);
			if ($hasil>0) {
				if($otoritas == 'peneliti'){
						$select = $this->db->get_where('t_login',array('username'=>$username, 'password'=>$username,'otoritas'=>$otoritas))->row();
						$data = array('logged_in' =>true ,'loger'=> $username );
						$this->session->set_userdata($data);

						//$this->load->view('v_dPeneliti');
						redirect('search/tampil_peneliti')	;


			} else if($otoritas == 'admin'){
					$select = $this->db->get_where('t_login',array('username'=>$username, 'password'=>$username,'otoritas'=>$otoritas))->row();
							$data = array('logged_in' =>true ,'loger'=> $username );
					$this->session->set_userdata($data);

					//$this->load->view('v_dAdmin');
					redirect('search/tampil_admin');

		}
		// $this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		// if ($this->form_validation->run() == FALSE)
		// {
		// 	redirect('c_permohonan/index')	;
		// }
		// else
		// {
		//
		// }
		}

	}

	public function masuk(){
		$nip_user = $this->session->userdata('loger');
		$data['pegawai'] = $this->M_permohonan->dataPemohon($nip_user);
		$data['blok'] = $this->M_permohonan->dataLahan();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kelompok', 'kelompok', 'required');
    $this->form_validation->set_rules('penanggung', 'penanggung', 'required');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('v_permohonan',$data);
                }
                else
                {
                        $this->M_permohonan->insert_permohonan();
												$this->load->view('v_dPeneliti');
                }
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}


	public function tampil_konfirmasi()
	{
		$id = array(
				'no_permohonan' => $this->input->get('id')
			);
			$data['detail'] = $this->M_permohonan->data_konfirmasi($id,'t_permohonan')->result();
			$this->load->view('v_konfirmasi',$data);
	}

	public function tampil_detail()
	{
			$id = array(
				'no_permohonan' => $this->input->get('id')
			);
			$data['detail'] = $this->M_permohonan->data_konfirmasi($id,'t_permohonan')->result();
			$this->load->view('v_dataPermohonan',$data);
	}

	public function get_detail($id)
    {
        $data = $this->M_permohonan->get_data_permohonan($id);
        echo json_encode($data);
    }

}
