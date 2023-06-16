<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/graph.css" type="text/css">
       <!-- Material Icons -->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
       <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
       <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
       
    <title>Dashboard</title>
  </head>
<body>
	@include('templates.dashboard_sidebar')
	<section id="content">
		<div class="dash-content">
            <div class="overview">
		<!-- Main -->
        <main class="main-container">
            <div class="main-title">
              <p class="font-weight-bold">DASHBOARD</p>
            </div>

            <div id="liveAlertPlaceholder" style="text-align: center; margin-top: 3px;"></div>
            
            <div class="main-cards">
    
              <a href="/seller/items">
              <div class="card">
                <div class="card-inner">
                  <p class="text-primary">PRODUCTS</p>
                  <span class="material-icons-outlined text-blue">inventory_2</span>
                </div>                
                  <span class="text-primary font-weight-bold">0</span>                            
              </div>
                </a> 
              <a href="/dashboard/lessor/requests">
              <div class="card">
                <div class="card-inner">
                  <p class="text-primary">RENTAL REQUESTS</p>
                  <span class="material-icons-outlined text-orange">add_shopping_cart</span>
                </div>                
                <span class="text-primary font-weight-bold">0</span>                
              </div>
              </a>     
              <a href="/dashboard/lessor/rentals/ongoing">
              <div class="card">
                <div class="card-inner">
                  <p class="text-primary">ONGOING RENTALS</p>
                  <span class="material-icons-outlined text-green">shopping_cart</span>
                </div>                
                <span class="text-primary font-weight-bold">0</span>                
              </div>
              </a> 

              <a href="/dashboard/lessor/rentals/finished">
              <div class="card">
                <div class="card-inner">
                  <p class="text-primary">LIFETIME SALES</p>
                  <span class="material-icons-outlined text-red">notification_important</span>
                </div>                
                <span class="text-primary font-weight-bold">₱0</span>                
              </div>
              </a> 
    
            </div>
    
            <div class="charts">
    
              <div class="charts-card">
                <p class="chart-title">Most Searched Terms</p>
                <div id="bar-chart"></div>
              </div>
    
              <div class="charts-card">
                <p class="chart-title">Wishlist and Reservation Orders</p>
                <div id="area-chart"></div>
              </div>
    
            </div>

            <div class="charts">
    
                <div class="charts-card">
                  <p class="chart-title">Top 3 Best Sellers</p>
                  <div id="bar-chart2"></div>
                </div>
      
                <div class="charts-card">
                    <p class="chart-title">Top 3 Most Viewed Product</p>
                    <div id="bar-chart3"></div>

                  </div>
              </div>
            
        </div>

          </main>
          <!-- End Main -->
    
        </div>

        <section style="height: 800px;">
           
          
                  </div>
            </div>
          </section>
          

         
    
        <!-- Scripts -->
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
        <!-- Custom JS -->
				
	</section>

{{-- 
    <script 
        id="scriptValue" data-stats="" reserveChart="" wishlistChart=""src="/assets/scripts/graph.js">
    </script> --}}
    <script src="../js/graph.js"></script>
</body>
</html>
