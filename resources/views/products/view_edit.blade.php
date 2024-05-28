@extends('layout_admin')
@section('content')
<div class="card shadow mb-4">
                        
    <div class="card-body">
    <form method="POST" action="/products/products-update/{{$products->id}}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
      <!------------------------------------------------------------------------------------->
          
          <div class="mb-3">
            <label for="exampleFormControlInput1">Title</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="title" value="{{$products->title}}" placeholder="Title ...">
          </div>
      <!------------------------------------------------------------------------------------->        
        <div class="mb-3">
            <label for="exampleFormControlInput1">Product Name</label>
            <input class="form-control" id="exampleFormContWrolInput1" type="text" name="product_name" value="{{$products->product_name}}" placeholder="Product name ...">
        </div>
      <!------------------------------------------------------------------------------------->
        <div class="mb-3">
            <label for="exampleFormControlInput1">Price</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="price" value="{{$products->price}}"  placeholder="Rp ...">
        </div>
      <!------------------------------------------------------------------------------------->
      <div class="mb-3">
            <label for="exampleFormControlInput1">Weight</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="weight" value="{{$products->weight}}" placeholder="Gram ...">
        </div>
      <!------------------------------------------------------------------------------------->
      <div class="mb-3">
            <label for="exampleFormControlInput1">Description</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name=" description" value="{{$products->description}}">
        </div>
      <!------------------------------------------------------------------------------------->
    <div class="mb-3">
        <label for="exampleFormControlSelect1">id category</label>
        <select class="form-control" id="exampleFormControlSelect1" name="id_category">
            <option value="{{$products->id_category}}">Select One</option>
            <option value="pre-product">Pre Product</option>
            <option value="part">part</option>
        </select>
    </div>
    <!------------------------------------------------------------------------------------->
    <div class="mb-3">
                <label for="images">Current Photo:</label><br>
                @if($products->images)
                    <img src="{{asset('storage/photos_products/' . $products->images)}}" width="100" alt="Current Photo">
                    <br>
                    <label for="delete_photo">Delete Photo:</label>
                    <input type="checkbox" id="delete_photo" name="delete_photo">
                @else
                    <p>No photo available</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="images">Upload New Photo:</label>
                <input type="file" class="form-control-file" id="images" name="images">
            </div>
            <small class="form-text text-muted">Please upload a file (Max: 5MB)</small>
        
      <!------------------------------------------------------------------------------------->
      <div>
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/admin/view_user" class="btn btn-secondary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                  <button class="btn btn-success ml-2" onclick="validateForm()" type="submit"><i class="fas fa-save"></i> Simpan </button>
              </td>
          </tr>
      </div>
      <!------------------------------------------------------------------------------------->
        </table>
        <br>
     </form>
</div>

<script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var phone_number = document.getElementById("phone_number").value;
        var password = document.getElementById("password").value;

        if (name === '' || username === '' || email === '' || phone_number === '' || password === '') {
            alert("Please fill in all fields");
        } else {
            document.getElementById("userForm").submit();
        }
    }
</script>
</div>
      
</div>
</div>
</div>
                    </div>

                </div>

@endsection