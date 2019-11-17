<?php
//@session_start();
 ?>
 <!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Sistema | Adminpro</title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- favicon
 		============================================ -->
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
     <!-- Google Fonts
 		============================================ -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
     <!-- Bootstrap CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
     <!-- Bootstrap CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/font-awesome.min.css">
     <!-- adminpro icon CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/adminpro-custon-icon.css">
     <!-- meanmenu icon CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/meanmenu.min.css">
     <!-- mCustomScrollbar CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/jquery.mCustomScrollbar.min.css">
     <!-- animate CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/animate.css">
     <!-- data-table CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/data-table/bootstrap-table.css">
     <link rel="stylesheet" href="views/assets/css/data-table/bootstrap-editable.css">
     <!-- normalize CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/normalize.css">
     <!-- charts C3 CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/c3.min.css">
     <!-- forms CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/form/all-type-forms.css">
     <!-- style CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/style.css">
     <!-- responsive CSS
 		============================================ -->
     <link rel="stylesheet" href="views/assets/css/responsive.css">
    <!--
      ================================================================
                      LOGIN
      ================================================================

    -->

    <link rel="stylesheet" href="views/assets/css/iconfonts/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="views/assets/css/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="views/assets/css/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="views/assets/css/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="views/assets/css/login/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="views/assets/css/login/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="views/assets/css/login/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="views/img/login/favicon.png" />
    <!--
      ================================================================
                      LOGIN
      ================================================================

    -->
     <!-- modernizr JS
 		============================================ -->
     <script src="views/assets/js/vendor/modernizr-2.8.3.min.js"></script>    
 </head>
 <body class="materialdesign">
    <?php 
      if (isset($_SESSION["miSesion"]) && $_SESSION["miSesion"] == "ok") {
        echo "<div class='wrapper-pro'>";        
          /*=========================
          MENU
          =========================*/
          include "modules/menu.php";
          echo "<div class='content-inner-all'>";  
          /*=========================
          ENCABEZADO
          =========================*/
          include "modules/header.php";         
          /*=========================
          CONTENIDO
          =========================*/
          if (isset($_GET["ruta"])) {
            if ($_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "usuarios" ||              
                $_GET["ruta"] == "salir"){
                include "modules/".$_GET["ruta"].".php";
                
            }else{
              include "modules/404.php";      
            }
            /*=========================
            FOOTER
            =========================*/
            include "modules/footer.php";     
          }
          else{
            include "modules/404.php";
          }
          echo "</div>";  
        echo "</div>";
     }else{
        include "modules/login.php"; 
     }
    ?>
 <!-- SCRIPT JS
 		============================================ -->
    <!-- jquery
    ============================================ -->
    <script src="views/assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="views/assets/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="views/assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="views/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="views/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="views/assets/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="views/assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="views/assets/js/counterup/waypoints.min.js"></script>
    <script src="views/assets/js/counterup/counterup-active.js"></script>
    <!-- peity JS
    ============================================ -->
    <script src="views/assets/js/peity/jquery.peity.min.js"></script>
    <script src="views/assets/js/peity/peity-active.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="views/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="views/assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
    ============================================ -->
    <script src="views/assets/js/flot/jquery.flot.js"></script>
    <script src="views/assets/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="views/assets/js/flot/jquery.flot.spline.js"></script>
    <script src="views/assets/js/flot/jquery.flot.resize.js"></script>
    <script src="views/assets/js/flot/jquery.flot.pie.js"></script>
    <script src="views/assets/js/flot/Chart.min.js"></script>
    <script src="views/assets/js/flot/flot-active.js"></script>
    <!-- map JS
    ============================================ -->
    <script src="views/assets/js/map/raphael.min.js"></script>
    <script src="views/assets/js/map/jquery.mapael.js"></script>
    <script src="views/assets/js/map/france_departments.js"></script>
    <script src="views/assets/js/map/world_countries.js"></script>
    <script src="views/assets/js/map/usa_states.js"></script>
    <script src="views/assets/js/map/map-active.js"></script>
    <!-- data table JS
    ============================================ -->
    <script src="views/assets/js/data-table/bootstrap-table.js"></script>
    <script src="views/assets/js/data-table/tableExport.js"></script>
    <script src="views/assets/js/data-table/data-table-active.js"></script>
    <script src="views/assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="views/assets/js/data-table/bootstrap-editable.js"></script>
    <script src="views/assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="views/assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="views/assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="views/assets/js/main.js"></script>
    <!--END SCRIPT JS
   ============================================ -->  
       <!--
      ================================================================
                      LOGIN
      ================================================================
    -->
  <!-- plugins:js -->
      <script src="views/assets/js/login/vendor.bundle.base.js"></script>
      <script src="views/assets/js/login/vendor.bundle.addons.js"></script>
      <!-- endinject -->
      <!-- inject:js -->
      <script src="views/assets/js/login/off-canvas.js"></script>
      <script src="views/assets/js/login/misc.js"></script>
      <!-- endinject -->
        <!--
      ================================================================
                      LOGIN
      ================================================================
    -->
 </body>
</html>  