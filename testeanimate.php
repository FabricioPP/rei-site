<php>

	<?php
	$title = '<title>Criação de sites - Rei Criação e desenvolvimento de Websites</title>';
    $page = 'home';
    $addCss = '<link rel="stylesheet" href="css/animate.css">';
	include 'cabecalho.php' ?>

		</div>
		<div class="principal" id="teste">
			<div class="center">

				<div class="container slideshow-container">
					<div class="slideText fade1">
						<p class="textSlide" style="text-shadow: 1px 1px 4px black; margin-top: 30px">Criação de Sites Responsivos</p>
						<img class="imgSlideXL" src="images/sitesresponsivos.png" style="width: 90%; margin: auto; margin-bottom: 20px;" />
						<img class="textSlide" src="images/trac.png" />
						<p class="textSlide" class="uppercase" style="color: white; text-shadow: 3px 3px 5px black;">Adapta a qualquer tela</p>

						<button type="button" id="btnSaibaMais" class="btn btn-success">
							<a href="servicos.php?val=1">Saiba mais</a>
						</button>
					</div>
					<div class="slideText fade1">
						<p class="textSlide" style="text-shadow: 1px 1px 4px black">Criamos Sistemas Web</p>
						<img class="imgSlideXL" src="images/sitesprofissionais.png" style="width: 90%; margin: auto; margin-bottom: 20px;" />
						<img class="textSlide" src="images/trac.png" />
						<p class="textSlide" style="color: white; text-shadow: 3px 3px 5px black;">Inovadores e sob medida</p>

						<button type="button" id="btnSaibaMais" class="btn btn-success">
							<a href="servicos.php?val=5">Saiba mais</a>
						</button>
					</div>
					<div class="slideText fade1">
						<p class="textSlide" style="text-shadow: 1px 1px 4px black">Criação de Lojas Virtuais</p>
						<img class="imgSlideXL" src="images/lojavirtual.png" style="width: 90%; margin: auto; margin-bottom: 20px;" />
						<img class="textSlide" src="images/trac.png" />
						<p class="textSlide" class="uppercase" style="color: white; text-shadow: 3px 3px 5px black;">Aumente suas vendas, vendendo na internet</p>

						<button type="button" id="btnSaibaMais" class="btn btn-success">
							<a href="servicos.php?val=2">Saiba mais</a>
						</button>
					</div>
					<a class="prev1" onclick="plusSlides(-1)" style="color: white">&#10094;</a>
					<a class="next1" onclick="plusSlides(1)" style="color: white">&#10095;</a>

					<div style="text-align:center">
						<span class="dot1" onclick="currentSlide(1)"></span>
						<span class="dot1" onclick="currentSlide(2)"></span>
						<span class="dot1" onclick="currentSlide(3)"></span>
					</div>
				</div>
			</div>

		</div>
		<section class="textoCall">
			<p>Somos uma
				<strong style="color: darkblue">empresa</strong> de criação de sites e desenvolvimento de soluções web. Criamos sites, loja virtuais e sistemas web para
				que a tecnologia trabalhe a seu favor. Somos uma empresa, focada em aumentar os
				<strong style="color: darkblue">resultados do seu negócio</strong>.</p>

		</section>
		<section class="section-produtos" id="produtos">
			<h3 class="section-titulo2">
				<a href="#">Serviços</a>
			</h3>
			<div class="container-cards">
				<div class="card wow fadeInLeft" data-wow-duration="2s">
					<img src="images/site_card.png" alt="Site" style="width: 100%">
					<div class="container">
						<h4>Criação de Site</h4>
						<p>Conecte seus clientes atráves de um site totalmente responsivo e profissional.</p>
						<button type="button" class="btn btn-success">
							<a href="servicos.php?val=1">Saiba Mais</a>
						</button>
					</div>
				</div>
				<div class="card wow fadeInLeft" data-wow-duration="2s">
					<img src="images/lojavirtual_card.png" alt="Site" style="width: 100%">
					<div class="container">
						<h4>Lojas Virtuais</h4>
						<p>Aumente suas vendas, criando uma loja virtual e vendendo seus produtos para todo o Brasil.</p>
						<button type="button" class="btn btn-success">
							<a href="servicos.php?val=2">Saiba Mais</a>
						</button>
					</div>
				</div>
				<div class="card wow fadeInRight" data-wow-duration="2s">
					<img src="images/seo_card.png" alt="Site" style="width: 100%">
					<div class="container">
						<h4>Otimização de SEO</h4>
						<p>Melhore sua colocação no sistema de busca do Google, e expanda ainda mais sua marca.</p>
						<button type="button" class="btn btn-success">
							<a href="servicos.php?val=3">Saiba Mais</a>
						</button>
					</div>
				</div>
				<div class="card wow fadeInRight" data-wow-duration="2s">
					<img src="images/solucoes_web_card.png" alt="Site" style="width: 100%">
					<div class="container">
						<h4>Sistemas Web</h4>
						<p>Faça a tecnologia trabalhar para você. Soluções web inovadoras sob medida.</p>
						<button type="button" class="btn btn-success">
							<a href="servicos.php?val=5">Saiba Mais</a>
						</button>
					</div>
				</div>
			</div>
		</section>


		<?php $addScript = '<script src="js/slidescript.js"></script>	
						
						<script>
							document.getElementById("btnSaibaMais").addEventListener("click", function () {
								home.classList.remove("active");
								produtos.classList.add("active");
								contatos.classList.remove("active");
								sobre.classList.remove("active");
							});
                        </script>
                        <script src="js/wow.min.js"></script>
                        <script>
                            new WOW().init();
                        </script>';
			include('rodape.php');
	?>

</php>