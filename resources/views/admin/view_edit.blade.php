@extends('layout_admin')
@section('content')
<div class="card shadow mb-4">
                        
    <div class="card-body">
    <form method="POST" action="/admin/user-update/{{$user->id}}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
      <!------------------------------------------------------------------------------------->
          
          <div class="mb-3">
            <label for="exampleFormControlInput1">Name</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="name" value="{{$user->name}}" placeholder="name ...">
          </div>
      <!------------------------------------------------------------------------------------->        
        <div class="mb-3">
            <label for="exampleFormControlInput1">Username</label>
            <input class="form-control" id="exampleFormContWrolInput1" type="text" name="username" value="{{$user->username}}" placeholder="username ...">
        </div>
      <!------------------------------------------------------------------------------------->
        <div class="mb-3">
            <label for="exampleFormControlInput1">Email</label>
            <input class="form-control" id="exampleFormControlInput1" type="email" name="email" value="{{$user->email}}"  placeholder="name@example.com...">
        </div>
      <!------------------------------------------------------------------------------------->
      <div class="mb-3">
            <label for="exampleFormControlInput1">Phone_Number</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="phone_number" value="{{$user->phone_number}}" placeholder="(+62)xxx...">
        </div>
      <!------------------------------------------------------------------------------------->
      <div class="mb-3">
            <label for="exampleFormControlInput1">Password</label>
            <input class="form-control" id="exampleFormControlInput1" type="password" name=" password">
        </div>
      <!------------------------------------------------------------------------------------->
    <div class="mb-3">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1" name="role">
            <option value="{{$user->role}}">Select One</option>
            <option value="admin">Admin</option>
            <option value="guest">Customer</option>
        </select>
    </div>
    <!------------------------------------------------------------------------------------->
    <div class="mb-3">
                <label for="photo">Current Photo:</label><br>
                @if($user->photo)
                    <img src="{{asset('storage/photos_user/' . $user->photo)}}" width="100" alt="Current Photo">
                    <br>
                    <label for="delete_photo">Delete Photo:</label>
                    <input type="checkbox" id="delete_photo" name="delete_photo">
                @else
                    <p>No photo available</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="photo">Upload New Photo:</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
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