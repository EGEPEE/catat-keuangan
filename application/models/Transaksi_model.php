<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_model {

  function __construct(){
    parent:: __construct();
  }

  function trans_view_all(){
    return $this->db->get("tb_transaksi");
  }

  function trans_view_user($id){
    $this->db->where('id_user', $id);
    return $this->db->get('tb_transaksi');
  }

  function tambah_data($data, $table){
    $this->db->insert($table, $data);
  }

  function edit_data($where, $table){
    return $this->db->get_where($table, $where);
  }

  function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
