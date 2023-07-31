<?php $this->load->view('_inc/head2')?>

   <div class="news">
		<div class="container-fluid pl-5 pr-5">
			<div class="row mt-5">
            <div class="row mt-5 gallery">
                <?php foreach($retrieveFoto->result() as $key=>$retrieveFoto):?>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card shadow h-100 pb-2">
                           <a href="<?= base_url('upload/galery/'.$retrieveFoto->foto)?>" class="example-image-link" data-fslightbox="gallery">
                              <img class="card-img-top example-image"" src="<?= base_url('upload/galery/'.$retrieveFoto->foto)?>"
                              alt="<?= print word_limiter($retrieveFoto->descricao, 15)?>">
                           </a>
                            
                        </div>
                    </div>
                <?php endforeach?>
            </div>
         </div>
      </div>
   </div>
<!-- Add the library (only one file) -->
















































<?php $this->load->view('_inc/footer')?>