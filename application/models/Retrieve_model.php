<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retrieve_model extends CI_Model{

    //DB TABLES
    private $table_estudante   = 'table_estudante';
    private $table_curso       = 'table_curso';
    private $table_funcionario = 'table_funcionario';
    private $table_user        = 'table_user';
    private $table_payment     = 'table_payment';


    //MANGE USER
    function retrieveUsr($id_user =null){
        $this->db->from($this->table_user);
        if($id_user != null){
            $this->db->where('id_user', $id_user);
        }
        return $this->db->get();
    }function deleteUsr($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete($this->table_user);
        return true;
    }function viewUsr($id_user){
        $query = $this->db->get_where($this->table_user, ['id_user'=>$id_user]);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }function updateUsr($post){
        $params = [
            'name'   =>$post['name'],
            'level'  =>$post['level'],
            'estado' =>$post['estado']
        ];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update($this->table_user, $params);
    }

    
    //MANAGE FUNC
    function retrieveFnc($id_funcionario=null){
        $this->db->from($this->table_funcionario);
        if($id_funcionario != null){
            $this->db->where('id_funcionario', $id_funcionario);
        }
        $query = $this->db->get();
        return $query;

    }
    function deleteFnc($id_funcionario){
        return $this->db->delete($this->table_funcionario ,['id_funcionario'=>$id_funcionario]);
    }


    function viewFnc($id_funcionario){
        $query = $this->db->get_where($this->table_funcionario, ['id_funcionario'=>$id_funcionario]);
        if($query->num_rows() > 0){
            return $query->row();
        }
    }function updateFnc($post,$id_funcionario){
        //$this->db->where('id_funcionario', $post['id_funcionario']);
        return $this->db->update($this->table_funcionario, $post,['id_funcionario'=>$id_funcionario]);
      
    }
    function checkFileFuncionario($id_funcionario){
        $query = $this->db->get_where($this->table_funcionario, ['id_funcionario' => $id_funcionario]);
        return $query->row();
    }


   

       

    

    
    //COUNTS
 
    function count_user(){
        return $this->db->count_all($this->table_user);
    }
    function count_func(){
        return $this->db->count_all($this->table_funcionario);
    }
   
    
}
