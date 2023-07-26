<!DOCTYPE html>
<html lang="en">
<head>
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favlogo.ico" type="image/x-icon">
    <link rel="icon" href="img/favlogo.ico" type="image/x-icon">

    <title>Jandra Global</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  

    
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include necessary CSS and JS files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include your CSS stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/itemlist-forms.css') }}" type="text/css"> 
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
    <!-- Designing -->
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="assets/css/demo.css" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
        <!-- Page CSS -->
        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Add this line to the head section of your HTML file -->
    <script>
      const baseURL = "{{ url('/') }}"; // This will set the baseURL to your Laravel application URL
    </script>
</head>

 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-content-navbar">
 <div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
@include('pages.new-admin.sidebar') 
        <!-- Layout container -->
        <div class="layout-page">
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
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input
                  type="text"
                  class="form-control border-0 shadow-none"
                  placeholder="Search..."
                  aria-label="Search..."
                />
              </div>
            </div>
            <!-- /Search -->

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
        


                
<body class="container-fluid">
  
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->  
  <div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="col-8 mt-1">
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light"> </span> Listed Products</h4>
          <div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
          </div>
          <div class="container-sm px-0">
            <div class="row">

              <div class="col-sm-6 ">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search products...">
              </div>
            
              <div class="col-sm-6 ">
                <form action="{{ url('/admin/dashboard/item/view') }}" method="GET" class="d-flex justify-content-end">
                  <div class="form-group mx-3">
                    <select name="category" class="form-select bg-light" onchange="this.form.submit()">
                      <option value="" disabled selected hidden>Filter Category</option>
                      <option value="Dental Supply">Dental Supply</option>
                      <option value="Figurines">Figurines</option>
                      <option value="Lab Gowns">Lab Gowns</option>
                      <option value="Masks">Masks</option>
                      <option value="Medicines">Medicines</option>
                      <option value="Stuffed Toys">Stuffed Toys</option>
                      <option value="Others">Others</option>
                    </select>                    
                  
                  </div>
                </form>
              </div>
            
            </div>    
          </div>

          <div class="card">
          <div class="demo-inline-spacing mb-4">
          <div class="table-data card">             
              <table class="table table-striped table-bordered table-responsive">
                <thead>
                  <tr class="text-nowrap">
                    <th class="text-center py-4">Actions</th>
                    <th class="text-center py-4">Product ID</th>
                    <th class="text-start py-4">Product Name</th>
                    <th class="text-start py-4">Category</th>
                    <th class="text-center py-4">Listing Price</th>
                    <th class="text-start py-4">Description</th>
                    <th class="text-start py-4">Product Image</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td class="d-flex justify-content-center">
                        <a href="{{ route('product.edit', ['id' => $product['id']]) }}" class="btn btn-primary edit-btn p-auto mx-1">
                          <span class="tf-icons bx bx-edit"></span>
                        </a>
                        
                        <!-- Add a form to delete the item -->
                        <form action="{{ route('product.delete', ['id' => $product['id']]) }}" method="POST" class="d-inline p-0">
                          @csrf
                          @method('DELETE')
                          <button type="submit" onclick="return confirmDelete(event)" title="Delete Item" class="btn btn-secondary edit-btn p-auto mx-1">
                            <span class="tf-icons bx bx-trash"></span>
                          </button>
                        </form>
                      </td>
                      <td class="text-center">{{ $product['id'] }}</td>
                      <td class="text-start"><a href="/shop/view/{{ $product['id'] }}">{{ $product['name'] }} </a></td>
                      <td class="text-start">{{ $product['category'] }}</td>
                      <td class="text-center">{{ $product['price'] }}</td>
                      <td class="text-start description-cell">{{ $product['description'] }}</td>
                      <td class="text-start description-cell"><img src="{{ $product['image_file'] }}" alt="" style="height: 50px"></td>

                    </tr>
                  
                    
                  @endforeach
                </tbody>
              </table>

                <div class="col-md-12 px-3">
                  <nav aria-label="Page navigation ">
                    <ul class="pagination justify-content-end">
                      <!-- Use the links provided by the $products Paginator instance -->
                      {!! $products->links() !!}
                    </ul>
                  </nav>
                </div>

              
          </div>
          </div>
          


          </div>
          </div
    </div>
  </div>
</div>
</div>
</div>
</div>

  
  
  <div class="footer"></div>


  <!-- Include any necessary JavaScript libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript -->
  <script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent the default form submission

        // Show the confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'Once deleted, this listing cannot be recovered!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                event.target.closest('form').submit();
            }
        });
    }
  </script>
  
  <script>
    function redirectToCategory(category) {
        if (category === "") {
            // If "All Categories" is selected, redirect to the desired URL
            window.location.href = "{{ route('admin.ListedItems') }}";
        } else {
            // If a specific category is selected, submit the form
            this.form.submit();
        }
    }
  </script>



  <!-- SEACRCH WORKING LOCALHOST -->
{{-- <script>
  $(document).on('keyup', function(e) {
    e.preventDefault();
    let search_string = $('#search').val();
    // console.log(search_string);
    $.ajax({
      url: "{{ route('product.search')}}",
      method: 'GET',
      data: { search_string: search_string },
      success: function(res) {
        // Extract the desired data from the response
        let tableData = $(res).find('.table-data');

        // Update the relevant element(s) with the extracted data
        $('.table-data').html(tableData.html());
      }
    })
  })
</script> --}}


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script> 
</body>
</html>
