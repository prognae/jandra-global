<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Home</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/jandra.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->

    <link rel="stylesheet" href="../pages/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../pages/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../pages/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../pages/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../pages/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../pages/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../pages/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../pages/assets/js/config.js"></script>
  </head>
<body>
  <section class="" id="sidebar">
    <a href="/" class="logo"><i class='bx bxs-home-smile icon' ></i>Jandra Global</a>
    <ul class="side-menu">
        <li><a href="/admin/dashboard"><i class='bx bx-tachometer icon'></i>Dashboard</a></li>
        <li><a href="#"><i class='bx bx-calendar icon'></i>Manage Products<i class='bx bx-chevron-right icon-right' ></i></a>
            <ul class="side-dropdown">
                <li><a href="/admin/dashboard/item/add">Add Products</a></li>
                <li><a href="/admin/dashboard/item/view">View Products</a></li>


                </ul>
            </li>
        <li><a href="#"><i class='bx bx-calendar icon'></i>Manage Events<i class='bx bx-chevron-right icon-right' ></i></a>
            <ul class="side-dropdown">
                <li><a href="/admin/dashboard/event/add">New Event</a></li>
                <li><a href="/admin/dashboard/event/view">View Events</a></li>


                </ul>
            </li>
        <li><a href="/logout"><i class='bx bx-log-out icon'></i>Logout</a></li>
        
    </ul>
    </div>
</section>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../pages/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../pages/assets/vendor/libs/popper/popper.js"></script>
    <script src="../pages/assets/vendor/js/bootstrap.js"></script>
    <script src="../pages/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../pages/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../pages/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../pages/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../pages/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>