<?php $this->load->view('_inc/head')?>



	<div class="popular page_section" style="margin-top:-16rem">
		<div class="container-fluid"  style="background:#fff!important; box-shadow: 5px 5px 5px 5px #ebebeb; border-radius:2px">
			<div class="row">
				<div class="col mt-2">
					<div class="section_title text-center">
						<h1 style="font-size:22px">DESTAQUES</h1>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row course_boxes" style="margin-top:30px;margin-bottom:-4rem; ">
					<?php foreach($retrieveActi->result() as $key=>$retrieveActi):?>
						<div class="col-lg-3 course_box"style="margin-bottom:5rem;" >
							<div class="card" style="box-shadow:5px 5px 5px 5px #ebebeb">
								<img class="card-img-top" src="<?=base_url('upload/activity/'.$retrieveActi->activ_image)?>" alt="FDL IMAGE">
								<div class="card-body text-center pb-3">
									<div class="card-title mt-3"><a href="<?=base_url('IndexCont/view/'.$retrieveActi->id_activity)?>"><?=$retrieveActi->titulo?></a></div>
									<!--div class="card-text mt-1"><?= print word_limiter($retrieveActi->content, 10)?>...</div-->
								</div>	
							</div>
						</div>
					<?php endforeach?>
				</div>
			</div>
		</div>
	</div>
	


	


	<div class="register">
		<div class="container-fluid" >
			<div class="row row-eq-height">
				<div class="col-lg-5 nopadding" >
					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">SALVE VIDAS <span></span></h1>
							<p class="register_text">
								In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, 
								vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, 
								finibus tortor fermentum. Aliquam, augue a gravida rutrum, 
								ante nisl fermentum nulla, vitae tempo.
							</p>
							<div class="button button_1 register_button mx-auto trans_200" style='background:#feb62e'>
								<a href="#" style='color:#fff'>APOIAR</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 nopadding">
					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="testimonials_background_container prlx_parent">
							<div class="testimonials_background prlx" style="background-image:url(assets/images/testimonials_background_2.jpg)"></div>
						</div>
						<div class="container">

							<div class="row" style='margin-top:5rem!important'>
								<div class="col" >
									<div class="section_title text-center"  >
										<h1 style='font-size:16px;color:#fff'>TESTEMUNHAS</h1>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									
									<div class="testimonials_slider_container">

										<!-- Testimonials Slider -->
										<div class="owl-carousel owl-theme testimonials_slider">
											<!-- Testimonials Item -->
											<div class="owl-item">
												<div class="testimonials_item text-center">
													<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
													<div class="testimonial_user">
														<div class="testimonial_image mx-auto">
															<img src="<?=base_url('assets/images/testimonials_user.jpg')?>" alt="">
														</div>
														<div class="testimonial_name" style="color:#fff">Dalton Andre</div>
														<div class="testimonial_title">Graduado</div>
													</div>
												</div>
											</div>

											<!-- Testimonials Item -->
											<div class="owl-item">
												<div class="testimonials_item text-center">
													<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
													<div class="testimonial_user">
														<div class="testimonial_image mx-auto">
															<img src="<?=base_url('assets/images/testimonials_user.jpg')?>" alt="">
														</div>
														<div class="testimonial_name" style="color:#fff">Dalton Andre</div>
														<div class="testimonial_title">Campones</div>
													</div>
												</div>
											</div>

											<!-- Testimonials Item -->
											<div class="owl-item">
												<div class="testimonials_item text-center">
													<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
													<div class="testimonial_user">
														<div class="testimonial_image mx-auto">
															<img src="<?=base_url('assets/images/testimonials_user.jpg')?>" alt="">
														</div>
														<div class="testimonial_name" style="color:#fff">Dalton Andre</div>
														<div class="testimonial_title">Graduado</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div style="background:#feb62e!important; margin-top:8rem;  margin-bottom:-4rem;"">
		<div class="services page_section" style="margin-top:4rem; margin-bottom:2rem;">
			<div class="container" >
				<div class="row">
					<div class="col">
						<div class="section_title text-center" style="margin-top:-7rem">
							<h1 style="font-size:29px; color:#00204A">NOSSOS SERVI&Ccedil;OS</h1>
						</div>
					</div>
				</div>

				<div class="row services_row" style="margin-top:10px; margin-bottom:-5rem">
					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" style="">
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-user-graduate fa-3x text-center"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold; text-transform:uppercase">Advogacia</h3>
							<p style="color:#fff!important;">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					</div>

					
					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" >
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-book fa-3x text-center"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold; text-transform:uppercase">Educa&ccedil;&atilde;o</h3>
							<p style="color:#fff!important">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					</div>

					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" >
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-stethoscope fa-3x text-center" aria-hidden="true"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold;text-transform:uppercase">Saude</h3>
							<p style="color:#fff!important">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					
					</div>

					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" >
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-tree fa-3x text-center"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold;text-transform:uppercase">Cultura</h3>
							<p style="color:#fff!important">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					
					</div>

					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" >
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-users fa-3x text-center"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold;text-transform:uppercase">Genero</h3>
							<p style="color:#fff!important">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					
					</div>

					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" >
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-head-side-cough fa-3x text-center"></i>
								<!--i class="fas fa-cookie-bite fa-3x text-center"></i-->
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold;text-transform:uppercase">Nutri&ccedil;&atilde;o</h3>
							<p style="color:#fff!important">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					</div>

					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" >
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-child fa-3x text-center" aria-hidden="true"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold;text-transform:uppercase">Juventude</h3>
							<p style="color:#fff!important">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					
					</div>

					<div class="col-lg-3 service_item text-justify d-flex flex-column align-items-start justify-content-start" >
						<div style="background-color:#014785; padding:2rem;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #4d4d4d">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-female fa-3x text-center" aria-hidden="true"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold;text-transform:uppercase">Mulher e paz</h3>
							<p style="color:#fff!important">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. 
								Proin quis mi malesuada, finibus tortor fermentum.
							</p>
							<a href=""class="btn btn-block p-2 mt-3" style="background-color:#feb62e; color:#fff; font-weight:bold">VER MAIS....</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div style="background:#014785!important;">
		<div class="services page_section" style="margin-top:4rem; margin-bottom:2rem;">
			<div class="container" >
				<div class="row">
					<div class="col">
						<div class="section_title text-center" style="margin-top:-7rem">
							<h1 style="font-size:29px; color:#feb62e">IMPACTO NA SOCIEDADE</h1>
						</div>
					</div>
				</div>
						<!--services_row; service_item text-justify d-flex flex-column align-items-start justify-content-start-->
				<div class="row " style="margin-top:10px; margin-bottom:-3rem">
					<div class="col-lg-3 mt-5" style="">

						<div style="background-color:#00204A;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #000" class="pb-1">
							<div class="icon_container d-flex flex-column justify-content-end" >
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-map-marked fa-5x text-center" style="margin-top:8rem!important"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold; font-size:50px">100</h3>
							<p style="color:#fff!important;" class="text-center mb-5">
							Cidades alcancadas
							</p>
						</div>
					</div>

					
					<div class="col-lg-3 mt-5" >
						<div style="background-color:#00204A;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #000" class="pb-1">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-flag fa-5x text-center"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold; font-size:50px">500</h3>
							<p style="color:#fff!important" class="text-center mb-5">
							Projectos
							</p>
						</div>
					</div>

					<div class="col-lg-3 mt-5" >
						<div style="background-color:#00204A;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #000" class="pb-1">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-heart fa-5x text-center" aria-hidden="true"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold; font-size:50px">2,000</h3>
							<p style="color:#fff!important;" class="text-center mb-5"> 
								Vidas alcancadas
							</p>
						</div>
					
					</div>

					<div class="col-lg-3 mt-5" >
						<div style="background-color:#00204A;color:#fff!important;border-radius:5px;box-shadow:1px 3px 5px 0px #000" class="pb-1">
							<div class="icon_container d-flex flex-column justify-content-end">
								<!--img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1"-->
								<i class="fas fa-users fa-5x text-center"></i>
							</div>
							<h3 class="text-center" style="color:#feb62e; font-weight:bold; font-size:50px">1,000</h3>
							<p style="color:#fff!important" class="text-center mb-5">
								Voluntarios no campo
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>



	<!-- Events -->

	<div class="events page_section" style="margin-top: -8rem;"  >
		<div class="container" style="background-color:#fff; padding:2rem">
			<div class="event_items">

				<!-- Event Item -->
				
				<div class="row event_item">
					<div class="col">
						<div class="row" >								
							<div class="col-lg-8">

								<div class="row">

									<div class="col">
										<div class="section_title text-center mb-5">
											<h1 style="font-size:22px;">PRINCIPAIS EVENTOS FDL</h1>
											</div>
										</div>
									</div>

									<?php foreach($retrieveAct->result() as $key=>$retrieveAct):?>
										<?php if($retrieveAct->categoria == 'evento'):?>
											<div class="row pl-2 pt-4" style="background-color:#fff; border-radius:3px;margin-bottom:1rem; box-shadow: 0px 0px 5px 0px #000">
												<div class="col-lg-2.5 order-lg-1.5 order-2">
													<div class="event_date d-flex flex-column align-items-center justify-content-center">
														<div class="event_day"><?=$retrieveAct->data_acont?></div>
														<div class="event_month"><?=$retrieveAct->mes_acont?></div>
														<div class="event_month"><?=$retrieveAct->ano_acont?></div>
													</div>
												</div>

												<div class="col-lg-5 order-lg-2 order-3	">
													<div class="event_content">
														<div class="event_name">
															<a style="font-size:16px" class="trans_200" href="<?=base_url('IndexCont/view/'.$retrieveAct->id_activity)?>"><?=$retrieveAct->titulo?></a></div>
														<p>
															<?= print word_limiter($retrieveAct->content, 10)?>. <br>
															<span style="font-weight: bold;color: #5d5c5f;"><i class="fas fa-user-circle"></i> <?=$retrieveAct->publicado_por?></span>
														</p>
													</div>
												</div>

												<div class="col-lg-4 order-lg-3 order-1">
													<div class="event_image">
														<img src="<?=base_url('upload/activity/'.$retrieveAct->activ_image)?>" alt="IPP HIMOIO">
													</div>
												</div>
											</div>
										<?php endif?>
									<?php endforeach?>
								</div>

								<div class="col-lg-4">
									<div class="row">
										<div class="col">
											<div class="text-left mb-5 mt-4">
												<h1 style="font-size:30px;" class="text-danger">YOUTUBE</h1>
											</div>
										</div>
									</div>
								
									<div class="youtube">
										<iframe  class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/C7Iw40gNhcM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
									</div>	
										
										
									<div class="facebook">
										<div class="row">
											<div class="col">
												<div class="text-left mb-5 mt-5">
													<h1 style="font-size:30px;" class="text-primary">FACEBOOK</h1>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
<!--<div class="price_box d-flex flex-row align-items-cente"></div>-->

	
	


	










<?php $this->load->view('_inc/footer')?>

<!--$_COOKIE



-->