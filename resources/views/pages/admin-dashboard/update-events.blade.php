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
        
        @include('pages.new-admin.sidebar') 
        <!-- Menu -->

        
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
                      <img src="{{ asset('assets/img/avatars/blank grey.png') }}" alt class="w-px-40 h-auto rounded-circle" />
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
                      <a class="dropdown-item" href="auth-login-basic.html">
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
            <div class="col-lg-9" style="padding-top: 20px;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events /</span> Edit Event</h4>
                <div class="card mb-4">

                  <!---Card Header Change Product-->
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><b>Change Event Details</b></h5>
                    <small class="text-muted float-end">Input Event details</small>
                  </div>
                  <div class="card-body">

 <!-- Your form to edit the product -->
        {{-- <form method="POST" action="{{ route('product.update', $product->id) }}"> --}}
          <form method="POST" action="/admin/event/update/{{ $events->id }}">
          @csrf

<!--Listing ID-->
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Event ID</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-Title" class="input-group-text">
                <i class="bx bx-rename"></i>
              </span>
              <input
                type="text"
                class="form-control"
                id="basic-icon-default-fullname"
                name="id"
                placeholder="Item Id"
                value="{{ $events->id }}"
                readonly
              />
            </div>
          </div>

<!--Listing Title-->
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Event Title</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-Title" class="input-group-text">
                <i class="bx bx-rename"></i>
              </span>
              <input
                type="text"
                class="form-control"
                id="basic-icon-default-fullname"
                name="event_name"
                placeholder=""
                value="{{ $events->event_name }}"
                required
              />
            </div>
          </div> 

          <h4 style="text-align: left;">Event Title</h4>
          <input type="text" class="form-control" id="title" name="event_name" placeholder="Item Name" value="{{ $events->event_name }}" required>	


          <h4 style="text-align: left;">Event Date</h4>
          <input type="date" class="form-control" id="event_date" name="event_date" value="{{ $events->event_date }}" required>	
  

          <h4 style="text-align: left;">Event Description</h4>
          <textarea class="form-control" name="event_description" id="description" cols="30" rows="4" placeholder="Event Description (Optional)" value="{{ $events->event_description }}" ></textarea>

          <br>

                      <button type="submit" class="btn btn-primary">Save Changes</button>
                      <button type="button" class="btn btn-secondary" onclick="window.location.href='/admin/dashboard/event/view';">Cancel</button>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- / Content -->

                        <!-- Footer -->
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
                        <!-- / Footer -->

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
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
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
