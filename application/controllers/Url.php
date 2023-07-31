<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session  $session
 * @property Retrieve $Retrieve
 * @property Input 	  $input
 * @property Activity $Activity
 * CONTROLLERS FOR URLS
 */
class Url extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }	
	}


	function activity(){
		$activity = new Activity_model();
		$retrieveAct['retrieveAct']   = $activity->retrieveAct();
		$this->load->view('activity/index', $retrieveAct);
	}
	
	function galery(){
		$retrieveFoto['retrieveFoto'] = $this->DataGalery->retrieveFoto();
		$this->load->view('galery/index', $retrieveFoto);
	}

	function addUser(){
		$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
		$this->load->view('forms/addUser', $retrieveFnc+$retrieveStd);
	}

	
	
	function addActi(){
		$this->load->view('activity/addActi');
	}
	function addFnc(){
		$this->load->view('forms/addFnc');
	}

	

	function addFoto(){
		$this->load->view('galery/addFoto');
	}


	

}