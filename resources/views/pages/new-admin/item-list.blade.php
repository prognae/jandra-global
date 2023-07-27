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
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/jandra.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
  @include('pages.new-admin.sidebar') 
     <!-- Layout wrapper -->
     <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
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
            <div class="col-lg-9" style="padding-top: 20px;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products /</span> Add Product</h4>
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><b>Add New Items</b></h5>
                    <small class="text-muted float-end">Input Product details</small>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('product.create') }}">
                      @csrf
                      <!--Upload Thumbnail-->
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Product Thumbnail</label>
                            <input class="form-control" type="file" id="imageFileMain" required />
                            <input type="hidden" id="imageFileb64-main" name="imageFileb64-main">
                        </div>
                      <!--Upload Thumbnail-->

                        <!--Upload Product Images-->
                        <div class="mb-3">
                          <label for="formFileMultiple" class="form-label">Add Product Photos</label>
                          <input class="form-control" type="file" id="imageFile1"  />
                          <input class="form-control" type="file" id="imageFile2"  />
                          <input class="form-control" type="file" id="imageFile3"  />

                          <input type="hidden" id="imageFileb64-1" name="imageFileb64-1">
                          <input type="hidden" id="imageFileb64-2" name="imageFileb64-2">
                          <input type="hidden" id="imageFileb64-3" name="imageFileb64-3">
                        </div>
                        <!--Upload Product Images-->

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Listing Title</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-Title" class="input-group-text"
                            ><i class="bx bx-rename"></i
                          ></span>
                          <input
                            type="text"
                            class="form-control"
                            id="title"
                            name = "name"
                            placeholder="Type Here..."
                            aria-label=""
                            aria-describedby=""
                          required/>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Category</label>
                        <select class="form-select" name="category" id="exampleFormControlSelect1" aria-label="Default select example" required>
                          <option selected>Dental Supply</option>
                          <option>Figurines</option>
                          <option>Lab Gowns</option>
                          <option>Masks</option>
                          <option>Medicines</option>
                          <option>Stuffed Toys</option>
                          <option>Others</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Listing Price (₱)</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group input-group-merge">
                            <span class="input-group-text">₱</span>
                            <input
                              type="text"
                              name = "price"
                              id = "listingprice"
                              class="form-control"
                              placeholder="0"
                              aria-label=""
                              required
                            />
                            <!--
                            <span class="input-group-text">.00</span>-->
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Product Shopee Link</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-Title" class="input-group-text"
                            ><i class="bx bx-rename"></i
                          ></span>
                          <input
                            type="url"
                            class="form-control"
                            id="shop_link"
                            name = "shop_link"
                            placeholder="Insert Product Link Here..."
                            aria-label=""
                            aria-describedby=""
                            />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-description">Main Description</label>
                        <div class="input-group input-group-merge">                         
                         
                      
                          <textarea class="form-control" name="description" id="description" cols="30" rows="4" placeholder="Short Description" required></textarea>

                      <!-- Textarea Element -->


                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-description">Product Information (Optional)</label>
                        <div class="input-group input-group-merge">
                        
                          
                          {{-- <input
                          type="text"
                          id="description"
                          name="description"
                          class="form-control"
                          placeholder="Type Here..."
                          aria-label=""
                          aria-describedby=""
                          required
                      /> --}}

                      <!-- Textarea Element -->
                      <textarea class="form-control" name="product_information" id="product_information" cols="30" rows="4" placeholder="Detailed Information" aria-label="" aria-describedby="" ></textarea>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-description">Material Used (Optional)</label>
                        <div class="input-group input-group-merge">
                          
                          
                          <textarea class="form-control" name="material_used" id="material_used" cols="30" rows="4" placeholder="Material Used" aria-label="" aria-describedby="" ></textarea>

                        </div>
                      </div>
                      <!--
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Quantity</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-Title" class="input-group-text"
                            ><i class="bx bx-purchase-tag"></i
                          ></span>
                          <input
                            type="number"
                            class="form-control"
                            id="Quantity"
                            placeholder="Type Here..."
                            aria-label=""
                            aria-describedby=""
                          />
                        </div>
                      </div>
                      -->
                      <button type="submit" class="btn btn-primary">Post</button>
                      <button type="submit" class="btn btn-secondary">Cancel</button>
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
     <!-- build:js assets/vendor/js/core.js -->
     <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>

  <script>
    function readFileMain() { 
      if (!this.files || !this.files[0]) return;         
      const FR = new FileReader();
         
      FR.addEventListener("load", function(evt) {
         document.querySelector("#imageFileb64-main").value = evt.target.result;
      });          
      FR.readAsDataURL(this.files[0]);      
      }

    function readFile1() { 
      if (!this.files || !this.files[0]) return;         
      const FR = new FileReader();
         
      FR.addEventListener("load", function(evt) {
         document.querySelector("#imageFileb64-1").value = evt.target.result;
      });          
      FR.readAsDataURL(this.files[0]);      
      }

      function readFile2() { 
      if (!this.files || !this.files[0]) return;         
      const FR = new FileReader();
         
      FR.addEventListener("load", function(evt) {
         document.querySelector("#imageFileb64-2").value = evt.target.result;
      });          
      FR.readAsDataURL(this.files[0]);      
      }

      function readFile3() { 
      if (!this.files || !this.files[0]) return;         
      const FR = new FileReader();
         
      FR.addEventListener("load", function(evt) {
         document.querySelector("#imageFileb64-3").value = evt.target.result;
      });          
      FR.readAsDataURL(this.files[0]);      
      }

      document.querySelector("#imageFileMain").addEventListener("change", readFileMain);
      document.querySelector("#imageFile1").addEventListener("change", readFile1);
      document.querySelector("#imageFile2").addEventListener("change", readFile2);
      document.querySelector("#imageFile3").addEventListener("change", readFile3);
  </script>
</html>
