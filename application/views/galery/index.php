<?php $this->load->view('_inc/dashHead')?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-5">
            GALERIA
        </h1>   
    </div>
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item" id="id-active"> 
            <a class="nav-link" href="<?=base_url()?>Url/activity">
                Pagina de apresenta&ccedil;&atilde;o
            </a>
        </li>
        <li class="nav-item" id="id-active"> 
            <!--data-toggle="tab"---> 
            <a class="nav-link active" id="id-active" href="<?=base_url()?>Url/galery">
                Galeria
            </a>
        </li>
    </ul>

    

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
                    <a class="btn btn-acti" href="<?=base_url()?>Url/addFoto" style="background-color: #00204A!important; color:#fff">
                        <span>Adicionar fotos</span>
                    </a>
                </div>
            </div> 

            <!--
                            <img class="card-img-top image" src="<?= base_url('upload/galery/'.$retrieveFoto->foto)?>"
                            alt="Card image cap">-->
                            
            <div class="row mt-5 gallery">
                <?php foreach($retrieveFoto->result() as $key=>$retrieveFoto):?>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card shadow h-100 pb-2">
                            <a href="<?= base_url('upload/galery/'.$retrieveFoto->foto)?>" class="example-image-link" data-fslightbox="gallery">
                            <img class="card-img-top example-image"" src="<?= base_url('upload/galery/'.$retrieveFoto->foto)?>"
                            alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs text-gray-900 text-uppercase mb-1 text-justify" style="font-size: 9px;">
                                            <?= print word_limiter($retrieveFoto->descricao, 15)?>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:-5px;padding-left:8px;padding-right:8px;">
                                <div class="col-sm-12">
                                    <a style="border-radius: unset!important" href="<?=base_url('galery/Galery/deleteFoto/'.$retrieveFoto->id_foto)?>" class="btn btn-danger col-sm-12"><i class='fas fa-trash'></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>



<?php $this->load->view('_inc/dashFooter')?>