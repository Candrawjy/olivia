<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Landing_M');
	}

	public function index()
	{
		$data['title'] = "Beranda";
		$data['produk'] = $this->Landing_M->getDataProduk()->result();
		$data['jasa'] = $this->Landing_M->getDataJasa()->result();

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/partials/navbar-landing');
		$this->load->view('user-layout/landing-page');
		$this->load->view('user-layout/partials/footer');
	}

	public function bantuan()
	{
		$data['title'] = "Bantuan";

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/partials/navbar-landing');
		$this->load->view('user-layout/bantuan');
		$this->load->view('user-layout/partials/footer');
	}

	public function kontak_kami()
	{
		$data['title'] = "Kontak Kami";

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/partials/navbar-landing');
		$this->load->view('user-layout/kontak');
		$this->load->view('user-layout/partials/footer');
	}

	public function tentang_kami()
	{
		$data['title'] = "Tentang Kami";

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/partials/navbar-landing');
		$this->load->view('user-layout/tentang');
		$this->load->view('user-layout/partials/footer');
	}

	public function berita()
	{
		$data['title'] = "Berita";
		$url = "https://newsapi.org/v2/top-headlines?country=id&category=business&apiKey=59ad660d50c94810b690e17c4a8a549b";
		$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
		$context = stream_context_create($opts);
		$html = file_get_contents($url, false,$context);
		$html = json_decode($html);
		$data['berita'] = $html;
		// $data['berita'] = json_decode(file_get_contents('http://newsapi.org/v2/top-headlines?country=id&apiKey=59ad660d50c94810b690e17c4a8a549b'));

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/partials/navbar');
		$this->load->view('user-layout/berita');
		$this->load->view('user-layout/partials/footer');
	}

	public function lokasi()
	{
		$data['title'] = "Lokasi";
		$data['lokasi'] = $this->Landing_M->getDataLokasi()->result();

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/partials/navbar');
		$this->load->view('user-layout/lokasi');
		$this->load->view('user-layout/partials/footer');
	}

}