var cont_menu=2;
var	cont_carrinho=2;
var cont_submenu=2;
var	cont_search=2;

function aumentar(){
	document.getElementById('produto').style="transform: scale(1.1);";
}

function abrir_menu(){
	cont_menu++;
	div=cont_menu%2;
	if (div==1) {
		document.getElementById('hmb_aberto').style="animation: menu_abrir 0.5s;";
	}
	else{
		document.getElementById('hmb_aberto').style="animation: menu_fechar 0.5s;";
		setTimeout(
 			function() 
  				{
       				document.getElementById('hmb_aberto').style="display: none;";
  				}, 500);

	}
}

function abrir_carrinho(){
	cont_carrinho++;
	div_carr=cont_carrinho%2;
	if (div_carr==1) {
		document.getElementById('carrinho').style="animation: carrinho_abrir 0.5s;";
		document.getElementById('carrinho_fundo').style="animation: carrinho_abrir2 1s;";
	}
	else{
			document.getElementById('carrinho').style="animation: carrinho_fechar 0.5s;";
			document.getElementById('carrinho_fundo').style="opacity: 0;";

		setTimeout(
 			function() 
  				{
       				document.getElementById('carrinho').style="display: none;";
  				}, 500);

	}
}

function pedidos(){
	document.getElementById('conta_principal').style="display: none;";
	document.getElementById('conta_alterar').style="display: none;";
	document.getElementById('conta_endereco').style="display: none;";
	document.getElementById('conta_pedidos').style="display: block;";
}

function verdados(){
	document.getElementById('conta_pedidos').style="display: none;";
	document.getElementById('conta_alterar').style="display: none;";
	document.getElementById('conta_endereco').style="display: none;";
	document.getElementById('conta_principal').style="display: block;";
}

function endereco(){
	document.getElementById('conta_principal').style="display: none;";
	document.getElementById('conta_alterar').style="display: none;";
	document.getElementById('conta_pedidos').style="display: none;";
	document.getElementById('conta_endereco').style="display: block;";
}

function alterar(){
	document.getElementById('conta_principal').style="display: none;";
	document.getElementById('conta_pedidos').style="display: none;";
	document.getElementById('conta_endereco').style="display: none;";
	document.getElementById('conta_alterar').style="display: block;";
}

function favoritos(){
	window.location.href="favoritos.php";
}

function abrir_submenu(){
	cont_submenu++;
	divsub=cont_submenu%2;
	if (divsub==1) {
		document.getElementById('submenu_over').style="animation: submenu_abrir 0.5s;";
	}
	else{
		document.getElementById('submenu_over').style="animation: submenu_fechar 0.5s;";
		setTimeout(
 			function() 
  				{
       				document.getElementById('submenu_over').style="display: none;";
  				}, 500);

	}
}

function abrir_search(){
	cont_search++;
	div_search=cont_search%2;
	if (div_search==1) {
		document.getElementById('search-bar').style="display: block;";
		document.getElementById('search_opener').style="display: none;";
		document.getElementById('search_X').style="display: block;";
		document.getElementById('search-bar').style="animation: search_abrir 1s;";
	}
	else{
		document.getElementById('search-bar').style="animation: search_fechar 1s;";
		document.getElementById('search_opener').style="display: block;";
		document.getElementById('search_X').style="display: none;";
		setTimeout(
 			function() 
  				{
       				document.getElementById('search-bar').style="display: none;";
  				}, 1000);

	}
}