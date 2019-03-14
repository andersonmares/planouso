/*
Código Javascript
Como Fazer uma Imagem de Fundo Preencher a Tela Inteira
Autor: Guilherme Simi Müller
http://guilhermemuller.com.br

Este documento está licenciado sob:
http://creativecommons.org/licenses/by/3.0/deed.pt_BR
*/

// Função adaptaImagem()
// Parâmetros:
// imagem (objeto jquery com as imagens selecionadas)
// container (opcional, objeto jquery com o container selecionado)
function adaptaImagem(imagem, container) {
	var largurafinal; //largura final
	var alturafinal; //altura final
	
	//se nenhum container foi definido, usamos o objeto window
	if(container == undefined) {
		container = $(window);
	}

	var larguracontainer = container.width();
	var alturacontainer = container.height();
	 
	// removemos os atributos de largura e altura da imagem, para não atrapalhar no redimensionamento
	imagem.removeAttr("width").removeAttr("height").css({ width: "", height: "" });
	 
	var larguraimagem = imagem.width(); // largura da imagem
	var alturaimagem = imagem.height(); // altura da imagem
	
	// aqui vamos determinar o tamanho final da imagem
	if(larguraimagem > alturaimagem) {
		//imagem tipo paisagem
		//se a imagem é tipo paisagem e queremos que ela ocupe a tela inteira,
		//temos que redimensioná-la pela dimensão menor, ou seja, pela altura
		alturafinal = alturacontainer;
		largurafinal = (larguraimagem * alturacontainer)/alturaimagem;

		//se a largura redimensionada ficar menor que a da tela, fazemos o redimensionamento pela largura mesmo
		if(largurafinal < larguracontainer) {
			largurafinal = larguracontainer;
			alturafinal = (alturaimagem * largurafinal)/larguraimagem;
		}
	} else {
		//imagem tipo retrato
		//se a imagem é tipo retrato e queremos que ela ocupe a tela inteira,
		//temos que redimensioná-la pela dimensão menor, ou seja, pela largura
		largurafinal = larguracontainer;
		alturafinal = (alturaimagem * largurafinal)/larguraimagem;

		//se a altura redimensionada ficar menor que a da tela, fazemos o redimensionamento pela altura mesmo
		if(alturafinal < alturacontainer) {
			alturafinal = alturacontainer;
			largurafinal = (larguraimagem * alturafinal)/alturaimagem;
		}
	}
	imagem.height(alturafinal);
	imagem.width(largurafinal);
	 
	// aqui utilizamos um cálculo simples para determinar o posicionamento da imagem
	// para que a mesma fique no meio da tela
	// posição = dimensão da imagem/2 - dimensão do container/2
	alturafinal = imagem.height();
	var posy = (alturafinal/2 - alturacontainer/2);
	var posx = (largurafinal/2 - larguracontainer/2);
	 
	//se o cálculo das posições der resultado positivo, trocamos para negativo
	//isso é feito para que a centralização da imagem dê certo
	if(posy > 0) {
		posy *= -1;
	}
	if(posx > 0) {
		posx *= -1;
	}
	 
	//colocamos através da função css() do jquery o posicionamento da imagem
	imagem.css({'top': posy + 'px', 'left': posx + 'px'});
}

//quando a página carregar ou quando a janela for redimensionada, adaptamos a imagem
$(window).bind('resize load', function() {
	adaptaImagem($('#fundo img'));
});