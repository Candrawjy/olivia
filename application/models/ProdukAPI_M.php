<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukAPI_M extends CI_Model
{

	public function all_produk(){
		$all = $this->db->select('umkm_jasa.*, jenis_kategori.*, produk.*, produk.deskripsi as deskripsi_produk')->from('produk')->join('umkm_jasa', 'umkm_jasa.id_umkm_jasa = produk.id_umkm_jasa')->join('jenis_kategori', 'jenis_kategori.id_jeniskategori = produk.id_jeniskategori')->order_by('produk.created_at','DESC')->get()->result();
		$response['status'] = 200;
		$response['error'] = false;
		$response['produk'] = $all;
		return $response;
	}

	public function empty_response()
	{
		$response['status'] = 502;
		$response['error'] = true;
		$response['message'] = 'Field tidak boleh kosong';

		return $response;
	}

	public function add_produk($id_umkm_jasa,$id_jeniskategori,$nama_produk,$deskripsi,$harga,$foto)
	{
		if(empty($id_umkm_jasa) || empty($id_jeniskategori) || empty($nama_produk) || empty($deskripsi) || empty($harga)){
			return $this->empty_response();
		} else {
			$data = array(
				"id_umkm_jasa" => $id_umkm_jasa,
				"id_jeniskategori" => $id_jeniskategori,
				"nama_produk" => $nama_produk,
				"deskripsi" => $deskripsi,
				"harga" => $harga,
				"foto" => $foto,
			);

			$insert = $this->db->insert("produk", $data);

			if($insert){
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data produk ditambahkan.';
				
				return $response;

			} else {
				$response['status'] = 502;
				$response['error'] = true;
				$response['message'] = 'Data produk gagal ditambahkan.';
				
				return $response;
			}
		}
	}

	public function delete_produk($id_produk)
	{
		if($id_produk == ''){
			return $this->empty_response();
		} else {
			$where = array(
				"id_produk" => $id_produk
			);
			$this->db->where($where);
			$delete = $this->db->delete("produk");

			if($delete){
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data produk dihapus.';

				return $response;
			} else {
				$response['status'] = 502;
				$response['error'] = true;
				$response['message'] = 'Data produk gagal dihapus.';

				return $response;
			}
		}
	}

	public function update_produk($id_produk,$id_umkm_jasa,$id_jeniskategori,$nama_produk,$deskripsi,$harga,$foto)
	{
		if($id_produk == '' || empty($id_umkm_jasa) || empty($id_jeniskategori) || empty($nama_produk) || empty($deskripsi) || empty($harga)){
			return $this->empty_response();
		} else {
			$where = array(
				"id_produk" => $id_produk
			);

			$set = array(
				"id_umkm_jasa" => $id_umkm_jasa,
				"id_jeniskategori" => $id_jeniskategori,
				"nama_produk" => $nama_produk,
				"deskripsi" => $deskripsi,
				"harga" => $harga,
				"foto" => $foto,
			);
			$this->db->where($where);
			$update = $this->db->update("produk",$set);

			if($update){
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data produk diubah.';

				return $response;
			}else{
				$response['status'] = 502;
				$response['error'] = true;
				$response['message'] = 'Data produk gagal diubah.';

				return $response;
			}
		}
	}

}