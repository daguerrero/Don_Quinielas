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
        <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i>Estadisticas</h3>
            <div class="row mt">
              <div class="col-lg-12">

                <?php include("estadisticas/estadisticas.php") ?>
                
              </div>
            </div>
          </section>
        </section>

      <!-- Footer -->
      <footer class="site-footer">
        <?php include("body/footer.php"); ?>
      </footer>
    </section>

    <!-- Javascripts -->
    <?php include("body/js.php") ?>

    <!-- Pruebas -->
    <script src="estadisticas/js/dataTables.bootstrap.js"></script>
    <script src="estadisticas/js/jquery-1.11.1.min.js"></script>
    <script src="estadisticas/js/jquery.dataTables.min.js"></script>
    <script src="estadisticas/js/prueba.js"></script>

  </body>
</html>