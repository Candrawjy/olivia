<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class ProdukAPIController extends RestController {

	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('ProdukAPI_M');
		// if ($this->session->userdata('id_role') == NULL) {
		// 	redirect('login');
		// }
	}

	public function index_get()
	{
		$response = $this->ProdukAPI_M->all_produk();

		$this->response($response);
	}

	public function produk_get($id)
	{
		$all = $this->db->select('umkm_jasa.*, jenis_kategori.*, produk.*, produk.deskripsi as deskripsi_produk')->from('produk')->join('umkm_jasa', 'umkm_jasa.id_umkm_jasa = produk.id_umkm_jasa')->join('jenis_kategori', 'jenis_kategori.id_jeniskategori = produk.id_jeniskategori')->where('produk.id_produk', $id)->get()->row_array();
		$response['status'] = 200;
		$response['error'] = false;
		$response['produk'] = $all;

		$this->response($response);
	}

	public function addproduk_post()
	{
		$response = $this->ProdukAPI_M->add_produk(
			$this->post('id_umkm_jasa'),
			$this->post('id_jeniskategori'),
			$this->post('nama_produk'),
			$this->post('deskripsi'),
			$this->post('harga'),
			$this->post('foto'),
		);

		$this->response($response);
	}

	public function deleteproduk_delete()
	{
		$response = $this->ProdukAPI_M->delete_produk(
			$this->delete('id_produk')
		);

		$this->response($response);
	}

	public function updateproduk_put()
	{
		$response = $this->ProdukAPI_M->update_produk(
			$this->put('id_produk'),
			$this->put('id_umkm_jasa'),
			$this->put('id_jeniskategori'),
			$this->put('nama_produk'),
			$this->put('deskripsi'),
			$this->put('harga'),
			$this->put('foto'),
		);

		$this->response($response);
	}

}
