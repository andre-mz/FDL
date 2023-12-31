<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session $session
 * @property Retrieve $Retrieve
 * @property load $load
 */
class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/erro');
        }
    }

    function index(){
        $count_user['count_user']   = $this->Retrieve->count_user();
        $count_func['count_func']   = $this->Retrieve->count_func();
    
        if($this->session->userdata('estado') < 1){
            redirect('IndexCont/erro');
        }else{
            if($this->session->userdata('level') >= 1){
                $this->load->view('_inc/dashHead');
                $this->load->view('template/index', $count_user + $count_func);
                $this->load->view('_inc/dashFooter');
            }
            else{
                redirect('IndexCont/erro');
            } 
        }
        
        
    }
}