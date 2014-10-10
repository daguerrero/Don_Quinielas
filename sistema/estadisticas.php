<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Estadisticas</title>

    <?php include("body/css.php") ?>
    
  </head>

  <body>
    <section id="container" >
      <!-- Barra Superior -->
      <?php include("body/header.php"); ?>
      
      <!-- Sidebar -->
      <aside>
        <?php include("body/sidebar.php") ?>
      </aside>

      <!-- Main Content -->
      <form name="prueba" form action="resultados.php" method="post">
        <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i>Estadisticas</h3>
            <div class="row mt">
              <div class="col-lg-12">
                <?php include("partidos/semana6.php") ?>
              </div>
            </div>
            <input type="submit" type="button" class="btn btn-primary btn-lg btn-block">
          </section>
        </section>
      </form>

      <!-- Footer -->
      <footer class="site-footer">
        <?php include("body/footer.php"); ?>
      </footer>
    </section>

    <?php include("body/js.php") ?>

  </body>
</html>