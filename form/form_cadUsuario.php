<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="js/blank_abrirPaginas.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/Form_cadUsuario.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	
	
  </head>
		
  <body>
  		<div class="container">
			<div class="box">
			<form id="form_cadUsuario" method="post" action="cadUsuario" >
							<table border="0">
									<tr>
										<td class="nome">
											<label>Nome:</label>
										</td>
									</tr>
									<tr>
										<td>
											<input id="nome" name="nome" class="" type="text" />
										</td>
									</tr>
									<tr>
										<td class="email">
											<label>E-mail:  </label>
									</td>
									</tr>
									<tr>
										<td>
											<input id="email" name="email" class="" type="text"/>
										</td>
									</tr>
									<tr>
										<td class="foto">
											<label>Foto:</label>
										</td>
									</tr>
									<tr>
										<td>
											<input id="foto" name="foto" class="" type="file" />
										</td>
									</tr>
									<tr>
										<td class="senha">
											<label>Senha:</label>
										</td>
									</tr>
									<tr>
										<td>
											<input id="senha" name="senha" class="" type="password" />
										</td>
									</tr>
									<tr>
										<td class="perfil">
											<label>Perfil:</label>
										</td>
									</tr>
									<tr>
										<td>
											<select>
													<option>Usuário</option>
													<option>Funcionário</option>
													<option>Administrador</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="cpf">
											<label>CPF:</label>
										</td>
									</tr>
									<tr>
										<td>
											<input id="cpf" name="cpf" class="" type="text" />
										</td>
									</tr>
									<tr>
										<td class="celular">
											<label>Celular:</label>
										</td>
									</tr>
									<tr>
									<td>
											<input id="celular" name="celular" class="" type="text"  />
										</td>
									</tr>
									<tr>
										<td class="textarea">
											<label>Endereço:</label>
											
											<input id="endereco" name="endereco" class="textarea" type="text" />
										</td>
									</tr>
									<tr>
										<td class="cep">
											<label>CEP:</label>
											</td>
											</tr>
											<tr>
											<td>
											<input id="" name="" class="" type="text"  />
										</td>
									</tr>
								<tr>
									<td class="">
										<input type="submit" id="" name="" class="button" value="Cadastrar"  />
									</td>
								</tr>
					</table>
			</form>
			</div>
			</div>
		
  </body>
  
  </html>