<script>
	function variacao(id, nome, valor){
		window.parent.document.getElementById('id').value=id;
		window.parent.document.getElementById('n').value=nome;
		window.parent.document.getElementById('v').value=valor;
		window.parent.document.getElementById('atualiza').focus();		
	}
</script>
<table border="0">
	<?php
		require_once('../../action/conexao/banco.php');
		$sql = "SELECT * FROM tb_produto WHERE tipo='combo' and qt_produto>0;";
		$tabela = $con->query($sql);
		$ct=0;
		foreach($tabela as $linha){
			if($ct==0) {echo("<tr>");}
			echo("
				<td align='center'>
					<label for='combo'>{$linha['nome']}<br />R$ {$linha['preco']}</label><br/>
					<input type='image' src='../{$linha['fotos']}' name='MinhaImagem'  width='100px' 
		onclick=\"variacao('{$linha['id_produto']}','{$linha['nome']}','{$linha['preco']}');\"/>
				</td>
			");
			$ct++;
			if($ct==7){
				echo("</tr>");
				$ct=0;
			}
		}
	?>
</table>