<?php

include('session.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Covid Analysis</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Covid <span class="lite">Analysis</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
         
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
         
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            <span class="username"><?php echo $login_session; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="profile.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Tested+</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_validation.php">Form Validation</a></li>
            </ul>
          </li>
        
        
          <li>
            <a class="" href="chart.php">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.php">Basic Table</a></li>
            </ul>
          </li>

         

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3><i class="fa fa-laptop"></i>Overall Analysis</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="profile.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-database"></i>
              <div class="count">63.2M</div>
              <div class="title">Total World Wide Cases</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-database"></i>
              <div class="count">9.43M</div>
              <div class="title">Total Cases In India</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-database"></i>
              <div class="count">1.82M</div>
              <div class="title">Total Cases In Your State</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-database"></i>
              <div class="count">3.1L</div>
              <div class="title">Total Cases In Your City</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        <div class="row">
          <div class="col-lg-12 col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body-map">
                <div id="map" style="height:380px;"></div>
              </div>

            </div>
          </div>
        


        </div>


        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Cases</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Country</th>
                      <th>Total Cases</th>
                      <th>Recoverd Cases</th>
                      <th>Recovered/Death Ratio</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>USA</td>
                      <td>2563</td>
                      <td>1025</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          </div>
                        </div>
                        <span class="sr-only">73%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                      <td>India</td>
                      <td>3652</td>
                      <td>2563</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 89%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 11%">
                          </div>
                        </div>
                        <span class="sr-only">57%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Brazil</td>
                      <td>562</td>
                      <td>452</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 82%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                          </div>
                        </div>
                        <span class="sr-only">93%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Russia</td>
                      <td>1258</td>
                      <td>958</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                      <td>France</td>
                      <td>4856</td>
                      <td>3621</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 16%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Spain</td>
                      <td>265</td>
                      <td>102</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 3%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>UK</td>
                      <td>265</td>
                      <td>102</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 9%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                      <td>Italy</td>
                      <td>265</td>
                      <td>102</td>
                      <td>
                        <div class="progress thin">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                          </div>
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                          </div>
                        </div>
                        <span class="sr-only">20%</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
          <!--/col-->
         

        </div>


          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      
    </section>
    <!--main content end-->
        <div class="container">
        <h2><b>Select Area From The City</b></h2>
        <form action="basic_table.php" method="post">
          <div class="form-group">
            <label for="sel1">Select Area (select one):</label>
            <select class="form-control" name="area">
              <option value="serene_meadows">Serene Meadows</option>
              <option value="college_road">College Road</option>
              <option value="mahatma_nagar">Mahatma Nagar</option>
              <option value="indira_nagar">Indira Nagar</option>
              <option value="panchavati">Panchavati</option>
            </select>
            <input type="submit" name="submit" class="btn btn-info " value="Submit">
            <br>
          </div>
        </form>
      </div>


  </section>

  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
