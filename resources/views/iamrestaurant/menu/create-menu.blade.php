@extends('iamrestaurant.mainmenu')
@section('main_content')

    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Create Menu</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ route('show-admin-manu') }}">Menu list</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('create-admin-menu')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        @if (session('warning'))
                            <span class="alert alert-danger d-block" role="alert">
                                <strong>{{ session('warning') }}</strong>
                            </span>
                        @endif

                       
                    
                       

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Menu Type</small><span class="text-warning">*</span>
                                <select name="menuType" class="form-control">
                                    <option>Pizza</option>
                                    <option>Burger</option>
                                    <option>Soap</option>
                                </select>
                                @if(session('menuType'))
                                    <p class='text-danger'>{{session('menuType')[0]}}</p>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <small>Category</small><span class="text-warning">*</span>
                                <input type="text" name='category'  value="{{ old('category') }}" placeholder="Big chess,king size etc" class="form-control"> 
                                @if(session('category'))
                                    <p class='text-danger'>{{session('category')[0]}}</p>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <small>Sub Category</small><span class="text-warning">*</span>
                                <input type="text" name='subCatergory' value="{{ old('subCatergory') }}" placeholder="Chess Burger..." class="form-control"> 
                                @if(session('subCatergory'))
                                    <p class='text-danger'>{{session('subCatergory')[0]}}</p>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <small>Price</small><span class="text-warning">*</span>
                                <input type="number" name='price' value="{{ old('price') }}" class="form-control"> 
                                @if(session('price'))
                                    <p class='text-danger'>{{session('price')[0]}}</p>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <small>Description</small>
                                <textarea name='description' class="form-control">{{ old('description') }} </textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <small>Ingredients</small>
                                <textarea name='ingredients'  class="form-control"> {{ old('ingredients') }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <small>Nutrition</small>
                                <textarea name='nutrition' class="form-control">{{ old('nutrition') }} </textarea>
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

