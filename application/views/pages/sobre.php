<?php $this->load->view('_inc/head2')?>

	<style>
		div.home{
			height: 670px;
			background-image: linear-gradient(
				rgba(0, 0, 0, 0.4), 
				rgba(0, 0, 0, 0.4)),
				url('<?=base_url('/assets/images/slide-1.jpg')?>');
			background-attachment: fixed;
			background-size: cover;
			background-repeat: no-repeat;
			color: #fff;
		}
		div.home h4{
			font-size:26px;
		}
		div.home h1{
			font-size:42px;
			font-weight:bold;
			margin-bottom:3rem;
		}
		div.centered{
			margin-top: -350px!important;
		}
		.home_content{
			background-color:unset!important;
		}
		div.services h3{
			color:#00204a;
			font-weight:bold;
			font-size:25px;
		}
		div.services p{
			color:#4d6380;
			font-size:16px;
		}

		div.back{
			background-image: url('');
			margin-top:0rem;
			background-size: cover;
			
		}
		div.valores{
			margin-left:-1.8rem;
		}
		div.about-fdl{
			background-color: #fcfdfd!important;
			margin-bottom:10rem;
		}
		div.about-fdl p{
			font-size:16px;
			color:#4d6380;
		}
		div.page_section{
			
			margin-top:-6rem;
			
		}
	</style>

	<div class="home" style="">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx"></div>
		</div>
		<div class="home_content">
			<div class="centered">
				<h1 class="text-center">NOSSA MISS&Atilde;O</h1>
				<h4 class="text-center">
					A FDL tem como miss&atilde;o fortalecer o densevovimento economico das comunidades
					e promover a inclus&atilde;o social em Mo&ccedil;ambique.
				</h4>
				
			</div>
		</div>
	</div>





	<div class="services page_section">
		<div class="visao-1" style="background:#fff;">
			<div class="container" >
				<div class="row services_row" >
					<div class="col-lg-7 service_item text-left d-flex flex-column align-items-start justify-content-start"  >
						<div>
							<h3 class="mt-4">VIS&Atilde;O</h3>
						</div>
						<p class="text-justify">
							Promover a transformacao das comunidades Mocambicanas e torna-las autosustentaveis e capazes
							de promover o densevovimento local e inclusivo, negociar parcerias beneficas para as comunidades
							com o governo assim como o sector privado, impulsionar o empreendidorismo nos jovens e desenvolver
							as questoes de genero.

						</p>
						
						
						<div class="row valores">
							<div class="col-lg-12 service_item text-left d-flex flex-column align-items-start justify-content-start">
								<div class="sidebar p-3">
									<!-- Archives -->
									<div class="sidebar_section">
										<div class="sidebar_section_title">
											<h3 style="margin-bottom: -1rem;color:#00204a">VALORES</h3>
										</div>
										<ul class="sidebar_list">
											<li class="sidebar_list_item">
												<a style="color:#4d6380!important;">
													Respeito pela pessoa humana
												</a>
											</li>
											<li class="sidebar_list_item">
												<a style="color:#4d6380!important;">
													Densevovimento
												</a>
											</li>
											<li class="sidebar_list_item">
												<a style="color:#4d6380!important;">
													Solidariedade
												</a>
											</li>
											<li class="sidebar_list_item">
												<a style="color:#4d6380!important;">
													Trabalho
												</a>
											</li>
											<li class="sidebar_list_item">
												<a style="color:#4d6380!important;">
													Inclus&atilde;o social
												</a>
											</li>
											
										</ul>
									</div>
								</div>
						</div>
				</div>
						
					</div>

					<div class="col-lg-5 service_item text-left d-flex flex-column align-items-start justify-content-start">
						<div class="back"> <img src="<?=base_url('assets/images/boy.jpg')?>" alt="" srcset="" class="img-fluid"></div>
					</div>
				</div>


				</div>
		</div>
	</div>



	<div class="about">
		<div class="row">
			<div class="col">
				<div class="section_title text-center about-fdl" style="margin-top:-7rem">
					<h1 style="font-size:29px; color:#feb62e;">SOBRE O FDL</h1>
					<div class="container text-justify">
						<p>
							A FDL e uma fundacao Mocambicana recm criada(2023) e sem fins lucativos
							, com o objectivo de promover o densevovimento sustentavel e inclusivo nas comunidades.
							Dentro do nosso escopo concebemos e implementamos projectos de densevovimento nas areas
							de educacao, saude, genero e cultura para criar impacto positivo
						</p>
						<p>
							Para que este projecto seja possivel envolvemos para actores sa sociedade como as diferentes
							comunidades, o governo, o sector privado, instituicoes nacionais e internacionais como parceiros
							numa causa comum.

						</p>
					</div>
				</div>

				
			</div>
		</div>
	</div>






































<?php $this->load->view('_inc/footer')?>