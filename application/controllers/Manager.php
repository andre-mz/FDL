<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session  $session
 * @property Retrieve $Retrieve
 * @property Input 	  $input
 * @property db	      $db
 * @property Search   $Search
 * @property form_validation $form_validation
 * CONTROLLERS FOR URLS
 */

class Manager extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }	
	}

	

	//MANAGE USERS
	function tabUsr(){
		$retrieveUsr['retrieveUsr'] = $this->Retrieve->retrieveUsr();
		$this->load->view('table/tabUsr', $retrieveUsr);
	}
	function deleteUsr(){
		$id_user = $this->input->get('id_user');
		$delete	 = $this->Retrieve->deleteUsr($id_user);
		if($delete ==  TRUE){
			echo "<script>alert('USUARIO ELIMINADO');</script>";
			echo "<script>window.location='".site_url('Manager/tabUsr')."';</script>";
		}else{
			echo "<script>alert('FALHA, TENTE NOVAMENTE');</script>";
			echo "<script>window.location='".site_url('Manager/tabUsr')."';</script>";
		}
	}
	function viewUsr($id_user){
		$retrieveUsr['retrieveUsr'] = $this->Retrieve->viewUsr($id_user);
		$this->load->view('manager/viewUsr', $retrieveUsr);

		$post = $this->input->post(null, true);
		if($this->input->post('update')){
			$data = array(
				'name'   => strip_tags($this->input->post('name')),
				'level'  => strip_tags($this->input->post('level')),
				'estado' => strip_tags($this->input->post('estado')),
			);
			$update = $this->Retrieve->updateUsr($post);
			if($update == TRUE){
				echo "<script>alert('ACTUALIZADO COM SUCESSO');</script>";
				echo "<script>window.location='".site_url('Manager/tabUsr')."';</script>";
			}else{
				echo "<script>alert('FALHA, TENTE NOVAMENTE');</script>";
				echo "<script>window.location='".site_url('Manager/tabUsr')."';</script>";
			}
		}
	}
	function updateUsr(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['update'])){
			$this->Retrieve->updateUsr($post);
		}
		if($this->db->affected_rows() > 0){
			echo "<script>alert('ACTUALIZADO COM SUCESSO');</script>";
			echo "<script>window.location='".site_url('Manager/tabUsr')."';</script>";
		}
	}

	//MANGE FUNC
	function tabFnc(){
		$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
		$this->load->view('table/tabFnc', $retrieveFnc);
	}
	function deleteFnc($id_funcionario){
		/***
			 * try {
				$id_funcionario = $this->input->get('id_funcionario');
				$delete	         = $this->Retrieve->deleteFnc($id_funcionario);
				
			} catch (\Throwable $th) {
				echo $th;
			}
			if($delete ==  TRUE){
				echo "<script>alert('USUARIO ELIMINADO');</script>";
				echo "<script>window.location='".site_url('Manager/tabFnc')."';</script>";
			}else{
				echo "<script>alert('FALHA, TENTE NOVAMENTE');</script>";
				echo "<script>window.location='".site_url('Manager/tabFnc')."';</script>";
			}
		*/
		$retrieveFnc = new Retrieve_model();
		if($retrieveFnc->checkFileFuncionario($id_funcionario)){
			$data =  $retrieveFnc->checkFileFuncionario($id_funcionario);
			if (file_exists('./upload/foto_func/'.$data->foto)) {
				unlink('./upload/foto_func/'.$data->foto);
			}
			$retrieveFnc->deleteFnc($id_funcionario);
            echo "<script>alert('ELIMINADO');</script>";
			echo "<script>window.location='".site_url('Manager/tabFnc')."';</script>";
		}
	}



	function viewFnc($id_funcionario){
		$retrieveFnc['retrieveFnc'] = $this->Retrieve->viewFnc($id_funcionario);
		$this->load->view('forms/viewFnc', $retrieveFnc);

		//$post = $this->input->post(null, TRUE);
		if ($this->input->post('update')) {
			$post =array(
				'local_nascimento'     =>strip_tags($this->input->post('local_nascimento')),
                'nome_pai'             =>strip_tags($this->input->post('nome_pai')),
                'nome_mae'             =>strip_tags($this->input->post('nome_mae')),
                'nome_conjugue'        =>strip_tags($this->input->post('nome_conjugue')),
                'nivel_academico'      =>strip_tags($this->input->post('nivel_academico')),
                'local_emissao'        =>strip_tags($this->input->post('local_emissao')),
                'salario'              =>strip_tags($this->input->post('salario')),
                'estado_academico'     =>strip_tags($this->input->post('estado_academico')),
                'contato_emergencia_2' =>strip_tags($this->input->post('contato_emergencia_2')),
                'nome'                 =>strip_tags($this->input->post('nome')),
                'idade'                =>strip_tags($this->input->post('idade')),
                'genero'               =>strip_tags($this->input->post('genero')),
                'nacionalidade'        =>strip_tags($this->input->post('nacionalidade')),
                'naturalidade'         =>strip_tags($this->input->post('naturalidade')),
                'morada'               =>strip_tags($this->input->post('morada')),
                'tipo_documento'       =>strip_tags($this->input->post('tipo_documento')),
                'nr_documento'         =>strip_tags($this->input->post('nr_documento')),
                'estado_civil'         =>strip_tags($this->input->post('estado_civil')),
                'ano_entrada'          =>strip_tags($this->input->post('ano_entrada')),
                'contato_pessoal'      =>strip_tags($this->input->post('contato_pessoal')),
                'contato_emergencia'   =>strip_tags($this->input->post('contato_emergencia')),
                'departament'          =>strip_tags($this->input->post('departament')),
                'cargo'                =>strip_tags($this->input->post('cargo')),
                'local'                =>strip_tags($this->input->post('local')),
                'categoria'            =>strip_tags($this->input->post('categoria')),
			);
			$update = $this->Retrieve->updateFnc($post,$id_funcionario);
			if($update == TRUE){
				//echo "<script>alert('ACTUALIZADO COM SUCESSO COM SUCESSO');</script>";
				//echo "<script>window.location='".site_url('Manager/tabFnc')."';</script>";
				$this->session->set_flashdata('status', 'Actualizado');
				redirect(base_url('Manager/viewFnc/'.$id_funcionario));
			}else{
				//echo "<script>alert('FALHA, TENTE NOVAMENTE');</script>";
				//echo "<script>window.location='".site_url('Manager/tabFnc')."';</script>";
				$this->session->set_flashdata('erro', 'Falha');
				redirect(base_url('Manager/viewFnc/'.$id_funcionario));
			}
		}
	}
	function updateFnc($id_funcionario){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['update'])){
			$this->Retrieve->updateFnc($post);
		}
		if ($this->db->affected_rows() > 0) {
			//echo "<script>alert('ACTUALIZADO COM SUCESSO');</script>";
			//echo "<script>window.location='".site_url('Manager/tabFnc')."';</script>";
			$this->session->set_flashdata('status', 'Actualizado');
			redirect(base_url('Manager/viewFnc/'.$id_funcionario));
		}
	}


	//SEARCH
	function searchStd(){
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
		if($this->input->post('searchStd')){
			$this->form_validation->set_rules('estudante', 'Nome do estudante', 'trim|required',
				array('required' =>'O campo %s nao deve estar vazio')
			);

			if($this->form_validation->run()){
				$searchStd = strip_tags($this->input->post('estudante'));
				$result    = $this->Search->SearchStd($searchStd);
				$this->load->view('payment/searchView', array('result'=> $result)+$retrieveStd);
			}else{
				echo "<script>alert('PREENCHA O CAMPO EM BRANCO E TENTE NOVAMENTE');</script>";
				echo "<script>window.location='".site_url('Url/payment')."';</script>";
			}
		
		}else{
			echo "<script>alert('FALHA PROFUNDA, CONTACTE O ADMIN DO SISTEMA');</script>";
			echo "<script>window.location='".site_url('Url/payment')."';</script>";
		}
	}

}