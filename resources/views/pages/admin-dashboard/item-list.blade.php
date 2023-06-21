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

</head>
<body>   
	@include('templates.dashboard_sidebar')
    <div class="container d-flex justify-content-center mt-50 mb-50 ms-10">
        <h2 style="text-align: center; margin-bottom: 50px;"> New Listing</h2>
        <form action="/seller/insert" method="post">
        <h4 style="text-align: left;">Add photos</h4>
        <div class="container-box">
            <div class="wrapper">
               <div class="image">
                  <img src="" alt="">
               </div>
               <div class="content">
                  <div class="icon" style="text-align: center;">
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
            <!-- <button type="submit">Submit</button> -->
            <h4 style="text-align: left;">Listing Title</h4>
            <input type="text" class="form-control" id="title" name="item_name" placeholder="Item Name" required>	
            <h4 style="text-align: left;">Description</h4>
            <input type="text" class="form-control" id="title" name="description" placeholder="Description" required>	
            <h4 style="text-align: left;">Category</h4>
            <select class="form-select form-select-lg" name="category">
                <option>Gowns & Suits</option>
                <option>Musical Instrument</option>
                <option>Tools</option>
                <option>Books</option>
                <option>Entertainment</option>
                <option>Film And Photography</option>
                <option>Drones</option>
                <option>Projectors</option>
                <option>Costumes</option>
                <option>Camping Tents</option>
                <option>Furnitures</option>
            </select>
            <h4 style="text-align: left; margin-top: 18px;">Rental Price (per day) (₱)</h4>
            <input type="text" class="form-control" id="rentalprice" name="rental_rate" placeholder="Rental Price" required>	
            <!-- <h4 style="text-align: left; margin-top: 18px;">Item Value (₱)</h4>
            <input type="text" class="form-control" id="itemvalue" name="itemvalue" placeholder="Item Value" required>	 -->
            <h4 style="text-align: left; margin-top: 18px;">Replacement Cost (Deposit) (₱)</h4>
            <input type="text" class="form-control" id="replacement_cost" name="replacement_cost" placeholder="Replacement Cost" required>	
            <h4 style="text-align: left; margin-top: 18px;">Quantity</h4>
            <input type="number" class="form-control" id="Quantity" name="quantity" placeholder="Quantity" min="1" required>	
            
            <button type="submit" id="custom-btn">Post</button> 
            <a style="text-decoration:none;" href="/"><button type="button" id="custom-btn">Cancel</button></a>
            </div>
            
        </form>
    </div>
    <div class="footer">

    </div>
    <script src="/js/itemlist-forms.js"></script>
</body>

<script>
  function readFile() { 
      if (!this.files || !this.files[0]) return;         
      const FR = new FileReader();
         
      FR.addEventListener("load", function(evt) {
         document.querySelector("#imageFileb64").value = evt.target.result;
      });          
      FR.readAsDataURL(this.files[0]);      
      }

      document.querySelector("#imageFile").addEventListener("change", readFile);
      
</script>


</html>
