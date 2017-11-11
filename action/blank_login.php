<?php
	if(getenv("REQUEST_METHOD") == 'POST'){
		try {
			include_once('class/User.php');
			include_once('dao/UserDAO.php');
			$email = $_POST["email"];
			$senha = $_POST["senha"];
			$senha = md5($senha);
			
			$user = new User();
			$userDao = new UserDAO();
			
			$results = $userDao->getEmail($email);
			if($results!=null){
				foreach($results as $user){
					if($senha == $user->getSenha()){
						
						session_start();
						$_SESSION['logado'] = 'sim';
						$_SESSION['user'] = $email;
						$_SESSION['tipo'] = $user->getPerfil();
						header("location: ../telaPrincipal.php");
						
					}else header('location: ../index.php?msn=s');
				}
			}else header('location: ../index.php?msn=u');
		}catch (Exception $e) {
			header("location: ../index.php?msn={$e->getMessage()}");
		}
	}else header("location: ../index.php?msn=ErroMethod");
?>