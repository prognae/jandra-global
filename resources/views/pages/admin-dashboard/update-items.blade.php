<!DOCTYPE html>
<html lang="en">
   <!-- favicon -->
<link rel="shortcut icon" href="img/favlogo.ico" type="image/x-icon">
<link rel="icon" href="img/favlogo.ico" type="image/x-icon">

    <title>Jandra Global</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="/css/itemlist-forms.css" type="text/css"> 
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>    
    
   <!-- Material Icons -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
   <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
   <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>

</head>
<body>   
	@include('templates.dashboard_sidebar')
    <div class="container d-flex justify-content-center mt-50 mb-50 ms-10">
        <h2 style="text-align: center; margin-bottom: 50px;"> Edit Listing</h2>



        <!-- Your form to edit the product -->

        <form method="POST" action="{{ route('product.update', $product->id) }}">
            

            @csrf
            @method('PUT')

            <!-- Add your form fields here -->
            <div class="container-box">
                <h4 style="text-align: left;">Listing ID</h4>
                <input type="text" class="form-control" id="title" name="id" placeholder="Item Id" value="{{$product['id']}}" readonly>
                <h4 style="text-align: left;">Listing Title</h4>
                <input type="text" class="form-control" id="title" name="name" placeholder="Item Name" value="{{$product['name']}}" required>	

                <h4 style="text-align: left;">Category</h4>
                <select class="form-select form-select-lg" name="category" required>
                    <option value="" selected></option>
                    <option value="Dental Supply">Dental Supply</option>
                    <option value="Figurines">Figurines</option>
                    <option value="Lab Gowns">Lab Gowns</option>
                    <option value="Masks">Masks</option>
                    <option value="Medicines">Medicines</option>
                    <option value="Stuffed Toys">Stuffed Toys</option>
                    <option value="Others">Others</option>
                </select>

                <h4 style="text-align: left;">Listing Price (₱)</h4>
                <input type="text" class="form-control" id="listingprice" name="price" placeholder="Listing Price" value="{{$product['price']}}" required>	
    
                <h4 style="text-align: left;">Description</h4>
                <input type="text" class="form-control" id="title" name="description" placeholder="Description" value="{{$product['description']}}" required>	

                <button style="" type="submit" id="custom-btn">Save Changes</button> 

                <button type="button" id="custom-btn" onclick="window.location.href='/admin/dashboard/item/view';">Cancel</button>
            </div>

        </form>

    </div>
    <div class="footer">

    </div>



    <script src="/js/itemlist-forms.js"></script>

</body>

</html>
