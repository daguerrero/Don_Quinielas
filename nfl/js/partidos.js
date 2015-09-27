//Semana 1 - Temporada 2015

var BUF = "Buffalo Bills"; 				var IMG_BUF="img/logos/Bills.png"
var MIA = "Miami Dolphins"; 			var IMG_MIA="img/logos/Miami.png";
var NE = "New England Patriots"; 		var IMG_NE="img/logos/NewEngland.png";
var NYJ = "New York Jets"; 				var IMG_NYJ="img/logos/Jets.png";
var BAL = "Baltimore Ravens"; 			var IMG_BAL="img/logos/Baltimore.png";
var CIN = "Cincinnati Bengals"; 		var IMG_CIN="img/logos/Cincinnati.png";
var CLE = "Cleveland Browns"; 			var IMG_CLE="img/logos/Cleveland.png";
var PIT = "Pittsburgh Steelers"; 		var IMG_PIT="img/logos/Pittsburgh.png";
var HOU = "Houston Texans"; 			var IMG_HOU="img/logos/Texans.png";
var IND = "Indianapolis Colts"; 		var IMG_IND="img/logos/Colts.png";
var JAC = "Jacksonville Jaguars"; 		var IMG_JAC="img/logos/Jaguars.png";
var TEN = "Tennessee Titans"; 			var IMG_TEN="img/logos/Tennesse.png";
var DEN = "Denver Broncos"; 			var IMG_DEN="img/logos/Denver.png";
var KC = "Kansas City Chiefs"; 			var IMG_KC="img/logos/KansasCity.png";
var OAK = "Oakland Raiders"; 			var IMG_OAK="img/logos/Raiders.png";
var SD = "San Diego Chargers"; 			var IMG_SD="img/logos/SanDiego.png";
var DAL = "Dallas Cowboys"; 			var IMG_DAL="img/logos/Dallas.png";
var NYG = "New York Giants"; 			var IMG_NYG="img/logos/Giants.png";
var PHI = "Philadelphia Eagles"; 		var IMG_PHI="img/logos/Philadelphia.png";
var WAS = "Washington Redskins"; 		var IMG_WAS="img/logos/Washington.png";
var CHI = "Chicago Bears"; 				var IMG_CHI="img/logos/Chicago.png";
var DET = "Detroit Lions"; 				var IMG_DET="img/logos/Detroit.png";
var GB = "Green Bay Packers"; 			var IMG_GB="img/logos/GreenBay.png";
var MIN = "Minnesota Vikings"; 			var IMG_MIN="img/logos/Minnesota.png";
var ATL = "Atlanta Falcons"; 			var IMG_ATL="img/logos/Atlanta.png";
var CAR = "Carolina Panthers"; 			var IMG_CAR="img/logos/Carolina.png";
var NO = "New Orleans Saints"; 			var IMG_NO="img/logos/NewOrleans.png";
var TB = "Tampa Bay Buccaneers"; 		var IMG_TB="img/logos/TampaBay.png";
var ARI = "Arizona Cardinals"; 			var IMG_ARI="img/logos/Arizona.png";
var STL = "St. Louis Rams"; 			var IMG_STL="img/logos/Rams.png";
var SF = "San Francisco 49ers"; 		var IMG_SF="img/logos/SanFrancisco.png";
var SEA = "Seattle Seahawks"; 			var IMG_SEA="img/logos/Seahawks.png";

function PartidosSemana3($scope){
	$scope.partidos=[
		{
			semana:"3",
			nombredia:"Jueves",
			numerodia:"24",
			mes:"Septiembre",
			anio:"2015",
			hora:"19:25",
			equipolocal:NYG,
			imagenlocal:IMG_NYG,
			equipovisitante:WAS,
			imagenvisitante: IMG_WAS
		},
			{nombre:"Anakin", apodo:"culito", pago:"NO"},
			{nombre:"Bambi", apodo:"tamaro", pago:"NO"},
			{nombre:"Byron", apodo:"marrufito", pago:"NO"},
			{nombre:"Ñongas", apodo:"antimojo", pago:"NO"}
	];
}

// semana:="1",
// nombredia="Jueves",
// mumerodia="24",
// mes="Septiembre",
// anio="2015",
// hora="19:25"
// imagenlocal="../img/logos/Washington.gif"
// equipolocal="New York Giants"
// imagenvisitante="../img/logos/"

// <select class="form-control" name="partido1" onchange="getval(this);">
//                                             <option>Local</option>
//                                             <option>Visitante</option>
//                                             <option>Empate</option>
//                                           </select>