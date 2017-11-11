<?php
	include_once('class/User.php');
	include_once('banco/banco.php');
	 
	class UserDAO {
		public function getAll() {
			$banco = new Banco();
			$con = $banco->getConexao();
			$statement = $con->query('SELECT * FROM tb_user');
			return $this->processResults($statement);
		}
		public function getEmail($email) {
			$banco = new Banco();
			$con = $banco->getConexao();
			$statement = $con->prepare('SELECT * FROM tb_user WHERE email = :email');
			$statement->bindParam(':email', $email);
			$statement->execute();
			return $this->processResults($statement);
		}
	 
		private function processResults($statement) {
			$results = array();
	 
			if($statement) {
				while($row = $statement->fetch(PDO::FETCH_OBJ)) {
					$user = new User();
					$user->setIdUser($row->id_user);
					$user->setNome($row->nome);
					$user->setEmail($row->email);
					$user->setFoto($row->foto);
					$user->setSenha($row->senha);
					$user->setPerfil($row->perfil);
					$user->setCpf($row->cpf);
					$user->setCelular($row->celular);
					$user->setEndereco($row->endereco);
					$user->setCep($row->cep);
					
					$results[] = $user;				
				}
			}
			return $results;
		}
	}
?>