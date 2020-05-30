<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$data['titulo']='Principal';
	// 	$this->load->view('partes/head/header');
	// 	$this->load->view('partes/nav/navbar',$data);
	// 	$this->load->view('front/principal');
	// 	$this->load->view('partes/foot/footer');
	// }

	public function index()
	{
		$data['titulo']='Home';

		$this->load->view('partes/head/header', $data);
		$this->load->view('partes/nav/navbar');
		$this->load->view('partes/contenido/home-section');
		$this->load->view('partes/contenido/service-section');
		$this->load->view('partes/contenido/program-section');
		$this->load->view('partes/contenido/event-section');
		$this->load->view('partes/contenido/why_choose-section');
		$this->load->view('partes/contenido/contact-section');
		$this->load->view('partes/foot/footer');
	}
}
