<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    
<?php	 	 
	if($conta > 1){
		if(file_exists($url[0].".php")){
			include($url[0].".php");
		}else{
			include("home.php");
		}
	}else{
		include("home.php");
	}
?>

<title>Clínica de Ortodontia | Dr. Dante Bello<!--  - <?php	 	  echo $title;?> --></title>
<!-- <meta name="description" content="<?php	 	  echo $description;?>" />
<meta name="keywords" content="<?php	 	  echo $keywords;?>" /> -->
<link rel="icon" type="image/x-icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/favicon.png" />

<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/style_cf.css" />
<link rel="stylesheet" type="text/css" href="/css/navigation.css" />
<link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css" media="screen" />
<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.1.1.js"></script>
<script type="text/javascript" src="/js/jquery.validate.js"></script>
<script type="text/javascript" src="/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/js/cufon.js"></script>
<script type="text/javascript" src="/js/Anivers_400.font.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" href="/css/ie6.css" type="text/css" media="screen" />
<script type='text/javascript' src='/js/dd_belated_png.js'></script>
<script>DD_belatedPNG.fix('.png,.icon,#slider_con,a.read_more,#sub_menu  li a,blockquote');</script>
<![endif]-->


</head>
<body>
<!-- containers  -->
<div id="con">
	<!-- header -->
		<div id="header">
				<!-- logo -->
					<div id="logo">
						<a href="/" title=""><img src="/images/logo.png" alt="" class="png" /></a>
					</div>
				<!-- /logo -->

				<!-- header right -->
					<div id="header_right">
						
						<!-- header links -->
						<div class="top_links">
							<a href="/" title="">Home</a> |
							<a href="/contato/" title="">Contato</a>
					  </div>
						<!-- / header links -->

						<!-- header slogan -->
						<div class="top_slogan">
								<h4>Entre em contato: +51 3233 3800</h4>
						</div>
						<!-- /header slogan -->

					</div>
				<!-- /header right -->
		</div>
	<!-- /header -->
    
    
    
    <?php	 	 
		/*
		 * separa a URL por "/" e insere num vetor (array)
		 */
		$url = explode('/', $_GET['cod']);
		$conta = count($url);
		
	?>

	<div id="con0<?php	 	  if($conta > 1){ echo "_sub"; }?>">
	<div id="con01<?php	 	  if($conta > 1){ echo "_sub"; }?>">

		<!-- navigation -->
			<div id="navigation">
				<div id="dropdown_menu" class="dropdown">
					<ul>
						<li><a href="/">HOME</a></li>
						<li><a href="/a-clinica/">A CLINICA</a></li>
                        <li><a href="/dr-dante-bello/">DR. DANTE BELLO</a></li>
						<li><a href="/servicos/">SERVIÇOS</a></li>
						<li><a href="/dicas-de-saude/">DICAS DE SAÚDE</a></li>
						<!--li><a href="/noticias/">NOTÍCIAS</a></li-->
						<li><a href="/contato/">CONTATO</a></li>
					</ul>
				</div>
			</div>
		<!-- / navigation  -->

		<?php	 	 
		
		if($conta > 1){
			if(file_exists($url[0].".php")){
				include($url[0].".php");
			}else{
				//include("home.php");
				 }
		}else{
			//include("home.php");
		}
		
		echo $conteudo;
		
		?>

	<div class="clear_space_h"></div>
	</div>
	</div>
</div>
<!-- / containers  -->
<!-- footer -->
<div id="footer">

		<!-- left row -->
		<div class="footer_row list">
				<!-- row title-->
				<h4 class="footer_title">Lorem Ipsun</h4>
				<ul>
					<li><a href="#" title="">Lorem ipsum dolor sit</a></li>
					<li><a href="#" title="">Lorem ipsum dolor sit amet</a></li>
					<li><a href="#" title="">Lorem ipsum dolor sit</a></li>
                    <li><a href="#" title="">Lorem ipsum dolor sit</a></li>
				</ul>
		</div>
		<!-- / left row  -->
		
		<!-- middle row -->
		<div class="footer_row list">
				<!-- row title-->
				<h4 class="footer_title">Serviços</h4>
				<ul>
					<li><a href="/servicos/" title="Serviços - Ortodontia e Ortopedia Facial">Ortodontia e Ortopedia Facial</a></li>
					<li><a href="/servicos/" title="Serviços - Clareamento Dental">Clareamento Dental</a></li>
					<li><a href="/servicos/" title="Serviços - Placa de Bruxismo">Placa de Bruxismo</a></li>
				</ul>
		</div>
		<!-- / middle row -->

		<!--  right row -->
		<div class="footer_row contact">
				<!-- row title-->
				<h4 class="footer_title">Contato</h4>
				<ul> 
					<li>Telefone: 51 3233.3800</li>
				  	<li>Endereço: Rua Felipe Neri, 447/506</li>
                    <li>Auxiliadora - 90440-150</li>
					<li>Porto Alegre, RS - Brasil
                    <li>Email: <a href="mailto:dante.r.bello@gmail.com">dante.r.bello@gmail.com</a></li>
				</ul>
				<!-- social media icons -->
		  <ul class="social_icons" style="border: none;">
						<li><a href="#" title=""><img src="/images/social_media/facebook.png" alt="" /></a></li>
				</ul>
				<!-- / social media icons -->
		</div>
		<!-- / right row -->

	<div class="clear_space_h"></div><br />
</div>
<!-- /footer -->

</body>
</html>