<?php include_once "classes/conecta.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>AnimesDS</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body id="top">
		<div class="menu-caixa">
			<a href=""><img class="logo" src="icones/icone.png"></img></a>
			<a href="index.html"><img src="icones/home.png" class="a"></a>
			<a href="cadastro.html" ><img src="icones/cadastro.png" class="b"></a>
			<a href="" ><img src="icones/informação.png" class="c"></a>
			<a href=""><img src="icones/pesquisa.png" class="d" ></a>

		</div>
				<section id="papelParede">
					<div class="inner">
						<div class="texto">
							<h1>AnimeDS</h1>
							<p>O melhor dos animes que você mais ama<br /></p>
						</div>
					</div>
				</section>
				<div id="main">
					<div class="inner">
						<div class="tabela">
							<?php
							
							$sql = $conecta->query("SELECT * from tbl_animes");

							while($linha = $sql->fetch_array()){
								$nome = $linha['nome'];
								$sinopse = $linha['sinopse'];
								$imagem = $linha['imagem'];
								echo"
								<div class='caixa'>
									<a href='https://youtu.be/s6zR2T9vn2c' target='_black' class='image fit'><img src='$imagem' image/></a>
									<div class='inner'>
										<h3>$nome</h3>
										<p>$sinopse</p>
										<a href='naruto.html' class='button fit'>Assistir</a>
									</div>
								</div>";

							}
							
							?>
						

						</div>

					</div>
				</div>
				<footer id="footer">
					<div>
						<center>Alunos do primeiro de Desenvolvimento de Sistemas</center><br>
					</div>
				</footer>

	</body>
</html>