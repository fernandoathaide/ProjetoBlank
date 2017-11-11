<?php
	if(!empty($_GET['msn'])){
		if($_GET['msn']== "u")echo "<script>alert('Usuário não encontrado!');</script>";
		if($_GET['msn']== "s")echo "<script>alert('Senha incorreta!');</script>";
		if($_GET['msn']== "b")echo "<script>alert('Banco de dados não encontrado!');</script>";
		if($_GET['msn']== "acesso")echo "<script>alert('Acesso negado!');</script>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login SisBlank</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/blank_login.css" />
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap-theme.min.css" />
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/blank_login.js"></script>
		<script type="text/javascript">
			function validar(){
				var n = document.getElementById("nome").value;
				var s = document.getElementById("senha").value;
				if(n==""){
					alert("Preencha o campo nome!");
					document.getElementById("nome").focus();
					return false;
				}else if(s==""){
					alert("Preencha o campo senha!");
					document.getElementById("senha").focus();
					return false;
				}else return true;
			}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="row" id="pwd-container">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<section class="login-form">
					<form method="post" action="action/blank_login.php" role="login">
						<img src="img/logo.png" class="img-responsive" alt="aSuperarts" />
						<input type="email" name="email" placeholder="Email" required class="form-control input-lg" />
						<input type="password" name="senha" class="form-control input-lg" id="password" placeholder="Password" required />
						<div class="pwstrength_viewport_progress"></div>
						<button type="submit" name="entrar" class="btn btn-lg btn-primary btn-block">Entrar</button>
						<div>
							<a href="#">Recuperar senha.</a>
						</div>
					</form>
					<div class="form-links">
						<table border="0">
						<tr>
							<td>
							<img src="img/logoRQH.png" class="img-responsive" alt="RQH Soluções" width="30" />
							</td>
							<td>
								<a href="http://www.rqhsolucoes.com.br"><strong>By: RQH Soluções</strong></a>
							</td>
						</tr>
						</table>
					</div>
					</section>  
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</body>
</html>