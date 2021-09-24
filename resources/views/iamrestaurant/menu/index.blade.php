@extends('iamrestaurant.mainmenu')
@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('main_content')

    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-md-12"> --}}
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left"> Menu list</h3>
                            </div>

                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ route('admin-menu-form') }}"> Create Menu</a>
                            </div>
                            <div class="col-md-12">
                                @if (session('success'))
                                    <span class="alert alert-success d-block" role="alert">
                                        <strong>{{ session('success') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- /.card-header -->

                <div class="card-body">
                    <table id="example" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Menu Type</th>
                                <th>Price</th>

                                <th>Category</th>
                                <th>Sub category</th>
                                {{-- <th>Nutrition</th>
                                <th>Description</th>
                                <th>Ingredients</th> --}}
                                {{-- <th>Action</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                                @foreach ($data as $item)
                                    <tr>
                                        
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->menuType }}</td>
                                        <td>{{ $item->price }}</td>

                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->subCatergory }}</td>
                                        {{-- <td>{{ $item->nutrition }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->ingredients }}</td> --}}
                                        {{-- 
                                        <td>
                                            <a href='{{ route("your-table-edit",[$item->id]) }}' class="btn btn-primary">Edit</a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>

                    </table>
                </div>

            </div>{{-- card end --}}
            {{-- </div> --}}
        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
