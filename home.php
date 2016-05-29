<?php	 	 
  // variaveis
  $title = "Clínica Saadi - A Clínica  - Notícias - ";
  $description = "www.clinicasaadi.com.br, Sistema Cardiovascular Anatomia, Clinica Saadi, Ponte de Safena na Perna, Procedimento de Transplante Cardiaco, Aneurisma da Aorta Causas";
  $keywords = "www.clinicasaadi.com.br, Sistema Cardiovascular Anatomia, Clinica Saadi, Ponte de Safena na Perna, Procedimento de Transplante Cardiaco, Aneurisma da Aorta Causas, Aneurisma da Aorta Causas, clinicasaadi.com.br, Aneurisma Prevenção, Marcapasso Cardiaco, Marcapasso, Cinecoronariografia, A Clínica  - Notícias - ";
?>

<?php	 	  ob_start(); ?>
		<!-- slider area -->
			<div id="slider_con">
					<div id="slider_area">



						<!-- slide  1  *** with text elements sample
							<div class="slide">
									<!-- sliding text line 
									<div  class="sliding_text_text">
											<div class="left_side">
												<!-- title 
												<h1><a href="">LOREM IPSUM</a></h1>
												<h2><a href="">Lorem ipsum dolor sit amet </a></h2>

												<!-- text
												<!-- right side slider image
												<p>							
												Lorem ipsum dolor sit amet, <a href="">consectetur adipisicing elit</a>,  incididunt ut labore et sed do eiusmod  dolore magna aliqua. Ut enim ad minim veniam ..							
												</p>
											</div>
											<div class="right_side">
												<img  src="images/1.jpg" width="390" height="169" class="border png" alt="" />
											</div>
									</div>
									<!-- /sliding text line 
							</div>
						<!--/ slide  1-->


						<!-- slide  2  with background image and right image sample -->
							<!--div class="slide">
									<!-- slider background image 
											<img src="images/slider_background_sample.png" class="png"  alt="" />
									<!-- /slider background image 
									<!-- sliding text line 
									<div  class="sliding_text_text">
											<div class="left_side">
												<!-- title
												<h1><a href="">LOREM IPSUM</a></h1>
												<h2><a href="">Lorem ipsum dolor sit amet </a></h2>

												<!-- text
												<!-- right side slider image
												<p>							
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dolor sit amet enim bibendum accumsan in sit amet velit. Fusce et est nec nisi congue commodo vel ut metus. Vestibulum odio arcu, imperdiet eu bibendum vel, sagittis vel est. Fusce a dui sem, ac facilisis eros.
												</p>
											</div>
											<div class="right_side">
												<img  src="images/1.jpg" width="290" height="169" class="border png" alt="" />
											</div>
									</div>
									<!-- /sliding text line 
							</div>
						<!--/ slide  2-->

						<!-- slide  3 single image sample -->
							<div class="slide">
									<!-- single slider image -->
											<a href="#"><img src="images/slider_single_sample.jpg" class="png"  alt="" /></a>
									<!-- /single slider image  -->
							</div>
						<!--/ slide  3-->

					</div>
			<!-- slider on/off icons -->
			<div id="number_con"><div id="numbers"></div></div>
			</div>
		<!-- / slider area -->

		<!-- content -->
			<div id="content">
				<div style="text-align:center; margin-top: 30px;">
					<h1 style="font-size:25px;">Bem vindo a nosso site, será um prazer atendê-lo!</h1>
				</div>
			<!-- box -->
				<div class="box">
					<div class="imgarea">
							<!-- box 1 image -->
							<img src="images/2.jpg" width="290" height="124" class="image" alt="" />
					</div>
					<div class="textarea">
						<!-- box title-->
						<h2>A Clínica</h2>
							<!-- text-->
							O nosso objetivo é proporcionar conforto e segurança para nossos pacientes. Por isto, dispõe de equipamentos odontológicos modernos e sofisticados em ambientes aconchegantes e climatizados.
							<br />
							<a href="" class="read_more">Leia mais</a>
					</div>
				</div>
			<!-- /box -->
			<!-- box -->
				<div class="box">
					<div class="imgarea">
							<!-- box 2 image -->
							<img src="images/3.jpg" width="290" height="124" class="image" alt="" />
					</div>
					<div class="textarea">
						<!-- box title-->
						<h2>Nossos Serviços</h2>
							  <!-- text-->
							  Se o seu sorriso não te deixa feliz, este é o momento de você mudar. E a Clínica de Ortodontia Dante Bello está aqui para te proporcionar os melhores tratamentos odontológicos para você.<br />
							  <a href="/servicos/" class="read_more">Leia mais</a>
					</div>
				</div>
			<!-- /box -->
			<!-- box -->
				<div class="box">
					<div class="imgarea">
							<!-- box 3 image -->
							<img src="images/4.jpg" width="290" height="124" class="image" alt="" />
					</div>
					<div class="textarea">
						<!-- box title-->
						<h2>Algumas Dicas de Saúde</h2>
							<!-- text-->
							O sorriso está ligado à saúde, bem-estar e especialmente com a felicidade pessoal. O sorriso tem um papel decisivo na sua vida pessoal e profissional, principalmente na impressão que você transmite.
								<br />
								<a href="/dicas-de-saude/" class="read_more">Leia mais</a>
					</div>
				</div>
			<!-- /box -->	

			</div>
		<!-- / content -->
<?php	 	 
  $conteudo = ob_get_contents(); 
  ob_end_clean(); 
?>