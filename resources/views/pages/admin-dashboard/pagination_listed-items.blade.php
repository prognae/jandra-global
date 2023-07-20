{{-- <table class="table table-striped table-bordered">
  <thead>
    <tr class="text-nowrap">
      <th class="text-center">Actions</th>
      <th class="text-center">Product ID</th>
      <th class="text-start">Product Name</th>
      <th class="text-start">Category</th>
      <th class="text-center">Listing Price</th>
      <th class="text-start">Description</th>
      <th class="text-start">Product Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
      <tr>
        <td>


        <a href="{{ route('product.edit', ['id' => $product['id']]) }}" class="btn btn-primary edit-btn">
          <span class="tf-icons bx bx-edit"></span>
        </a>



        <!-- Add a form to delete the item -->
        <form action="{{ route('product.delete', ['id' => $product['id']]) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirmDelete(event)" title="Delete Item" class="btn btn-icon btn-secondary">
              <span class="tf-icons bx bx-trash"></span>
          </button>
      </form>
      

        <td class="text-center">{{ $product['id'] }}</td>
        <td class="text-start">{{ $product['name'] }}</td>
        <td class="text-start">{{ $product['category'] }}</td>
        <td class="text-center">{{ $product['price'] }}</td>
        <td class="text-start description-cell">{{ $product['description'] }}</td>
        <td class="text-start description-cell">{{ $product['imageFile'] }}</td>

        </td>
      </tr>
    
      
    @endforeach

  </tbody>
</table>

{!! $products->links() !!}  --}}