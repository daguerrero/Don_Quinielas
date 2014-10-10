<?php
    ///Pedimos el archivo que se conecte a la base de datos
    require_once 'db.php';
    $result;
 
    $conn = dbConnect();
    // Creamos la consulta (no se como se llame la tabla que contendra estos valores, pero este es un ejemplo)
    $sql = 'SELECT * FROM estadisticas';
    // Create the query and asign the result to a variable call $result
    $result = $conn->query($sql);
    // Extract the values from $result
    $rows = $result->fetchAll();
    // Since the values are an associative array we use foreach to extract the values from $rows
 ?>
 <!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8" />
        <title>Query data sending an ID</title>
        <meta http-equiv="X-UA-Compatible" content="IE=9,crome" />
        <meta name="copyright" content="Datasoft Engineering 2013"/>
        <meta name="author" content="Reedyseth"/>
        <meta name="email" content="ibarragan@behstant.com"/>
        <meta name="description" content="Query data sending an ID" />
        <link rel=stylesheet href="../css/style01.css">
    </head>
    <body>
        <table border="1">
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
                <th><?php echo $row['Ganados']; ?></th>
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
</html>