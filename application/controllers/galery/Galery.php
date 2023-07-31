<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Galery extends CI_Controller{


   function __construct(){
      parent::__construct();
      if($this->session->userdata('loggedIn') !==TRUE){
         redirect('IndexCont/login');
      }
      $this->load->model('Galery_model');
   }

    function addFoto(){
        $this->form_validation->set_rules('descricao', 'descricao', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio',
                //'is_unique' => 'O %s ja esta em uso no sistema',
            )
        );
        $this->form_validation->set_rules('titulo', 'titulo', 'trim|required');

      
        if ($this->form_validation->run()) {
            $orig_filename = $_FILES['foto']['name'];
            $new_name      = time()."".str_replace(' ','-',$orig_filename);
            $config = [
                'upload_path'   => './upload/galery/',
                'allowed_types' => 'gif|jpg|png|jpeg|web|CR2',
                'file_name'     => $new_name
            ];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')){
              
                $imageError = array('imageError' => $this->upload->display_errors());
                $this->load->view('galery/addFoto', $imageError);
            }
            else{
                $acti_name = $this->upload->data('file_name');
                $data = [
                    'titulo'     => $this->input->post('titulo'),
                    'descricao'  => $this->input->post('descricao'),
                    'foto'       => $acti_name,
                ];
               

                $this->Galery_model->addFoto($data);
                echo "<script>alert('DADOS AADICIONADO COM SUCESSO');</script>";
                echo "<script>window.location='".site_url('Url/addFoto')."';</script>";
                //redirect(base_url('addActi'));
            }
        }
        
    }

    public function deleteFoto($id_foto){
        $activity =  new Galery_model();
        if($activity->checkFile($id_foto)){
            $data = $activity->checkFile($id_foto);
            if(file_exists('./upload/galery/'.$data->foto)){
                unlink('./upload/galery/'.$data->foto);
            }
            $activity->deleteActi($id_foto);
            echo "<script>alert('ELIMINADO');</script>";
			echo "<script>window.location='".site_url('Url/galery')."';</script>";
        }
    }


}