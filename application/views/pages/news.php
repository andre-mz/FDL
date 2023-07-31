<?php $this->load->view('_inc/head2')?>

 	<style>
		ul.sidebar_list a{
			color:#2596be;
			font-weight:400;
			font-size:16px;
		}
		ul.sidebar_list a:hover{
			color:#00204a;
		}

		div.cat ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}

		div.cat ul li {
			float: left;
			background:#99a6b7;
			border-radius:2rem;
			margin-left:.2rem;
		}

		div.cat ul li a {
			display: block;
			color: #fff;
			text-align: center;
			padding: 3px 10px 3px 10px;
			text-decoration: none;
			font-weight:500;
		}
 	</style>


	<div class="news">
	
		<div class="container-fluid pl-5 pr-5">
		
			<div class="row mt-5">

				<div class="col-lg-2" > 

					<div class="sidebar news-side">
						<!-- Archives -->
						<div class="sidebar_section mt-5">
							<div class="sidebar_section_title mt-5">
								<h3 style="color:#00204a;font-weight:800">TITULOS</h3>
							</div>

							<ul class="sidebar_list ">
								<?php foreach($retrieveAct->result() as $key=>$retrieveAct):?>
									<li class=" mt-3"><a style="font-size:12px!important" href="<?=base_url('IndexCont/view/'.$retrieveAct->id_activity)?>">
									<?=$retrieveAct->titulo?></a></li>
								<?php endforeach?>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-lg-10">
					<div class="sidebar_section cat mt-5">
						<div class="sidebar_section_title">
						<h2 style="color:#00204a;font-weight:800" class="mt-2">NOTICIAS</h2>
						</div>
						<ul class="sidebar_list ">
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Advocacia</a>
							</li>
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Educa&ccedil;&atilde;o</a>
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Saude</a>
							</li>
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Cultura</a>
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Genero</a>
							</li>
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Nutri&ccedil;&atilde;o</a>
							</li>
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Juventude</a>
							</li>
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Mulher e paz</a>
							</li>	
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">Advogacia</a>
							</li>	
							<li class="mt-2">
								<a href="<?= base_url()?>IndexCont/curso">E.Rapariga</a>
							</li>
						</ul>
					</div>
					
					<div class="row mt-5">
							<?php foreach($retrieveActi->result() as $key=>$retrieveActi):?>
						<div class="col-lg-4 mt-1">
							<!--div class="news_posts"-->
							<!-- News Post -->
							<!--div class="news_post"-->
							<div class="news_post_image">
								<img src="<?= base_url('upload/activity/'.$retrieveActi->activ_image)?>" alt="img">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div style="font-size: 12px;"><?=$retrieveActi->adicionado?></div>
									</div>
								</div>

								<div class="news_post_title_container">
									<div class="news_post_title">
										<a style="font-size:1rem" href="<?=base_url('IndexCont/view/'.$retrieveActi->id_activity)?>"><?=$retrieveActi->titulo?></a>
									</div>
									<div class="news_post_meta">
										<!--span class="news_post_author">Por <?=$retrieveActi->publicado_por?></span-->
									</div>
								</div>
							</div>
							
							<div class="news_post_text">
								<p class="text-justify" style="color: #00204A;">
									<?= print word_limiter($retrieveActi->content, 20)?>
								</p>
							</div>
										
							<div class="news_post_button text-center trans_200" style="background-color: #00204A;">
								<a href="<?=base_url('IndexCont/view/'.$retrieveActi->id_activity)?>">LER MAIS</a>
							</div>		
						</div>
						<?php endforeach?>
					</div>
				</div>
			</div>
		</div>
	</div>






<div class="col-lg-4">
	
</div>




						

































<?php $this->load->view('_inc/footer')?>