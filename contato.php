<?php	 	 
  // variaveis
  $title = "Contato";
  $description = "www.clinicasaadi.com.br, Sistema Cardiovascular Anatomia, Clinica Saadi, Ponte de Safena na Perna, Procedimento de Transplante Cardiaco, Aneurisma da Aorta Causas";
  $keywords = "www.clinicasaadi.com.br, Sistema Cardiovascular Anatomia, Clinica Saadi, Ponte de Safena na Perna, Procedimento de Transplante Cardiaco, Aneurisma da Aorta Causas, Aneurisma da Aorta Causas, clinicasaadi.com.br, Aneurisma Prevenção, Marcapasso Cardiaco, Marcapasso, Cinecoronariografia, A Clínica  - Notícias - ";
?>

<?php	 	  ob_start(); ?>
		<!-- sub page header-->
			<div id="sub_page_header">
				<div class="left">	
				<!-- Page navigation-->
				<div id="sub_nav">Você está aqui: <a href="index.html">Home</a> \ Contato</div>
				<!-- /Page navigation--></div>
				<div class="right"></div>
			</div>
		<!-- /sub page header-->

		<div class="sub_page">
			<div class="page_left  content">

							<h3>FORMULÁRIO DE CONTATO</h3>
							<!--p>
							Aenean tincidunt pharetra leo. Curabitur euismod sollicitudin elit. <a href=""  title="">Donec faucibus lacus nec sapien</a>. Aliquam ipsum nisi, scelerisque et, commodo nec, consectetur vel, tellus. Cras ipsum diam, hendrerit id, accumsan sit amet, fermentum vel, dui. </p-->
							<!-- contact form -->
								<div id="contact_form">
									<form action="http://www.ortodontiadantebello.com.br/contact_form.php" name="contact_form" id="validate_form" method="post">
											<ul>
												<li>
												  <label for="name">Seu Nome: (*)</label>
												  <input id="name" type="text" name="name" value="" class="required" /> </li>
												<li>
												  <label for="email">Seu E-mail: (*)</label>
												  <input id="email" type="text" name="email" value="" class="required"	 /> </li>
												<li>
												  <label for="phone">Número de Telefone: (*) </label>
												  <input id="phone" type="text" name="phone" value="" class="required" /></li>
												<li>
												  <label for="message">Sua Mensagem: (*)</label><textarea  id="message" name="message" rows="8" cols="40"	class="required"></textarea></li>
												<li><input type="submit" class="button" value="Envie"  /></li>
											</ul>
									</form>
								</div>
							<!-- /contact form -->
			</div>
			<!-- /page left -->
			
			<!-- page right-->
			<div class="page_right">
				<!-- box -->
					<div class="box middle">
						<div class="textarea">
							<!-- box title-->
						  <h2>Entre em Contato</h2>
								<!-- text-->
									<b>Endereço:</b>  Rua Felipe Neri, 447/506<br />
Auxiliadora - 90440-150<br />
Porto Alegre, RS - Brasil<br />
									<b>Telefone:</b> 51 3233.3800<br />
									<b>E-Mail:</b> <a href="mailto:dante.r.bello@gmail.com">dante.r.bello@gmail.com</a>


						</div>
					</div>
				<!-- /box -->
				<!-- box -->
					<div class="box middle">
						<div class="textarea">
							<!-- box title-->
							<h2>Google Maps</h2>
								<!-- text-->
								<div class="clear_space_h"></div>
								<iframe width="260" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?q=Rua+Felipe+Neri,+447+google+maps&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Felipe+Neri,+447+-+Auxiliadora,+Porto+Alegre+-+Rio+Grande+do+Sul,+90440-150&amp;gl=br&amp;t=m&amp;vpsrc=0&amp;ll=-30.022881,-51.190882&amp;spn=0.018579,0.02223&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.br/maps?q=Rua+Felipe+Neri,+447+google+maps&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Felipe+Neri,+447+-+Auxiliadora,+Porto+Alegre+-+Rio+Grande+do+Sul,+90440-150&amp;gl=br&amp;t=m&amp;vpsrc=0&amp;ll=-30.022881,-51.190882&amp;spn=0.018579,0.02223&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left" target="_blank">Exibir mapa ampliado</a></small>
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