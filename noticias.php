<?php	 	 
  // variaveis
  $title = "Clínica Saadi - A Clínica  - Notícias - ";
  $description = "www.clinicasaadi.com.br, Sistema Cardiovascular Anatomia, Clinica Saadi, Ponte de Safena na Perna, Procedimento de Transplante Cardiaco, Aneurisma da Aorta Causas";
  $keywords = "www.clinicasaadi.com.br, Sistema Cardiovascular Anatomia, Clinica Saadi, Ponte de Safena na Perna, Procedimento de Transplante Cardiaco, Aneurisma da Aorta Causas, Aneurisma da Aorta Causas, clinicasaadi.com.br, Aneurisma Prevenção, Marcapasso Cardiaco, Marcapasso, Cinecoronariografia, A Clínica  - Notícias - ";
?>

<?php	 	  ob_start(); ?>
<!-- sub page header-->
			<div id="sub_page_header">
				<div class="left">	
				<!-- Page navigation-->
				<div id="sub_nav">Você está aqui: <a href="index.html">Home</a> \ Notícias</div>
				<!-- /Page navigation--></div>
				<div class="right"></div>
			</div>
		<!-- /sub page header-->

		<div class="sub_page">


		<div class="page_left  content">

						<!-- blog box-->
							<div class="blog_box">
								<div class="blog_box_r">
									<!-- blog headline-->
										<h2><a href="blog_post.html" title="">Título da notícia</a></h2> 
									<!-- / blog headline-->

									<!-- date and cathegory bar -->
										<div class="dateandcategories">
									  Em 05 Novembro de 2011</div>
									<!-- / date and cathegory bar -->
								</div>

								<!-- blog text-->
									<p>
										<!-- blog image-->
										<img src="http://www.ortodontiadantebello.com.br/images/9.jpg" alt="" class="aligncenter post_image"  width="670" height="120"/>
										<!-- / blog image -->
										Nulla neque ipsum, rhoncus eu euismod sed, ullamcorper a urna. <a href="">Aenean ut nibh odio</a>, vitae mollis odio. Maecenas faucibus auctor interdum. Nam commodo vehicula sapien sit amet aliquam. Nam eu diam ac dolor volutpat consequat vitae at neque. Ut at tortor nisi. Aliquam sit amet sapien nibh. Vivamus quis tellus id eros volutpat condimentum sed ac ante. In vel  sagittis pellentesque eu a est.
									</p>
									<a href="" title=""  class="read_more">Leia mais</a>
								<!-- /blog text-->
								<div class="line"></div>
							</div>
						<!-- blog box-->


						<!-- blog box--><!-- blog box-->


						<!-- blog box--><!-- blog box-->


						<!-- paging-->
						  <div id="paging">
								<ul>
									<li class="arrow"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li class="arrow"><a href="#">&raquo;</a></li>
								</ul>
							</div>
						<!-- / paging-->
		</div>
		
			<!-- /page left -->
			
			<!-- page right-->
			<div class="page_right">

				<h2>Sub Menu</h2>
				<!-- sub link-->
						<ul id="sub_menu">
						<li><a href="/servicos/" title="">Serviços</a></li>
						<li><a href="/dicas-de-saude/" title="">Dicas de Saúde</a></li>
                        <li><a href="/contato/" title="">Contato</a></li>
						</ul>			
				<!-- /sub link-->

				<!-- box -->
					<div class="box middle">
						<div class="imgarea" style="border-bottom: 1px solid #E8F0F4;">
								<!-- box image -->
								<iframe width="259" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?q=Rua+Felipe+Neri,+447+google+maps&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Felipe+Neri,+447+-+Auxiliadora,+Porto+Alegre+-+Rio+Grande+do+Sul,+90440-150&amp;gl=br&amp;t=m&amp;vpsrc=0&amp;ll=-30.022881,-51.190882&amp;spn=0.018579,0.02223&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</div>
						<div class="textarea">
							<!-- box title-->
							<h2>Contato</h2>
								<!-- text-->
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at dolor sit amet enim bibendum accumsan in sit amet velit. Fusce et est nec nisi congue commodo vel ut metus. Vestibulum odio arcu, imperdiet eu bibendum vel, sagittis vel est. Fusce a dui sem, ac facilisis eros.
								<br />
						</div>
					</div>
				<!-- /box -->

			</div>
			<!-- page right-->
		<div class="clear_space_h"></div>
		</div>
<?php	 	 
  $conteudo = ob_get_contents(); 
  ob_end_clean(); 
?>