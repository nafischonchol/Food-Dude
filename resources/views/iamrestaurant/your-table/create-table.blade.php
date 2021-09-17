@extends('iamrestaurant.mainmenu')
@section('main_content')

    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Stock Entry</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ url('stock-tran') }}">Stock Transections</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action='stock-entry'>
                    @csrf

                    <div class="card-body">
                        @if ($errors->any())
                            <span class="alert alert-success d-block" role="alert">
                                <strong>{{ $errors->first() }}</strong>
                            </span>
                        @endif
                       
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <small>Pharmaceutical Name</small><span class="text-warning">*</span>
                                <select name="pharmaceutical_xsl" class="form-control" id="pharmaceutical_xsl">
                                    <option></option>
                                    @isset($pharmaceutical)
                                        @foreach ($pharmaceutical as $item)
                                            <option value="{{ $item->xsl }}">{{ $item->name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <small>Brand Name</small><span class="text-warning">*</span>
                                <select name="xcode" class="form-control" id="xcode">  
                                    <option ></option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <small>Qty</small><span class="text-warning">*</span>
                                <input type="text" class="form-control" name="xqty" placeholder=0>
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

@section('js')

    <script>
        
        $(document).ready(function(){

            $("#pharmaceutical_xsl").change(function(){
               var v=$("#pharmaceutical_xsl").val();
               $('#xcode').find('option').remove().end();  //remove old option 
               if(v.length>0)
               {
                    $.get('getBrand/'+v,function(data){
                        for (let i = 0; i < data.length; ++i) {
                            // console.log(data[i]['xcode']);
                            $('#xcode').append(new Option(data[i]['xbrand'], data[i]['xcode'])) //add new option 

                        }
                        // console.log(data);
                    });
               }
            });
        });
    </script>
@endsection
