<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Tables - Product</title>

    <meta name="description" content="" />

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/jandra.png') }}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contains global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js') }}"></script>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <img src="../assets/img/favicon/jandra.png" class="image-size" alt="">


            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <!-- Products -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                <div data-i18n="Products">Products</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="products.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Item List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="input-item.html" class="menu-link">
                    <div data-i18n="Input groups">New Item</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Products -->
            <!-- Events -->
            <li class="menu-item active">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                  <div data-i18n="Products">Events</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="events.html" class="menu-link">
                      <div data-i18n="Basic Inputs">View Event</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="add-events.html" class="menu-link">
                      <div data-i18n="Input groups">Add Event</div>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Events -->
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">

                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/blank grey.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Leandra Villaroman</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>

                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper align-items-center">
            <!-- Content -->
            <div class="col-lg-8" style="padding-top: 20px;">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events</h4>
                <div class="card mb-4">
                  <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                                <div class="card-body">
                                <h5 class="card-title">Event Photo</h5>
                            </div>
                        </div>
                        </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Event Description</label>
                        <div class="input-group input-group-merge">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ad voluptatum repellat assumenda doloribus! Ipsum saepe alias illum corrupti, dignissimos deserunt necessitatibus eum</p>
                      </div>
                      <div class="mb-3">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Event Date</label>
                        <div class="input-group input-group-merge">
                          <p>January 31, 2024</p>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Start Time</label>
                        <div class="input-group input-group-merge">
                            12:00 PM
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="html5-date-input" class="col-md-2 col-form-label">End Time</label>
                        <div class="input-group input-group-merge">
                            6:00 PM
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">View on Website</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- / Content -->

                        <!-- Footer 
                        <footer class="content-footer footer bg-footer-theme">
                          <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                              © 
                              <a href="#" target="_blank" class="footer-link fw-bolder">Jandra Global Traders Corp.</a>
                            </div>
                            <div>
                              <a href="#" class="footer-link me-4" target="_blank">Product</a>
                              <a href="#" target="_blank" class="footer-link me-4">Profile</a>
                              <a href="#" target="_blank" class="footer-link me-4">Statistics</a>
                              <a href="#" target="_blank" class="footer-link me-4">Gallery</a>
                            </div>
                          </div>
                        </footer>
                         Footer -->

            <div class="content-backdrop fade"></div>
          </div>

          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
