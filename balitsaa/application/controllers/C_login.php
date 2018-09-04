<?php
	defined('BASEPATH') or die('not allowed direct access script');

	class C_login extends Ci_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('M_login');
			$this->load->helper('url');

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


}
