//JavaScript Documentos



//animações WOW
new WOW().init();


// BANER 
$('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
	dots: true,
  autoplaySpeed: 2000,

});


// MENU

document.querySelector(".abrirMenu").onclick = function() {  //dentro do documento .abrirMenu coloquei um evento onclick, toda vez que clicar nele vai abrir uma fução
	//console.log("Teste do Botão Menu"); //ao clicar vai chamar essa mensagem no console
	document.documentElement.classList.add ("menuAtivo");/*no documento(document) eu vou adicionar um elemento(documentElement) que é uma classe(classList) e eu vou adicionar a classe menuAtivo*/
	
}

document.querySelector(".fecharMenu").onclick = function () {
	document.documentElement.classList.remove ("menuAtivo"); /*estou removendo a classe manuAtivo ao clicar em fecharMenu*/
	
}


// TOPO FIXO 
/*var top = 250; /*variaável top com valor inteiro 250*/
/* let é uma variavel tipo escopo( so vai ser criada se for usada), ela so vai criar se vc tiver usando*/
/* const é uma variavel que a informação não muda, é fixo*/

window.onscroll = function() {
	var top = window.pageYOffset || document.documentElement.scrollTop; 
	console.log(top);/*a variável top esta recebendo o valor da posição da pagina no eixo Y ou da posição do elemento acroolTop*/
	
	if (top > 500){
		console.log("Menu Fixo em 500");	
		document.getElementById("topo-fixo").classList.add("menu-fixo"); /*quando for maior que 500 vou pegar o meu ID topo-fixo e adicionar a classe menu-fixo ao codigo que fixa o topo-fixo no top da tela*/
	}
	else {
		console.log("Menu abaixo de 500");
		document.getElementById("topo-fixo").classList.remove("menu-fixo");

	}

} 

