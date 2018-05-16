<head lang="pt-br">
	<?php print @$title; ?>
	<meta charset="utf-8" />
	<link rel="icon" href="/images/favicon.ico" />
	<link rel="shortcut icon" href="/images/favicon.ico"/>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/estilos.css" />
	<link rel="stylesheet" href="css/topButton.css" />
	<?php print @$addCss; ?>
	<script src="js/jquery-3.3.1.min.js">
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="site, Site, Website, Loja Virtual, Lojas Virtuais, E-commerce, Otimização SEO, SEO, Paraguaçu, Minas Gerais
									Site sul de minas, criação de sites, paraguaçu, alfenas, varginha, desenvolvimento de sites, desenvolvimento de websites">
	<meta name="description" content="A Rei é uma empresa que trabalhar com criação e desenvolvimento de sites, E-commerce, refatoração de sites, 
										e desenvolvimento de sistemas web em Paraguaçu-MG. Contamos com profissionais formados e responsáveis, preparados para
										desenvolver o melhor para você e sua empresa.">
	<meta http-equiv="Content-Language" content="pt-br">
	<meta name="author" content="Fabrício Pena Patrocínio"
</head>

<body>
		<div id="myNavbar" class="topnav" style="z-index: 9">
			<h1>
				<a href="index.php" alt="Logo Rei - Empresa de Criação e Desenvolvimento de Sites!">
					<img id="imgNav" src="images/reilogo3.png" />
				</a>
			</h1>
			<a id="linkHome" href="index.php" class="<?php if($page == 'home'){echo 'active';} ?>">Página Inicial</a>
			<a id="linkProdutos" class="<?php if($page == 'servicos'){echo 'active';} ?>" href="servicos.php">Serviços</a>
			<a id="linkSobre" class="<?php if($page == 'sobre'){echo 'active';} ?>" href="sobre.php">Sobre</a>
			<a id="linkContato" class="<?php if($page == 'contato'){echo 'active';} ?>" href="contato.php">Contato</a>
			<div id="icone" class="icon" onclick="openNav()">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
		</div>
	<div class="overlay" id="myNav">
		<div class="overlay-content" id="overlay-content">
			<a id="linkHome" class="uppercase <?php if($page == 'home'){echo 'active';} ?>" href="index.php" onclick="openNav()">Página Inicial</a>
			<a id="linkProdutos" class="uppercase <?php if($page == 'servicos'){echo 'active';} ?>" href="servicos.php" onclick="openNav()">Serviços</a>
			<a id="linkSobre" class="uppercase <?php if($page == 'sobre'){echo 'active';} ?>" href="sobre.php" onclick="openNav()">Sobre</a>
			<a id="linkContato" class="uppercase <?php if($page == 'contato'){echo 'active';} ?>" href="contato.php" onclick="openNav()">Contato</a>
		</div>
	</div>