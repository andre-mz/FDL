<?php $this->load->view('_inc/dashHead')?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-5">
            NOTICIAS
        </h1>   
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" id="id-active"> 
            <a class="nav-link active" id="home-tab" href="<?=base_url()?>Url/activity" role="tab" aria-controls="home" aria-selected="true">
                Pagina de apresenta&ccedil;&atilde;o
            </a>
        </li>
        <li class="nav-item" id="id-active"> 
            <!--data-toggle="tab"---> 
            <a class="nav-link" id="id-active" href="<?=base_url()?>Url/galery" role="tab" aria-controls="home" aria-selected="true">
                Galeria
            </a>
        </li>
    </ul>

    

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
                    <a class="btn btn-acti" href="<?=base_url()?>Url/addActi" style="background-color: #00204A!important; color:#fff">
                        <span>Nova actividade</span>
                    </a>
                </div>
            </div> 

            <div class="row mt-5">
                <?php foreach($retrieveAct->result() as $key=>$retrieveAct):?>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-secondary shadow h-100 pb-2">
                            <img class="card-img-top" src="<?= base_url('upload/activity/'.$retrieveAct->activ_image)?>"
                            alt="Card image cap">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs text-gray-900 text-uppercase mb-1 text-justify" style="font-size: 9px;">
                                            <?= print word_limiter($retrieveAct->content, 15)?>   
                                        </div>
                                        <div class="h6 mb-0 font-weight-bold text-gray-900 mt-3 text-uppercase" style="font-size: 12px;">
                                            <?= $retrieveAct->titulo?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <!--<i class="fas fa-user-graduate fa-2x text-gray-300"></i-->
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:-5px;padding-left:8px;padding-right:8px;">
                                <div class="col-sm-6">
                                    <a style="border-radius: unset!important" href="<?=base_url('activity/Activity/editAct/'.$retrieveAct->id_activity)?>" class="btn btn-primary col-sm-12"><i class='fas fa-eye'></i></a>
                                </div>
                                <div class="col-sm-6">
                                    <a style="border-radius: unset!important" href="<?=base_url('activity/Activity/deleteActi/'.$retrieveAct->id_activity)?>" class="btn btn-danger col-sm-12"><i class='fas fa-trash'></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>

    </div>



  
<?php $this->load->view('_inc/dashFooter')?>