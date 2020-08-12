const btnToggle = document.querySelector('.toggle-btn');

function cambiarClase (valor) {

	if (valor.classList.contains('on')) {
		valor.classList.remove('on');
		valor.classList.add('off');
	}else{
		valor.classList.remove('off');
		valor.classList.add('on');
	}
};

btnToggle.addEventListener('click', function() {

	document.getElementById('menu').classList.toggle('active');

	var contenido=document.getElementById('Conten');
	var cabecera= document.querySelector('.cabecera');

	cambiarClase(cabecera);
	cambiarClase(contenido);
		
});
