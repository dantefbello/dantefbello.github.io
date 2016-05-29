<?php	 	 
  // variaveis
  $title = "Dr. Dante Bello";
  $description = "";
  $keywords = "";
?>

<?php	 	  ob_start(); ?>
<!-- sub page header-->
		<div id="sub_page_header">
			<div class="left">	
			<!-- Page navigation-->
			<div id="sub_nav">Você está aqui: <a href="index.html">Home</a> \ Dr. Dante Bello</div>
			<!-- /Page navigation--></div>
			<div class="right"></div>
		</div>
		<!-- /sub page header-->

		<div class="sub_page">

			<!-- page left -->
			<div class="page_left content">
									<!-- content -->

									<h1>DR. DANTE BELLO</h1>
																		<a title="Image Title" href="images/dantebello.jpg" rel="prettyPhoto[gallery1]"><img src="http://www.ortodontiadantebello.com.br/images/dantebello.jpg"  alt="" class="aligncenter"/></a><br />

									<p>O Dr. Dante Rafael Marroni Bello, sempre está em  busca de atualizações teóricas e tecnologias para proporcionar aos seus  pacientes o que há de melhor dentro da Ortodontia.</p>

			  <br />

									<!-- <h3>Consectetur adipisicing elit</h3>
									<p>
									Aenean tincidunt pharetra leo. Curabitur euismod sollicitudin elit. <a href=""  title="">Donec faucibus lacus nec sapien</a>. Aliquam ipsum nisi, scelerisque et, commodo nec, consectetur vel, tellus. Cras ipsum diam, hendrerit id, accumsan sit amet, fermentum vel, dui. </p>
									<p><a href=""  title="">Givensis ipsum nisi</a>, scelerisque et, commodo nec, consectetur vel, tellus. Cras ipsum diam, hendrerit id, accumsan sit amet, fermentum vel, dui.  Curabitur euismod sollicitudin elit. Donec faucibus lacus nec sapien. Aliquam ipsum nisi, scelerisque et, commodo nec, consectetur vel, tellus. Cras ipsum diam, hendrerit id, accumsan sit amet, fermentum vel, dui. Curabitur euismod sollicitudin elit. Donec faucibus lacus nec sapien. Aliquam ipsum nisi, scelerisque et, <a href="" title="">commodo nec, consectetur ve</a>l, tellus. Cras ipsum diam, hendrerit id, accumsan sit amet, fermentum vel, dui.</p>

									<br />-->

									<h3>Formação</h3>
									<!-- LIST SAMPLE -->
									<div>
									  <ul>
										  <li>Graduado em Odontologia pela PUCRS;</li>
                                          <li>Especialista em Ortodontia pela UFRGS;</li>
                                          <li>Mestre em Ortodontia e Ortopedia Facial pela PUCRS;</li>
                                          <li>Professor de Ortodontia da PUCRS;</li>
                                          <li>Ex-presidente da SOGAOR;</li>
                                          <li>Professor do Curso de Especialização da SOBRACID;</li>
                                          <li>Professor do  Curso de Especialização da IEAPOM;</li>
                                          <li>Professor  convidado para realizar cursos, seminários e palestras;</li>
                                          <li>Profissional com cursos de aperfeiçoamento  realizados no Brasil e exterior.</li>
									  </ul>
									  <!-- /TABLE SAMPLE -->
									<!-- /content -->			</div>
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