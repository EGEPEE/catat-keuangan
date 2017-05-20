<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public $id_user = '';

	function __construct(){
		parent:: __construct();
		$this->load->model('transaksi_model');
		if($this->session->userdata('logged_in')){
			$session_data =$this->session->userdata('logged_in');
			$this->id_user = $session_data['id_user'];
		}else{
			redirect('login', 'refresh');
		}
	}

	function index()
	{
		$data['post'] = $this->transaksi_model->trans_view_user($this->id_user)->result();
		$this->load->view('transaksi/transaksi_list', $data);

	}

	function tambah(){
		$this->load->view('transaksi/transaksi_tambah');
	}

	function tambah_aksi(){
		$jenis = $this->input->post('jenis');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');
		$jumlah = $this->input->post('jumlah');
		$id_user = $this->id_user;
		$data = array('jenis' => $jenis, 'tanggal' => $tanggal, 'keterangan' => $keterangan, 'jumlah' => $jumlah, 'id_user' => $id_user);
		if($id_user == "" || ($jenis == "" || $tanggal == ""|| $keterangan  == "" || $jumlah == "")){
			redirect('transaksi/tambah');
		}else{
			$this->transaksi_model->tambah_data($data, 'tb_transaksi');
			redirect('transaksi');
		}
	}

	function edit($id){
		$where = array('id_transaksi' => $id);
		$data['post'] = $this->transaksi_model->edit_data($where, 'tb_transaksi')->result();
		$this->load->view('transaksi/transaksi_edit', $data);
	}

	function update(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');
		$jumlah = $this->input->post('jumlah');

		$data = array('jenis' => $jenis, 'tanggal' => $tanggal, 'keterangan' => $keterangan, 'jumlah' => $jumlah);
		$where = array('id_transaksi' => $id);

		$this->transaksi_model->update_data($where, $data, 'tb_transaksi');
		redirect('transaksi');
	}

	function hapus($id){
		$where = array('id_transaksi' => $id);
		$this->transaksi_model->hapus_data($where, 'tb_transaksi');
		redirect('transaksi');
	}
}
