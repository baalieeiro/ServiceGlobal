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

	
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	<script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery-1.8.2.js"></script>
	<script src="js/jquery-ui.js"></script>

   <script>
$(function() {
    $( "#calendario" ).datepicker();
});

</script>



 <script>
$(function() {
    $( "#finaldate" ).datepicker();
});
</script>

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
					<h2>Monte seu pacote</h2>
				</div>
			</div>
			<div class="row">
			<div class="col-md-10 col-md-push-1 ">
					<div class="row">
						
  
	<?php
if (isset($_POST['BTEnvia'])) {
	
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	
	$email_remetente = "desenvolvimento@serviceglobal.com.br"; 
	$email_destinatario = "desenvolvimento@serviceglobal.com.br"; 
	$email_reply = "$email"; 
	$email_assunto = "SOLICITALÇÃO COTAÇÃO - WEBSITE"; 
	
	$email_conteudo = "Nome: $nome \n"; 
	$email_conteudo .= "Telefone: $telefone \n"; 
	$email_conteudo .= "Email: $email \n";	
	$email_conteudo .= "Data Incial: $calendario \n";
	$email_conteudo .= "Data Final: $finaldate \n";
	$email_conteudo .= "Quantidades Adultos: $adultos \n";
	$email_conteudo .= "Quantidades Crianças: $criancas \n";
	$email_conteudo .= "Idades das Crianças: $idscri \n";	
	$email_conteudo .= "Destino: $destino \n";				
	$email_conteudo .= "Observação: $obs \n"; 
	
	
	
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>Solicitação de cotação enviada com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	
} 
	
?>
	
	<form action="<? $PHP_SELF; ?>" method="POST"> 
	 
    	<div class="col-md-8">
		<div class="form-group">	
		<input class="form-control" placeholder="Nome" type="text" size="30" name="nome"> 
        </div>
        </div>
	   
	
	 
		<div class="col-md-4">
		<div class="form-group">	
		<input class="form-control" placeholder="Telefone" type="text" size="35" name="telefone"> 
        </div>
        </div>
	
    	
        <div class="col-md-12">
		<div class="form-group">	
		<input class="form-control" placeholder="Email" type="text" size="30" name="email">	
        </div>
        </div>	
        
        <div class="col-md-3">
		<div class="form-group">	
		<input class="form-control" placeholder="Data Incial" type="text" name="calendario" id="calendario" />
        </div>
        </div>
        
       
        
      	<div class="col-md-3">
		<div class="form-group">	
		<input class="form-control" placeholder="Data Final" type="text" name="finaldate" id="finaldate" />
        </div>
        </div>
        
        <div class="col-md-2">
		<div class="form-group">	
		<input class="form-control" placeholder="Adultos" type="text" name="adultos" />
        </div>
        </div>
        
        <div class="col-md-2">
		<div class="form-group">	
		<input class="form-control" placeholder="Crianças" type="text" name="criancas" />
        </div>
        </div>
        
        <div class="col-md-2">
		<div class="form-group">	
		<input class="form-control" placeholder="Idades Cri" type="text" name="idscri" />
        </div>
        </div>
        
        <div class="col-md-12">
		<div class="form-group">	
		<input class="form-control" placeholder="Destino" type="text" name="destino"/>
        </div>
        </div>
    
		
        <div class="col-md-12">
		<div class="form-group">	
		<textarea  class="form-control"  cols="30" rows="7" type="text" placeholder="Observações" name="obs"></textarea>
        </div>
        </div>
	
         
         <div class="col-md-12">
		 <div class="form-group">
         <input type="submit" name="BTEnvia"  class="btn btn-primary" value="Solicitar Cotação"> 
	  <input type="reset" name="BTApaga"  class="btn btn-primary" value="Apagar">
      </div></div>
        
                       		
                                                 	
               
                        
       
					</div>
                    
				</div>
			</div>
		</div>
	</div>
	
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
	<!-- jQuery Easing -->
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

