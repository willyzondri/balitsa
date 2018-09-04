<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

  public function __construct(){

		parent::__construct();
		$this->load->model('M_api');
	}

  public function index() {
    $data = $this->M_api->index();
    // $this->load->view('v_dAdmin',$data);
    echo json_encode($data,TRUE);
    //print_r($data);
  }
  public function detail() {
    $detail = $this->M_api->detail();
    // $this->load->view('v_dAdmin',$data);
    echo json_encode($detail,TRUE);
    //print_r($data);
  }

  function get_nomor(){
    $id=$this->input->post('id');
    $data=$this->M_api->get_no($id);
    echo json_encode($data);
  }

  function get_luas(){
    $id=$this->input->post('id');
    $no=$this->input->post('no');
    $data=$this->M_api->get_luas($id,$no);
    echo json_encode($data);
  }
}
?>
