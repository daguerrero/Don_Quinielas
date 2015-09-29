var app = angular.module("app", [])

var Participantes = function($scope){
	$scope.participantes = [
		{nombre:"Saúl", apodo:"peditos", pago:"NO"},
		{nombre:"Anakin", apodo:"culito", pago:"NO"},
		{nombre:"Bambi", apodo:"tamaro", pago:"NO"},
		{nombre:"Byron", apodo:"marrufito", pago:"NO"},
		{nombre:"Ñongas", apodo:"antimojo", pago:"NO"}
	 	];
};

var Post = function($scope){
 	$scope.articulos=[
 	{semana:"1", link:"semana1.html"},
 	{semana:"2", link:"semana2.html"},
 	{semana:"3", link:"http://donquinielas.azurewebsites.net/nfl/index.html/review/semana3review.html"}
 	];
};

var Semanas = function($scope){
	$scope.semanas=[
		{jornada:"1", link:"link.html"},
		{jornada:"2", link:"link.html"}
	];
};

var Notificacion = function($scope){
	$scope.notificaciones=[
		{tiempo:"Y minutes ago", link:"semana1", semana:"1", mensaje:"agregada"},
		{tiempo:"X minutes ago", link:"semana2", semana:"2", mensaje:"ponte a apostar perra"},
		{tiempo:"X minutes ago", link:"semana3", semana:"3", mensaje:"ponte a apostar perra"},
	];
};

var BarraLateral = function($scope){
	$scope.barra=[
		{titulo:"Inicio", icono:"fa fa-dashboard", link:"inicio.html"},
		{titulo:"Partidos de la semana", icono:"fa fa-dashboard", link:"partidos.html"},
		{titulo:"Resultados", icono:"fa fa-dashboard", link:"resultados.html"},
		{titulo:"Elegidos", icono:"", link:"elegidos.html"},
		{titulo:"Reviews", icono:"", link:"reviews.html"},
		{titulo:"Stats", icono:"", link:""}
	];
}