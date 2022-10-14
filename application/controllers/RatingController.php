<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('Rating_M');
		if ($this->session->userdata('id_role') == NULL) {
			redirect('login');
		}
	}

	public function list_data_rating()
	{
		$data['title'] = "List Data Rating";
		$data['rating'] = $this->Rating_M->getDataRating()->result();

		$this->load->view('admin-layout/partials/header', $data);
		$this->load->view('admin-layout/partials/navbar');
		$this->load->view('admin-layout/rating/list-data');
		$this->load->view('admin-layout/partials/footer');
	}

	public function edit_data_rating($id)
	{
		if ($this->session->userdata('id_role') != '1' && $this->session->userdata('id_role') != '3') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {

			if ($this->input->post('status')) {
				$this->form_validation->set_rules('status', 'Status', 'required');
			}

			$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

			$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Edit Data Rating";
				$data['rating'] = $this->db->get_where('rating', ['id_rating' => $id])->row_array();

				$this->load->view('admin-layout/partials/header', $data);
				$this->load->view('admin-layout/partials/navbar');
				$this->load->view('admin-layout/rating/edit-data');
				$this->load->view('admin-layout/partials/footer');
			} else {
				$post = $this->input->post(null, TRUE);
				$this->Rating_M->edit($post);

				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Diedit');
					redirect('rating');
				} else {
					$this->session->set_flashdata('success', 'Tidak ada perubahan');
					redirect('rating');
				}
			}
		}
	}

	public function delete_data_rating($id)
	{
		if ($this->session->userdata('id_role') != '1' && $this->session->userdata('id_role') != '3') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$where = array('id_rating' => $id);
			$this->Rating_M->delete($where, 'rating');
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('rating');
			} else {
				$this->session->set_flashdata('error', 'Gagal Menghapus Data');
				redirect('rating');
			}
		}
	}

}