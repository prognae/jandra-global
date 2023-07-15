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

    <!-- Designing -->
    <link rel="stylesheet" href="/css/admin-table/boxicons.css" />

    <link rel="stylesheet" href="/css/admin-table/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/css/admin-table/theme-default.css" class="template-customizer-theme-css" />
   
  <body>
    <div class="layout-wrapper layout-content-navbar">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Products</h4>
              <div class="demo-inline-spacing mb-4">
              <button type="button" class="btn btn-primary">
                <span class="tf-icons bx bx-plus"></span>&nbsp; Add Item
              </button>
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-outline-primary dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Sort Items
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">By Name (A-Z)</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">By Name (Z-A)</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">By Price (Highest to Lowest)</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">By Price (Lowest to Highest)</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">By Category Name</a></li>
                </ul>
              </div>
              </div>

              <!-- Responsive Table -->
              <div class="card">
                <h5 class="card-header" style="text-align: center;">Product List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Category</th>
                        <th>Listing Price</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <img src="{{ $product->image_file }}" class="item-size" alt="">
                                </td>
                                <td>{{ $product->category }}</td>
                                <td>₱ {{ $product->price }}</td>
                                <td style="max-width: 200px; overflow:hidden; text-overflow:ellipsis; white-space: nowrap;">
                                    {{ $product->description }}
                                </td>
                                <th>
                                    <div class="demo-inline-spacing">
                                        <button type="button" title="Edit Item Details" class="btn btn-icon btn-primary">
                                        <span class="tf-icons bx bx-edit"></span>
                                        </button>
                                        <button type="button" title="Delete Item" class="btn btn-icon btn-secondary">
                                        <span class="tf-icons bx bx-trash"></span>
                                        </button>
                                    </div>
                                </th>
                            </tr>
                        @endforeach                      
                    </tbody>
                  </table>
                </div>
              </div>

              <!--/ Responsive Table -->
              <!-- Pagination -->
              <div class="container-xl container-p-y" style="padding-left: 500px;"></div>
              <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm">
                  <li class="page-item prev">
                    <a class="page-link" href="javascript:void(0);"
                      ><i class="tf-icon bx bx-chevrons-left"></i
                    ></a>
                  </li>
                  <li class="page-item next">
                    <a class="page-link" href="javascript:void(0);"
                      ><i class="tf-icon bx bx-chevron-left"></i
                    ></a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="javascript:void(0);">1</a>
                  </li>
                  <li class="page-item next">
                    <a class="page-link" href="javascript:void(0);"
                      ><i class="tf-icon bx bx-chevron-right"></i
                    ></a>
                  </li>
                  <li class="page-item next">
                    <a class="page-link" href="javascript:void(0);"
                      ><i class="tf-icon bx bx-chevrons-right"></i
                    ></a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- / Pagination -->
            </div>
          </div>
        </div>

      </div>

    <script src="/js/admin-table/bootstrap.js"></script>
  </body>
</html>
