<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebutuhan extends CI_Controller {
	public $id_user = '';

	function __construct(){
		parent:: __construct();
		$this->load->model('kebutuhan_model');

		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$this->id_user = $session_data['id_user'];
		}else {
			redirect('login', 'refresh');
		}
		}

	function index(){
		$data['post'] = $this->kebutuhan_model->post_view_all()->result();
    $this->load->view('kebutuhan/kebutuhan_list', $data);
	}

	function tambah(){
		$this->load->view('kebutuhan/kebutuhan_tambah');
	}

	function tambah_aksi(){
		$id_user =  $this->id_user;
		$tanggal = $this->input->post('tanggal');
		$catatan = $this->input->post('catatan');
		$data = array('id_user' => $id_user, 'catatan' => $catatan, 'tanggal' => $tanggal);

		if($id_user == "" || ($tanggal == ""|| $catatan == "")){
			redirect('transaksi/tambah');
		}else{
			$this->kebutuhan_model->tambah_data($data, 'tb_kebutuhan');
			redirect('kebutuhan');
		}
	}

	function edit($id){
		$where = array('id_kebutuhan' => $id);
		$data['post'] = $this->kebutuhan_model->edit_data($where, 'tb_kebutuhan')->result();
		$this->load->view('kebutuhan/kebutuhan_edit', $data);
	}

	function update(){
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$catatan = $this->input->post('catatan');

		$data = array('tanggal' => $tanggal, 'catatan' => $catatan);
		$where = array('id_kebutuhan' => $id);

		$this->kebutuhan_model->update_data($where, $data, 'tb_kebutuhan');
		redirect('kebutuhan');
	}

	function hapus($id){
		$where = array('id_kebutuhan' =>$id);
		$this->kebutuhan_model->hapus_data($where, 'tb_kebutuhan');
		redirect('kebutuhan');
	}
}
