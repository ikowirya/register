<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
	}
	public function index($idPegawai)
	{
		$data['data_pegawai']=$this->pegawai_model->getAnakByPegawai($idPegawai);
		$this->load->view('anak',$data);	
	}

}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>