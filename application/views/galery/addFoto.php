<?php $this->load->view('_inc/dashHead')?>

   <div class="d-sm-flex align-items-center justify-content-between mb-4">  
      <a href="<?=base_url()?>Url/galery" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
      <i class="fas fa-backward fa-sm text-white-50"></i> 
         Voltar
      </a>    
   </div>

   <div class="card shadow mb-4">
      <div class="card-header py-3 dataTable-top" style="height: 80px;">
         <h6 class="m-0 font-weight-bold text-primary text-center mt-3" style="font-size: 35px;">ACTIVIDADES</h6>
      </div>
      <div class="card-body">
             
         <form id="formAlun" enctype="multipart/form-data" action="<?=base_url()?>galery/Galery/addFoto" method="post" class="form user mt-5">
            <div class="row form-group">
               <div class="form-field col-sm-7 mb-sm-0 mb-5">
                  <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Titulo</label>
                  <input value="<?= set_value('titulo')?>" type="text" name='titulo' class="form-control form-control-user" placeholder="Titulo">
                  <div class="erro-small"><small><?php echo form_error('titulo')?></small></div>
               </div>

               <div class="form-field col-sm-5 mb-sm-0 mb-5">
                  <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Capa "Imagem"</label>
                  <input type="file" name='foto' class="form-control form-control-user">
                  <small><?php if(isset($imageError)){echo $imageError;}?></small>
               </div>
            </div>

            <div class="row form-group">
               <div class="form-field col-sm-12 mb-sm-0 mb-5">
                  <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Descrição</label>
                  <textarea value="<?= set_value('descricao')?>" name='descricao' class="form-control form-control-user" placeholder="Descrição"></textarea>
                  <div class="erro-small"><small><?php echo form_error('descricao')?></small></div>
               </div>
            </div>
            <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">save record</button>
         </form>   
      </div>
   </div>

    




  
<?php $this->load->view('_inc/dashFooter')?>