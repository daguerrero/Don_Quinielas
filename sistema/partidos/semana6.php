<?php 
$BUF = '<img src="img/logos/Bills.png"><p>Buffalos Bills</p>';
$MIA = '<img src="img/logos/Miami.png"><p>Miami Dolphins</p>';
$NEW = '<img src="img/logos/NewEngland.png"><p>New England Patriots</p>';
$NYJ = '<img src="img/logos/Jets.png"><p>New York Jets</p>';
$BAL = '<img src="img/logos/Baltimore.png"><p>Baltimore Ravens</p>';
$CIN = '<img src="img/logos/Cincinnati.png"><p>Cincinnati Bengals</p>';
$CLE = '<img src="img/logos/Cleveland.png"><p>Cleveland Browns</p>';
$PIT = '<img src="img/logos/Pittsburgh.png"><p>Pittsburgh Steleers</p>';
$HOU = '<img src="img/logos/Texans.png"><p>Houston Texans</p>';
$IND = '<img src="img/logos/Colts.png"><p>Indianapolis Colts</p>';
$JAX = '<img src="img/logos/Jaguars.png"><p>Jaxsonville Jaguars</p>';
$TEN = '<img src="img/logos/Tennesse.png"><p>Tennesse Titans</p>';
$DEN = '<img src="img/logos/Denver.png"><p>Denver Broncos</p>';
$KC = '<img src="img/logos/KansasCity.png"><p>Kansas City Chiefs</p>';
$OAK = '<img src="img/logos/Raiders.png"><p>Oakland Raiders</p>';
$SD = '<img src="img/logos/SanDiego.png"><p>San Diego Chargers</p>';
$DAL = '<img src="img/logos/Dallas.png"><p>Dallas Cowboys</p>';
$NYG = '<img src="img/logos/Giants.png"><p>New York Giants</p>';
$PHI = '<img src="img/logos/Philadelphia.png"><p>Philadelphia Eagles</p>';
$WAS = '<img src="img/logos/Washington.png"><p>Washington Redskins</p>';
$CHI = '<img src="img/logos/Chicago.png"><p>Chicago Bears</p>';
$DET = '<img src="img/logos/Detroit.png"><p>Detroit Lions</p>';
$GB = '<img src="img/logos/GreenBay.png"><p>GreenBay Packers</p>';
$MIN = '<img src="img/logos/Minnesota.png"><p>Minnesota Vikings</p>';
$ATL = '<img src="img/logos/Atlanta.png"><p>Atlanta Falcons</p>';
$CAR = '<img src="img/logos/Carolina.png"><p>Carolina Panthers</p>';
$NO = '<img src="img/logos/NewOrleans.png"><p>New Orleans Saints</p>';
$TBB = '<img src="img/logos/TampaBay.png"><p>Tampa Bay Buccaneers</p>';
$ARI = '<img src="img/logos/Arizona.png"><p>Arizona Cardinals</p>';
$RAM = '<img src="img/logos/Rams.png"><p>Sant Louis Rams</p>';
$SF = '<img src="img/logos/SanFrancisco.png"><p>San Francisco 49ers</p>';
$SEA = '<img src="img/logos/Seahawks.png"><p>Seattle Seahawks</p>';
?>

<div class="panel panel-primary">
  <div class="panel-heading">Partidos de la semana 6</div>
    <div class="panel-body">
      <div class="table-responsive">
        <!-- Tipo de tabla -->
        <table class="table table-bordered table-striped table-condensed">
          <thead>
            <tr>
              <th>Fecha/Hora</th>
              <th>Local</th>
              <th>Visitante</th>
              <th>Pickups</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">
              <p>Jueves/9/Octubre/2014</p>
              <p>7:25 PM</p>
              <p><strong>Partido 1</strong></p>
              </td>
              <td align="center"><?php print("$IND") ?></td>
              <td align="center"><?php print("$HOU") ?></td>
              <td align="center">
              <select class="form-control" name="partido1">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 2</strong></p>
              </td>
              <td align="center"><?php print("$JAX") ?></td>
              <td align="center"><?php print("$TEN") ?></td>
              <td align="center">
              <select class="form-control" name="partido2">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 3</strong></p>
              </td>
              <td align="center"><?php print("$DET") ?></td>
              <td align="center"><?php print("$MIN") ?></td>
              <td align="center">
              <select class="form-control" name="partido3">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 4</strong></p>
              </td>
              <td align="center"><?php print("$GB") ?></td>
              <td align="center"><?php print("$MIA") ?></td>
              <td align="center">
              <select class="form-control" name="partido4">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 5</strong></p>
              </td>
              <td align="center"><?php print("$BAL") ?></td>
              <td align="center"><?php print("$TBB") ?></td>
              <td align="center">
              <select class="form-control" name="partido5">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 6</strong></p>
              </td>
              <td align="center"><?php print("$PIT") ?></td>
              <td align="center"><?php print("$CLE") ?></td>
              <td align="center">
              <select class="form-control" name="partido6">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 7</strong></p>
              </td>
              <td align="center"><?php print("$NEW") ?></td>
              <td align="center"><?php print("$BUF") ?></td>
              <td align="center">
              <select class="form-control" name="partido7">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 8</strong></p>
              </td>
              <td align="center"><?php print("$CAR") ?></td>
              <td align="center"><?php print("$CIN") ?></td>
              <td align="center">
              <select class="form-control" name="partido8">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>12:00 PM</p>
              <p><strong>Partido 9</strong></p>
              </td>
              <td align="center"><?php print("$DEN") ?></td>
              <td align="center"><?php print("$NYJ") ?></td>
              <td align="center">
              <select class="form-control" name="partido9">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>3:05 PM</p>
              <p><strong>Partido 10</strong></p>
              </td>
              <td align="center"><?php print("$SD") ?></td>
              <td align="center"><?php print("$OAK") ?></td>
              <td align="center">
              <select class="form-control" name="partido10">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>3:25 PM</p>
              <p><strong>Partido 11</strong></p>
              </td>
              <td align="center"><?php print("$DAL") ?></td>
              <td align="center"><?php print("$SEA") ?></td>
              <td align="center">
              <select class="form-control" name="partido11">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>3:25 PM</p>
              <p><strong>Partido 12</strong></p>
              </td>
              <td align="center"><?php print("$WAS") ?></td>
              <td align="center"><?php print("$ARI") ?></td>
              <td align="center">
              <select class="form-control" name="partido12">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>3:25 PM</p>
              <p><strong>Partido 13</strong></p>
              </td>
              <td align="center"><?php print("$CHI") ?></td>
              <td align="center"><?php print("$ATL") ?></td>
              <td align="center">
              <select class="form-control" name="partido13">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Domingo/12/Octubre/2014</p>
              <p>7:30 PM</p>
              <p><strong>Partido 14</strong></p>
              </td>
              <td align="center"><?php print("$NYG") ?></td>
              <td align="center"><?php print("$PHI") ?></td>
              <td align="center">
              <select class="form-control" name="partido14">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            <tr>
              <td align="center">
              <p>Lunes/13/Octubre/2014</p>
              <p>7:30 PM</p>
              <p><strong>Partido 15</strong></p>
              </td>
              <td align="center"><?php print("$SF") ?></td>
              <td align="center"><?php print("$RAM") ?></td>
              <td align="center">
              <select class="form-control" name="partido15">
                <option>Local</option>
                <option>Visitante</option>
                <option>Empate</option>
              </select>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>