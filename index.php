<!doctype html> <!-- doctype mostra que isso é um arquivo HTML5 -->
<html lang="pt-br"> <!-- define a linguagem do site m Portugues Brasil-->
	
<head>
	<meta charset="utf-8">
	<meta name="Description" content="Site kiBeleza"> <!-- Qunado passar o mouse no cabeçalho do site, no brownser irá aparecer esse nome, e no google aparece como descrição, até 128 caracteres-->
	<meta name="Keywords" content="Beleza, Cortes">    <!-- O que tem o site, ajuda no sistema de busca, até 8/10 esta bom -->
	<title>.: KiBeleza:.</title> <!-- Nome que aparece no cabeçalho do site -->
	
	
	<!-- para o vanegador identificar qual alargura da tela, para o responsivo, o 1.0 é onde se inicia , que seria o 100%-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<!-- ANIMETED css do animated, deve ficar a cima do noss css-->	
	<link rel="stylesheet" href="css/animate.css">

	<!-- stick-->
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>

	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	
	
	<link rel="stylesheet" href="css/resete.css">
	
	<!--importar o arquivo css principal, sempre será o ultimo-->
	<link  rel="stylesheet" href="css/estilo.css">
		  
	<!--rel diz que estamos importando um arquivo em cascata.
			o href é o local que está o arqivo-->
	

</head>

<body> 
	 <!-- aqui é o  topo-->
	
	<?php require_once("topo.php") ?> <!-- importanto um arquivo php , requeri_once n deixa importa 1 coisa  2 vezes-->
	
	<!--banner -->
	<?php require_once("banner.php") ?>
	
	<section class="site tendencias fundosite"> <!-- seção tendencias -->
		
		<h2>TENDÊNCIAS</h2>	
				
		<article class="tendenciasBox">
			
			<article>
				<img src="img/tendendia1.png" alt="Tendências">
				<h3>Tendência 1</h3>
				<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap ."</p>
				<a href="#">Leia Mais</a> 
			</article>
			
			<article>
				<img src="img/tendendia2.png" alt="Tendências">
				<h3>Tendência 2</h3>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
				<a href="#">Leia Mais</a>
			</article>
			
			<article>
				<img src="img/tendendia3.png" alt="Tendências">
				<h3>Tendências 3</h3>
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
				<a href="#">
					Leia Mais
				</a>
			</article>			
			
		</article>
		
	</section> <!--final tendencias-->
	
	<div class="FundoSobre"> <!--deixa o fundo colorido ifual do topo-->
	
		<!--importando o o arquivo sobre do php -->
		<?php require_once("section-sobre.php") ?>
		
		
	</div>	
	
	<!-- CARROSEL INSTAGRAM -->
	<?php require_once("instagram.php") ?>
		
	<section class="blog site">
		<article>
			<img src="img/blog.png" alt="Blog">
		</article>
		
		<article>
			<img src="img/insta3.png" alt="Blog">
		</article>
		
		<article>
			<img src="img/blog2.png" alt="Blog">
		</article>
		
		<article>
			<img src="img/insta4.png" alt="Blog">
		</article>
	
	
	</section>
	
	
	
	
	<!-- seção do rodapé -->
	<?php require_once("rodape.php") ?>
	
	
	
	
	<!--JAVASCRIPT-->
	
	<!-- CARREGAR BIBLIOTECA-->
	<script src="js/jquery-3.4.1.min.js"></script> <!--biblioteca de efeitos-->
	
	 <script src="js/wow.min.js"></script> <!-- VAI PORCURAR O ARQUIVO--> <!--animação que usa os recursos da biblioteca-->
	<!--para o carrosel-->
	<script type="text/javascript" src="js/slick.js"></script>
	
	
	<script type="text/javascript" src="js/animacoes.js"></script>
	<!-- VAI INICIALIZAR -->
              <script> 
					

              </script>
	
	
</body> <!--fim do corpo da página -->
	
</html>




















