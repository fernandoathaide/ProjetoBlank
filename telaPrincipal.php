<?php
	session_start();
	if((isset($_SESSION['user'])) and (isset($_SESSION['tipo']))){
		echo "<script>alert('Bem vindo!');</script>";
		if($_SESSION['tipo']==1){
			echo("<style>
					#adm, #manter, #estampagem {
						display:none;
					}
				</style>
			");
		}
		if($_SESSION['tipo']==2){
			echo("
				<style>
					#adm, #manter {
						display:none;
					}
				</style>
			");
		}
	}else header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de Controle para Placas Blank do DETRAN DF ">
    <meta name="author" content="RQH Soluções">
    <link rel="icon" href="img/logo.png">
	<script src="js/blank_abrirPaginas.js"></script>
	
    <title>SisBlank</title>
	<link rel="stylesheet" type="text/css" href="css/blank_principal.css" />
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<script type="text/javascript">
		try{
			xmlhttp = new XMLHttpRequest();
		}catch(ee){
			try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}catch(e){
				try{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}catch(E){
					xmlhttp = false;
				}
			}
		}
		div_base = "";
	</script>
  </head>

  <body>

    <!-- Fixed navbar -->
     <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="img/logo.png" width="150" style="margin:0px; padding:0px;" class=".img-responsive" />
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
				<li id="manter" class="active dropdown">
					<a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manter Blank <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Adicionar</a></li>
						<li><a href="#">Retirar</a></li>
					</ul>
				</li>
				<li id="estampagem" class="dropdown">
					<a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estampar Blank <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="javascript: abre('../form/form_gerarQRCode.php','GET','conteudo');">Estampagem Gerar QR-Code</a></li>
					</ul>
				</li>
				<li><a href="#">Acompanhar Blank</a></li>
				<li><a href="#">Contato</a></li>
				<li id="adm" class="dropdown">
					<a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administração <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="javascript: abre('../form/form_cadUsuario.php','GET','conteudo');">Manter Usuário</a></li>
					</ul>
				</li>			
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li>
					<form id="sair" action="action/blank_logout.php">
						<button type="action" class="btn btn-danger">SAIR</button>
					</form>
				</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <!-- Begin page content -->
    <div id="conteudo" class="container">
      <div class="mt-3">
        <h1>SisBlank</h1>
      </div>
      <p class="lead">Sistema de cadastro de placas do Detran DF.</p>
    </div>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">© Copyright 2017 aSuperarts Comunicação Visual e Sinalização Arquitetônica.<br/>Todos os direitos reservados.<br/><a href="http://www.rqhsolucoes.com.br"><strong>By: RQH Soluções</strong></a></span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>