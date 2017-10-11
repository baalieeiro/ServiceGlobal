<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}


</script>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
    
    
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Service Global Turismo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<a href="index.html"><img class="log" src="images/logo/logo_header.jpg" alt="logo.png"  width="200px" height="97px"></a>
				<nav role="navigation">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">Quem Somos</a></li>
                        <li><a href="pacotes.html">Pacotes</a></li>
						<li><a href="cruzeiros.html">Cruzeiros</a></li>
						<li><a href="dicas.html">Dicas</a></li>
						<!--<li><a href="blog.html">Blog</a></li>-->
						<li><a class="active" href="contato.php">Contato</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div id="fh5co-contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Contato</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
				  <h3>Contate-nos.</h3>
					<ul class="contact-info">
						<li>Praça da Liberdade, 190 - CJ 13 - Liberdade - São Paulo<br>
						  CEP: 01503-010</li>
						<li>Telefone: (55 11) 3572-8990</li>
						<li>Fax: (55 11) 3572-8998</li>
						<li><i class="sl-icon-envelope-open"></i><a href="mailto:atendimento@serviceglobal.com.br" title="">atendimento@serviceglobal.com.br</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						
                       
                              
	
	<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "desenvolvimento@serviceglobal.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "desenvolvimento@serviceglobal.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato WEBSITE"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
	
?>
	
	<form action="<? $PHP_SELF; ?>" method="POST"> 
	 
    	<div class="col-md-6">
		<div class="form-group">	
		<input class="form-control" placeholder="Nome" type="text" size="30" name="nome"> 
        </div>
        </div>
	   
	
	 
		<div class="col-md-6">
		<div class="form-group">	
		<input class="form-control" placeholder="Telefone" type="text" size="35" name="telefone"> 
        </div>
        </div>
	
    	
        <div class="col-md-12">
		<div class="form-group">	
		<input class="form-control" placeholder="Email" type="text" size="30" name="email">	
        </div>
        </div>	
    
		
        <div class="col-md-12">
		<div class="form-group">	
		<textarea name="mensagem" class="form-control"  id="" cols="30" rows="7" type="text" placeholder="Mensagem"> </textarea>
        </div>
        </div>
	
         
         <div class="col-md-12">
		 <div class="form-group">
         <input type="submit" name="BTEnvia"  class="btn btn-primary" value="Enviar"> 
	  <input type="reset" name="BTApaga"  class="btn btn-primary" value="Apagar">
      </div></div>
        
                       		
                                                 	
               
                        
       
					</div>
				</div>
			</div>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1828.6737238918106!2d-46.6345401!3d-23.5559617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59a9256ac33b%3A0x9f42ff10055bad0!2sAv.+da+Liberdade%2C+190+-+Liberdade%2C+S%C3%A3o+Paulo+-+SP%2C+Brasil!5e0!3m2!1spt-BR!2s!4v1427825040364" width="100%" height="400px" frameborder="0" style="border:0"></iframe>
	<footer id="fh5co-footer" role="contentinfo">
	  <div class="container">
	    <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
	      <h3>Quem Somos</h3>
	      <p><a>SERVICE VIAGENS E TURISMO GLOBAL LTDA</a>, é uma agência de viagens que tem como objetivo, oferecer um serviço de qualidade, sempre procurando adequar-se as necessidades de cada cliente. </p>
        </div>
	    <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
	      <h3>Mapa do Site</h3>
	      <ul class="float">
	        <li><a href="#">Pacotes</a></li>
	        <li><a href="#">Dicas de Viagens</a></li>
	        <li><a href="#">Revista</a></li>
	        <li><a href="#">Contato</a></li>
          </ul>
	      <ul class="float">
	        <li><a href="#">Serviços Consulares</a></li>
	        <li><a href="#">Locação de veículos</a></li>
	        <li><a href="#">Links Úteis</a></li>
	        <li><a href="#">Japan Rail Pass</a></li>
	        <li><a href="#">Cruzeiros</a></li>
          </ul>
        </div>
	    <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
	      <h3>Siga-nos</h3>
	      <ul class="fh5co-social">
	        <li><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
	        <li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
	        <li><a href="#"><i class="icon-google-plus"></i> Google Plus</a></li>
	        <li><a href="#"><i class="icon-instagram"></i> Instagram</a></li>
          </ul>
        </div>
	    <div class="col-md-12 fh5co-copyright text-center">
	      <p>&copy; <a href="#">Service Global Turismo</a>. All rights reserved.</p>
        </div>
      </div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

