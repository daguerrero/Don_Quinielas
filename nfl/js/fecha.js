function ObtenerFecha(){
	ahora = new Date() 
	dia = ahora.getDate() 
	mes = document.write(ahora.getMonth() + 1)
	anio = ahora.getFullYear()

	document.getElementById('fecha').innerHTML=dia;
}