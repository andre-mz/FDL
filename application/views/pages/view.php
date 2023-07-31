<?php $this->load->view('_inc/head2')?>


		
	


   <div class="news  mt-5">
		<div class="container">
			<div class="row mt-5">
				<div class="col-lg-8 ">
					<div class="p-3" style="background-color: #00204A;text-transform: uppercase;color:#fff">
						<h2><?= $retrieveActi->titulo?></h2>
					</div>
					<div class="news_post_container">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?=base_url('upload/activity/'.$retrieveActi->activ_image)?>" alt="img">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                        <div style="font-size: 12px;"><?=$retrieveActi->adicionado?></div>
									</div>
								</div>
								<div class="news_post_title_container fixed">
									<div class="news_post_title">
										<a href="#" style="text-transform: uppercase;font-size:30px"><?= $retrieveActi->titulo?></a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author">Por <em style="color:#fff;background:#00204A; padding:.4rem"><?= $retrieveActi->publicado_por?></em></span>
									</div>
								</div>
							</div>
                           
                    

							<div class="news_post_quote">
								<div class="mb-5">
								<!--<?php if($retrieveActi->categoria == 'evento'):?>
									LOCAL DO EVENTO <strong style="text-transform: uppercase;color:#00204A"><?=$retrieveActi->local_acont?></strong> || 
									<strong style="text-transform: uppercase;color:#00204A"><?=$retrieveActi->data_acont?>-<?=$retrieveActi->mes_acont?>-<?=$retrieveActi->ano_acont?></strong>
								<?php endif?>-->
							</div>
                        <p class="text-justify" style="color: #00204A;">
                           <?php
										$texto =nl2br($retrieveActi->content);
										echo $texto;	
									?>
                       </p>
                     </div>

                  </div>
					</div>
            </div>


            <div class="col-lg-4">
					<div class="sidebar">
						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Titulos</h3>
							</div>
							<ul class="sidebar_list">
								<?php foreach($retrieveAct->result() as $key=>$retrieveAct):?>
									<li class="sidebar_list_item"><a href="<?=base_url('IndexCont/view/'.$retrieveAct->id_activity)?>"><?=$retrieveAct->titulo?></a></li>
								<?php endforeach?>
							</ul>
						</div>
					</div>
               
					<div class="sidebar_section">
						<div class="sidebar_section_title">
							<h3>DESTAQUES</h3>
						</div>

						<div class="latest_posts">		
							<!-- Latest Post -->
                     <?php foreach($retrieveActv->result() as $key=>$retrieveActv):?>
                        <div class="latest_post">
                           <div class="latest_post_image">
                              <img src="<?=base_url('upload/activity/'.$retrieveActv->activ_image)?>" alt="">
                           </div>
                           <div class="latest_post_title"><a href="<?=base_url('IndexCont/view/'.$retrieveActv->id_activity)?>"><?=$retrieveActv->titulo?></a></div>
                              <div class="latest_post_meta">
                                 <span class="latest_post_author"><a href="#">Por <?=$retrieveAct->publicado_por?></a></span>
                              </div>
                           </div>
                        <?php endforeach?>
                        </div>
                     </div>
						</div>
            	</div>
        		</div>
    		</div>















<?php $this->load->view('_inc/footer')?>