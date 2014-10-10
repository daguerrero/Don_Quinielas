<div class="content-panel">
  <h4><i class="fa fa-angle-right"></i>Estadisticas Generales</h4>
  <section id="unseen">
    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Conferencia</th>
                <th>Equipo</th>
                <th>G</th>
                <th>P</th>
                <th>E</th>
                <th>%</th>
                <th>PF</th>
                <th>PC</th>
                <th>Puntos Netos</th>
                <th>Local</th>
                <th>Visitante</th>
                <th>Ultimos 5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rows as $row) {
        ?>
            <tr>
                <th><?php echo $row['Conferencia']; ?></th>
                <th><?php echo $row['Equipo']; ?></th>
                <th align="center"><?php echo $row['Ganados']; ?></th>
                <th><?php echo $row['Perdidos']; ?></th>
                <th><?php echo $row['Empatados']; ?></th>
                <th><?php echo $row['Porcentaje']; ?></th>
                <th><?php echo $row['PuntosAFavor']; ?></th>
                <th><?php echo $row['PuntosEnContra']; ?></th>
                <th><?php echo $row['PuntosNetos']; ?></th>
                <th><?php echo $row['LocalGanados']; ?></th>
                <th><?php echo $row['LocalPerdidos']; ?></th>
                <th><?php echo $row['LocalEmpatados']; ?></th>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </section>
</div>