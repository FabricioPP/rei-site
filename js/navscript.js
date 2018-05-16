var home = document.getElementById("linkHome");
var sobre = document.getElementById("linkSobre");
var produtos = document.getElementById("linkProdutos");
var contatos = document.getElementById("linkContato");

function myFunction() {
	var x = document.getElementById("myNavbar");
	var icon = document.getElementById("icone");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
};

function openNav() {
	document.getElementById("myNav").classList.toggle("open");
	document.getElementById("icone").classList.toggle("change");
};

function closeNav() {
	document.getElementById("myNav").classList.toggle("open");
	document.getElementById("icone").classList.toggle("change");
};