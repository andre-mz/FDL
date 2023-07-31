<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property db $db
 */

class Form_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    private $table_estudante = 'table_estudante';
    private $table_curso     = 'table_curso';
    private $table_user      = 'table_user';
    private $table_activity  = 'table_activity';
    private $table_funcionario = 'table_funcionario';

  

    function addFnc($post){
     
        $this->db->insert($this->table_funcionario, $post);  
    }
    

    function addUser($data){
        $this->db->insert($this->table_user, $data);
    }

    function addActivity($data){
        $this->db->insert($this->table_activity, $data);
    }

}