<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Galery_model extends CI_Model{


   private $table_galery = 'table_galery';

   function retrieveFoto($id_foto = null){
      $this->db->from($this->table_galery);
      if($id_foto != null){
         $this->db->where('id_foto', $id_foto);
      }

      $query = $this->db->get();
      return $query;
   }

   function addFoto($data){
      $this->db->insert($this->table_galery, $data);
   }

   function checkFile($id_foto){
      $query = $this->db->get_where($this->table_galery, ['id_foto' => $id_foto]);
      return $query->row();
  }

  function deleteActi($id_foto){
      return $this->db->delete($this->table_galery ,['id_foto'=>$id_foto]);
  }
}