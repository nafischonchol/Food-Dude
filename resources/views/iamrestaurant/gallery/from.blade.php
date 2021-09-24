@extends('iamrestaurant.mainmenu')
@section('main_content')

    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Create Gallery</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ route('show-galleries') }}">Show Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('create-admin-gallery')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        @if (session('warning'))
                            <span class="alert alert-danger d-block" role="alert">
                                <strong>{{ session('warning') }}</strong>
                            </span>
                        @endif

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Image Type</small><span class="text-warning">*</span>
                                <select name="imageType" class="form-control">
                                    <option>Food</option>
                                    <option>Interior</option>
                                    <option>Exterior</option>
                                </select>
                                @if(session('imageType'))
                                    <p class='text-danger'>{{session('imageType')[0]}}</p>
                                @endif
                            </div>
                          
                            
                            <div class="form-group col-md-6">
                                <small>Image</small><span class="text-warning">*</span>
                                <input type='file' name='image' class='form-control'>
                                @if(session('image'))
                                    <p class='text-danger'>{{session('image')[0]}}</p>
                                @endif
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="save" class="btn btn-primary form-control">Save</button>
                    </div>
                </form>
               
            </div>{{-- card end --}}

        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

@endsection

