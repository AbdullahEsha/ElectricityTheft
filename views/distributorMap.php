<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Electricity Theft</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="../assets/main.js"></script>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
	<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="distributorPage.php">BD Electricity</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
        <a href="distributorPage.php"><img class="img-responsive img-rounded" src="../assets/image/<?=$_SESSION['img']?>"
            alt="User picture"></a>
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong><?=$_SESSION['name']?></strong>
          </span>
          <span class="user-role"><?=$_SESSION['userType']?></span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="distributorPage.php">Consumers</a>
                </li>
                <li>
                  <a href="#">Distributors</a>
                </li>
                <li>
                  <a href="theftPage.php">Thaft</a>
                </li>
                <li>
                  <a href="lineDetail.php">Status</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Location map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="theftNotification.php">
        <i class="fa fa-bell"></i>
        <span class="badge badge-danger badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
      </a>
      <a href="../php/logout.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
        <div class="form-group col-md-12">
        
            <!--Google map-->
            <div class="text-center">

  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRegular">Regular map modal</button>
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalSatellite">Satellite map
    modal</button>
  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalCustom">Custom map
    modal</button>

</div>

<!--Modal: Name-->
<div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">

        <button type="button" class="btn btn-info btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
        <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

<!--Modal: Name-->
<div class="modal fade" id="modalSatellite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-17" class="z-depth-1-half map-container-10" style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=new%20york&t=k&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">

        <button type="button" class="btn btn-default btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
        <button type="button" class="btn btn-outline-default btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

<!--Modal: Name-->
<div class="modal fade" id="modalCustom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-18" class="z-depth-1-half map-container-11"  style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=los%20angeles&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">

        <button type="button" class="btn btn-secondary btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
        <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->
            <!--Google Maps-->     

        </div> 
      </div>
      </div>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>