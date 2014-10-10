<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DON QUINIELAS - INICIO</title>

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
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <p>Under Construccion</p>
      </section>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
      <?php include("body/footer.php"); ?>
    </footer>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../js/sistema/jquery.js"></script>
    <script src="../js/sistema/bootstrap.min.js"></script>
    <script src="../js/sistema/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../js/sistema/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../js/sistema/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../js/sistema/jquery.scrollTo.min.js"></script>
    <script src="../js/sistema/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../js/sistema/common-scripts.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
