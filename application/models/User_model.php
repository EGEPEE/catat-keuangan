<?php
/**
 *
 */
  class User_model extends CI_Model
  {
    function user_view_all(){
      return $this->db->get("user");
    }

    function tambah_data($data,$table){
      $this->db->insert($table, $data);
    }
    
    function login($email, $password){
      $this->db->where('email', $email);
      $this->db->where('password', $password);
      $this->db->limit(1);
      $query = $this->db->get('user');
      if ($query->num_rows()==1) {
        return $query->result();
      }else{
        return false;
      }
    }
  }

 ?>
