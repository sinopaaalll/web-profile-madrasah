<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{

	public function index()
	{

		$data['slider'] = $this->Slider_m->get_all();
		$data['berita'] = $this->Berita_m->get_all();
		$data['galeri'] = $this->Galeri_m->get_all();

		$this->load->view('component/user/header');
		$this->load->view('landing-page/index', $data);
		$this->load->view('component/user/footer');
	}
}
