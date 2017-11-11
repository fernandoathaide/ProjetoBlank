<?php
	class User{
		private $idUser;
		private $nome;
		private $email;
		private $foto;
		private $senha;
		private $perfil;
		private $cpf;
		private $celular;
		private $endereco;
		private $cep;
	 
		public function getIdUser(){
			return $this->idUser;
		}
		public function setIdUser($idUser){
			$this->idUser = $idUser;
			return $this;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
			return $this;
		}
		public function getFoto(){
			return $this->foto;
		}
		public function setFoto($foto){
			$this->foto = $foto;
			return $this;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;
			return $this;
		}
		public function getPerfil(){
			return $this->perfil;
		}
		public function setPerfil($perfil){
			$this->perfil = $perfil;
			return $this;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function setCpf($cpf){
			$this->cpf = $cpf;
			return $this;
		}
		public function getCelular(){
			return $this->celular;
		}
		public function setCelular($celular){
			$this->celular = $celular;
			return $this;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
			return $this;
		}
		public function getCep(){
			return $this->cep;
		}
		public function setCep($cep){
			$this->cep = $cep;
			return $this;
		}
	}
?>