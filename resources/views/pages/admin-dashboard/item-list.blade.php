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
         <h2 style="text-align: center; margin-bottom: 50px;"> New Listing</h2>
         <form action="{{ route('product.create') }}" method="post">

         @csrf
         <h4 style="text-align: left;">  Add photos</h4>
         <div class="container-box">
            <div class="wrapper">
               <div class="image">
                  <img src="" alt="">
               </div>
               <div class="content">
                  <div class="icon" style="text-align: center; ">
                     <i class="fas fa-cloud-upload-alt"></i>
                  </div>
                  <div class="text">
                     No file chosen, yet!
                  </div>
               </div>
               <div id="cancel-btn">
                  <i class="fas fa-times"></i>
               </div>
               <div class="file-name">
                  File name here
               </div>
            </div>
            <button type="button" onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
            <input id="imageFile" name="imageFile" type="file" accept="image" hidden><br><br>
            <input type="hidden" id="imageFileb64" name="imageFileb64">
            
            <h4 style="text-align: left;">Listing Title</h4>
            <input type="text" class="form-control" id="title" name="name" placeholder="Item Name" required>	

            <h4 style="text-align: left;">Category</h4>
            <select class="form-select form-select-lg" name="category">
                <option>Dental Supply</option>
                <option>Figurines</option>
                <option>Lab Gowns</option>
                <option>Masks</option>
                <option>Medicines</option>
                <option>Stuffed Toys</option>
                <option>Others</option>
            </select>

            <h4 style="text-align: left;">Listing Price (₱)</h4>
            <input type="text" class="form-control" id="listingprice" name="price" placeholder="Listing Price" required>	
 
            <h4 style="text-align: left;">Description</h4>
            <input type="text" class="form-control" id="title" name="description" placeholder="Description" required>	

            {{-- <h4 style="text-align: left;">Quantity</h4>
            <input style="width: 300px; height: 40px;" type="number" class="form-control" id="Quantity" name="quantity" placeholder="      Quantity" min="1" required>	 --}}
                       
            <button style="" type="submit" id="custom-btn">Post</button> 
            <button type="button" id="custom-btn" onclick="window.location.href='/admin/dashboard';">Cancel</button>


         </div>
            
        </form>
    </div>
    <div class="footer">

    </div>
    <script src="/js/itemlist-forms.js"></script>
</body>

{{-- <script>
  function readFile() { 
      if (!this.files || !this.files[0]) return;         
      const FR = new FileReader();
         
      FR.addEventListener("load", function(evt) {
         document.querySelector("#imageFileb64").value = evt.target.result;
      });          
      FR.readAsDataURL(this.files[0]);      
      }

      document.querySelector("#imageFile").addEventListener("change", readFile);

      @if (session('success'))
         <script>
            alert("{{ session('success') }}");
         </script>
      @endif

      
</script> --}}



</html>
