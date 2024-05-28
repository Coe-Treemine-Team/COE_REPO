@extends('layout_admin')
@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables user</h6>
                            <div style="margin-bottom: 20px;"></div>
                            <form action="/admin/user-search" method="GET" style="display: flex; align-items: center;">
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($nama as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->no_hp}}</td>
                                        <td>{{$data->description}}</td>
                                        <td style="text-align: center;">
                                            <div style="display: inline-block;">
                                                <a href="/admin/view_edit/{{$data->id}}" class="btn btn-primary btn-square">
                                                    <i class="fas fa-user-edit"></i> 
                                                </a>
                                                <span style="margin: 0 5px;"></span> <!-- Horizontal spacing -->
                                                <form style="display: inline-block;" action="/contact-delete/{{$data->id}}" method="post">
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