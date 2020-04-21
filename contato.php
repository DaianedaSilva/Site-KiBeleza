<?php

	require_once ("vendor/PHPMailerAutoload.php");
 /*autoLoad automaticamente carrega so oq precisa */

	
try{
	/*tente fazer algo se não der erro faça:*/
	
    if(isset($_POST["email"])){ /*verificar se a variável foi inicializada ou não, ou seja se foi digitado alguma coisa no input com nome email */
		
		$ok = 0; //iniciado a variável ok com valor 0
		
		
        $assunto 	= "Form do Site Kibeleza";  /* criamos uma variável Assunto, $ é usado p/ criar variável, dentro dela colocamos para que ela é usada*/
        $nome 		= $_POST["nome"]; /* variável que pega arquivo que esta sendo passado via POST, no caso é oq está com no fomr com o input com name = nome*/
        $email 		= $_POST["email"];
        $fone 		= $_POST["fone"];
        $mens	 	= $_POST["mensagem"];
		
		/*se existir mais campos que esses deve criar novas variáveis */
		        
                   
     
        $phpmail = new PHPMailer(); // Instânciamos a classe PHPmailer para poder utiliza-la 
		/*variável phpmail que está atribuida um metodo vindo do arquivo vendor, new transforma o phpmail em um objeto do tipo PHPMailer, todos os recursos do PHPMalier serão passadas para o phpmail
		transformando nossa variável (phpmail)em um objeto daquela classe (PHPMailer)*/
		
        $phpmail->isSMTP(); // envia por protocolo SMTP
        
        $phpmail->SMTPDebug = 0; /* PARA ERROS 0 -  n traz informação , 1-traz informação resumida, 2- traz informação completa*/
        $phpmail->Debugoutput = 'html';
        
        $phpmail->Host = "smtp.gmail.com"; // SMTP servers    /* USAMOS O RECURSO DO GMAIL PARA DESPARAR EMAIL, se tiver ja servido deve colocar o SMTP do seu servidor      
        $phpmail->Port = 587; // Porta de saida SMTP do GMAIL
        
        $phpmail->SMTPSecure = 'tls'; // protocolo de segurança de autentificação Autenticação SMTP
        $phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação   
        
        $phpmail->Username = "daianedasilva044@gmail.com"; // SMTP EMAIL , email que será usado para enviar os emails 
        $phpmail->Password = "12040456dD120"; // SMTP password COLOQUE A SENHA DO SEU EMAIL
		
        $phpmail->IsHTML(true);         
        
        $phpmail->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  , pra quem vai ser enviado o email 
                 
        $phpmail->addAddress("daianedasilva044@gmail.com", $assunto);// E-mail do destinatario, quem vai mandar 
        
        $phpmail->Subject = $assunto; // Assunto do remetende enviado pelo method post
            
		
		//servidor windowns, entende quebra de linha como o <br>
        $phpmail->msgHTML(" Nome: $nome <br>
                            E-mail: $email <br>
                            Telefone: $fone <br>
                            Mensagem: $mens ");
		
		
		//servidor linux, entende quebra de linha como o \n
        $phpmail->AlrBody = "Nome: $nome \n
                            E-mail: $email \n
                            Telefone: $fone \n
                            Mensagem: $mens";
            
		//tenta enviar o e-amil
        if($phpmail->send()){ 
			
			$ok = 1;//se foi enviado a mensagem a variável ok velerá 1
			
           
        }else{
			
			$ok = 2;//se não foi enviado a mensagem a variável ok velerá 1
			
        }
		         
	// ############## RESPOSTA AUTOMATICo para o usupário
        $phpmailResposta = new PHPMailer();        
        $phpmailResposta->isSMTP();
        
        $phpmailResposta->SMTPDebug = 0;
        $phpmailResposta->Debugoutput = 'html';
        
        $phpmailResposta->Host = "smtp.gmail.com";         
        $phpmailResposta->Port = 587;
        
        $phpmailResposta->SMTPSecure = 'tls';
        $phpmailResposta->SMTPAuth = true;   
        
        $phpmailResposta->Username = "daianedasilva044@gmail.com";         
        $phpmailResposta->Password = "12040456dD120";          
        $phpmailResposta->IsHTML(true);         
        
        $phpmailResposta->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                 
        $phpmailResposta->addAddress($email, $assunto);// E-mail do destinatario, pra quem esta enviando a resposta/*  
        
        $phpmailResposta->Subject = "Resposta - " .$assunto; // Assunto do remetende enviado pelo method post
                
        $phpmailResposta->msgHTML(" Nome: $nome <br>
                            Em breve daremos o retorno"); //texto que será enviado
        
        $phpmailResposta->AlrBody = "Nome: $nome \n
                            Em breve daremos o retorno";
            
        $phpmailResposta->send();
        
    }
    
}catch(Exception $e){ /* se deu errado o load */
     Erro::tratarErro($e); 
}
    
?>




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
	
	<section>
		<!--GOOGLE MAPS-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.019728332695!2d-46.43555282147737!3d-23.495798890532935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1581445873970!5m2!1spt-BR!2sbr" 
				width="100%"
				height="600"
				frameborder="0" 
				style="border:0;" 
				allowfullscreen="">
		</iframe>
	
	</section>
	
	<section class="site form">
		
		<article>
			<h2> Fórmulario de contato</h2>
			
			<form method="post" action="#">
				
				<div>
					<input name="nome" type="text" placeholder="Digite seu Nome"> 
				</div>
				
				<div>
					<input name="email" type="email" placeholder="E-mail" required>
				</div>
				
				<div>
					<input name="fone" type="tel" placeholder="Telefone">
				</div>
				
				<div>
					<textarea name="mensagem" cols="10" rows="20" placeholder="Digite sua mensagem"></textarea>
				</div>
				
				<div> 
					
					<span class="span">
						<?php							
								if (@$ok == 1){
									echo $nome.", a Mensagem foi enviada com sucesso.";
									//echo é para mostrar na tela
									
								}else if (@$ok ==2){
									echo $nome.", não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
								}        
						?>
					</span>
					<input type="submit" value="ENVIAR">
						   
				</div>
				
			</form>
			
		</article>
	
		<article>
			<img src="img/insta4.png" alt="pagina formulario">
			
		
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




















