<!DOCTYPE html>
<html lang="en">
<head>

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

    <!-- Include your CSS stylesheet -->
    <link rel="stylesheet" href="/css/itemlist-forms.css" type="text/css"> 

    <!-- Include any necessary JavaScript libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>  

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>  

</head>
<body>
    @include('templates.dashboard_sidebar')
    <div class="container d-flex justify-content-center mt-50 mb-50 ms-10">
        <h2 style="text-align: center; margin-bottom: 50px;">Listed Products</h2>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Select</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Image URL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="selectedItems[]" value="{{ $product['id'] }}">
                            </td>
                            <td class="text-center">{{ $product['name'] }}</td>
                            <td class="text-center">{{ $product['category'] }}</td>
                            <td class="text-center">{{ $product['price'] }}</td>
                            <td class="text-center">{{ $product['quantity'] }}</td>
                            <td class="text-center">{{ $product['description'] }}</td>
                            <td class="text-center">{{ $product['imageFile'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                <button class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                <button class="btn btn-primary" onclick="redirectToEdit()">Edit</button>
            </div>
        </div>

    </div>
    <div class="footer">

    </div>
    <script src="/js/itemlist-forms.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            margin-top: 10px;
            margin-right: 5px;
            padding: 8px 16px;
            font-size: 16px;
        }
    </style>



    <script>
        // Function to confirm delete action
        function confirmDelete() {
            var selectedItems = [];
            $('input[type="checkbox"]:checked').each(function() {
                selectedItems.push($(this).val());
            });

            if (selectedItems.length > 0) {
                if (confirm("Are you sure you want to delete the selected items?")) {
                    // Perform the delete action here
                    // You can redirect or send an AJAX request to delete the items
                    // Example: window.location.href = '/delete-items/' + selectedItems.join(',');
                }
            } else {
                alert("Please select at least one item to delete.");
            }
        }

        // Function to redirect to edit item page
        function redirectToEdit(itemId) {
            // Redirect to the edit item page with the specific item ID
            // Example: window.location.href = '/edit-item/' + itemId;
        }
    </script>


</body>
</html>
