@extends('layout_admin')
@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables user</h6>
                            <div style="margin-bottom: 20px;"></div>
                            <form action="/admin/user-search" method="GET" style="display: flex; align-items: center;">
                                <a href="/products/view_form" class="btn btn-success mr-2">Add User</a> <!-- Adjust the href as needed -->
                               <input type="text" name="search" placeholder="Search..." class="form-control mr-2" style="width: 20%; margin: 0; border: none; border-radius: 0;">
                                <button type="submit" class="btn btn-primary" style="border-top-left-radius: 0; border-bottom-left-radius: 0;"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Product Name</th>
                                            <th>price</th>
                                            <th>Weight</th>
                                            <th>Role</th>
                                            <th>category_id</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <img src="{{asset('storage/photos_products/' .$data->images)}}" width="75px" style="text-align: center;">
                                        </td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->product_name}}</td>
                                        <td>Rp. {{$data->price}}</td>
                                        <td>{{$data->weight}} Gram</td>
                                        <td>{{$data->description}}</td>
                                        <td>{{$data->id_category}}</td>
                                        <td style="text-align: center;">
                                            <div style="display: inline-block;">
                                                <a href="/products/view_edit/{{$data->id}}" class="btn btn-primary btn-square">
                                                    <i class="fas fa-user-edit"></i> 
                                                </a>
                                                <span style="margin: 0 5px;"></span> <!-- Horizontal spacing -->
                                                <form style="display: inline-block;" action="/products/products-delete/{{$data->id}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-square">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @csrf
                                    @endforeach
                                    </tbody>
                                    </table>
                                    
                            </div>
                        </div>
                    </div>

                </div>
@endsection