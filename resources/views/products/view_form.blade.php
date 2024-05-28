@extends('layout_admin')
@section('content')
<div class="card shadow mb-4">
                        
    <div class="card-body">
    <form method="POST" action="/products/view_products" enctype="multipart/form-data">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          
          <div class="mb-3">
            <label for="exampleFormControlInput1">Title</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="title" placeholder="name ...">
          </div>
      <!------------------------------------------------------------------------------------->        
        <div class="mb-3">
            <label for="exampleFormControlInput1">Product Name</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="product_name" placeholder="Product Name ...">
        </div>
      <!------------------------------------------------------------------------------------->
        <div class="mb-3">
            <label for="exampleFormControlInput1">Price</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="price" placeholder="Price...">
        </div>
      <!------------------------------------------------------------------------------------->
      <div class="mb-3">
            <label for="exampleFormControlInput1">Weight</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="weight" placeholder="gram...">
        </div>
      <!------------------------------------------------------------------------------------->
      <div class="mb-3">
            <label for="exampleFormControlInput1">description</label>
            <textarea class="form-control" id="exampleFormControlInput1" type="text" name="description" placeholder="description.." rows="3"></textarea>
        </div>
      <!------------------------------------------------------------------------------------->
    <div class="mb-3">
        <label for="exampleFormControlSelect1">Id_Category</label>
        <select class="form-control" id="exampleFormControlSelect1" name="id_category">
            <option value="">Select One</option>
            <option value="pre_product">Pre-Product</option>
            <option value="part">Parts</option>
        </select>
    </div>
      <!------------------------------------------------------------------------------------->
      <div class="mb-3">
        <label for="images" class="form-label">Default file input example</label>
        <input class="form-control" type="file" name="images" id="images">
      </div>

      <small class="form-text text-muted">Please upload a file (Max: 5MB)</small>
      <!------------------------------------------------------------------------------------->
      <div>
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/products/view_products" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                  <button class="btn btn-success ml-5" onclick="validateForm()"  type="submit"><i class="fas fa-save"></i> Simpan </button>
              </td>
          </tr>
</div>
      <!------------------------------------------------------------------------------------->
        </table>
        <br>
    </form>
</div>
</div>
      
</div>
</div>
</div>
                    </div>

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
@endsection