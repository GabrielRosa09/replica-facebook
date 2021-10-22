<!DOCTYPE html>

<html>

	<head>
		<title>Login Facebook</title>
		<!--Aplicar depois as meta tags-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="descripition" content="Crie uma conta ou entre no Facebook. Conecte-se com amigos, familiares e outras pessoas que você conheça.">
		<meta name="author" content="Gabriel da Silva">
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<header>

			<div class="center">

				<div class="logo">
					<h2>G</h2>
				</div> <!--logo-->

				<form method="post" class="form-login">

					<div class="form-element">
						<p>E-mail ou telefone</p>
						<input type="email" >
					</div><!--form-element-->

					<div class="form-element">
						<p>Senha</p>
						<input type="password" >
					</div><!--form-element-->

					<div class="form-element">
						<input type="submit" name="acao" value="Entrar" >
					</div><!--form-element-->

				</form> <!--form-login-->

				<div class="clear"></div>

			</div><!--center-->
			
		</header>

		<section class="main">

			<div class="center">

				<div class="img-pessoas">

					<img src="images/facebook-image.png">
					
				</div><!--img-pessoas-->

				<div class="abrir-conta">

					<h2>Abra uma conta</h2>
					<h3>É rápido e fácil!</h3>

					<form class="criar-conta">
						
						<div class="w50">
							<input placeholder="Nome" type="text">
						</div><!--w50-->

						<div class="w50">
							<input placeholder="Sobrenome" type="text">
						</div><!--w50-->

						<div class="w100">
							<input placeholder="E-mail" type="email">
						</div><!--w100-->

						<div class="w100">
							<input placeholder="Senha" type="password">
						</div><!--w100-->

						<div class="w100">

							<h2>Data de nascimento</h2>

							<select name="nascimento-dia" class="nascimento">
								<?php
									for($i = 1; $i <= 31; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>

							<select name="nascimento-mes" class="nascimento">
								<option value="0">Fevereiro</option>
							</select>

							<select name="nascimento-ano" class="nascimento">
								<?php
									for($i = 1930; $i <= 2020; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>

							<div class="clear"></div> <!--clear-->

						</div><!--w100-->

						<div class="w100">

							<h2>Gênero</h2>

							<div class="input-radio">
								<input type="radio" name="sexo" value="masculino">
								<h2>Masculino</h2>
							</div>

							<div class="input-radio">
								<input type="radio" name="sexo" value="feminino">
								<h2>Feminino</h2>
							</div>

							<div class="clear"></div> <!--clear-->

						</div>	

						<div class="w100">
							<input type="submit" name="acao" value="Cadastre-se">
						</div>

						<div class="clear"></div> <!--clear-->

					</form><!--criar-conta-->
					
				</div>

				<div class="clear"></div> <!--clear-->
				
			</div><!--center-->
			
		</section><!--main-->

		<section class="linguas">

			<div class="center">

				<a target="_blank" class="selected-lingua" href="#">Português (BR)</a>
				<a target="_blank" href="#">English (US)</a>
				<a target="_blank" href="#">Español</a>
				<a target="_blank" href="#">Français (France)</a>
				<a target="_blank" href="#">Italiano</a>
				<a target="_blank" href="#">العربية</a>
				<a target="_blank" href="#">Deutsch</a>
				<a target="_blank" href="#">हिन्दी</a>
				<a target="_blank" href="#">中文(简体)</a>
				<a target="_blank" href="#">日本語</a>

			</div><!--center-->

			<div class="serviços">

				<a target="_blank" href="#">Cadastre-se</a>
				<a target="_blank" href="#">Entrar</a>
				<a target="_blank" href="#">Messenger</a>
				<a target="_blank" href="#">Facebook Lite</a>
				<a target="_blank" href="#">Watch</a>
				<a target="_blank" href="#">Pessoas</a>
				<a target="_blank" href="#">Páginas</a>
				<a target="_blank" href="#">Categorias de Página</a>
				<a target="_blank" href="#">Locais</a>
				<a target="_blank" href="#">Jogos</a>
				<a target="_blank" href="#">Locais</a>
				<a target="_blank" href="#">Marketplace</a>
				<a target="_blank" href="#">Grupos</a>
				<a target="_blank" href="#">Instagram</a>
				<a target="_blank" href="#">Local</a>
				<a target="_blank" href="#">Campanhas de arrecadação de fundos</a>
				<a target="_blank" href="#">Serviços</a>
				<a target="_blank" href="#">Sobre</a>
				<a target="_blank" href="#">Criar Página</a>
				<a target="_blank" href="#">Desenvolvedores</a>
				<a target="_blank" href="#">Carreiras</a>
				<a target="_blank" href="#">Privacidade</a>
				<a target="_blank" href="#">Cookies</a>
				<a target="_blank" href="#">Opções de anúncio</a>
				<a target="_blank" href="#">Termos</a>
				<a target="_blank" href="#">Ajuda</a>

				<footer class="copy">

					<span>Facebook © 2020</span>

				</footer>

			</div><!--center-->
			
		</section><!--linguas-->

	</body>

</html>