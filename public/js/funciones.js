//seleccionar pais
var elemento = document.getElementById('sel_opciones');
if(elemento){
	document.getElementById('sel_opciones').addEventListener('click', function(Events){
		var value = document.getElementById("sel_opciones").value;
		if (value != "") { location.href = value; }
	});	
}

//buscar o realizar una consulta en la pahina de inicio
var elemento = document.getElementById('form_buscar_inicio');
if(elemento){
	document.getElementById('img_buscar').addEventListener('click', function(Events){
		var buscar_consulta = document.getElementById("buscar").value;
		if(buscar_consulta == ""){
			alert('Debe escribir palabra clave a buscar'+buscar_consulta);
			//document.form_buscar_inicio.buscar_muro.focus();
			return 0;
		}else{
			document.form_buscar_inicio.submit(); 
		}
	});	
}