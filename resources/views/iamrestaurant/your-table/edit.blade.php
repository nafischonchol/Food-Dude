@extends('iamrestaurant.mainmenu')
@section('main_content')

    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Edit Table</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ route('your-table') }}">Table list</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="post" action='{{ route('table-edit')}}'>
                    @csrf

                    <div class="card-body">
                        @if (session('warning'))
                        <span class="alert alert-danger d-block" role="alert">
                            <strong>{{ session('warning') }}</strong>
                        </span>
                    @endif
                    
                    @php
                        $hours='12PM';
                        $tableQty=0;
                        $status[0]='Active';
                        $status[1]='Inactive';

                        $id=0;
                        if(isset($data[0]))
                        {
                            $id=$data[0]->id;
                            $hours=$data[0]->hours;
                            $tableQty=$data[0]->tableQty;
                            if($data[0]->zactive==0)
                            {
                                $status[0]='Inactive';
                                $status[1]='Active';
                            }
                        }
                    @endphp
                        
                  
                        <input type="hidden" name="id" value={{$id}}>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <small>Hours</small><span class="text-warning">*</span>
                                <input type='text' class="form-control" name="hours" value="{{$hours}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <small>Table Qty</small><span class="text-warning">*</span>
                                <input type="number" name="tableQty" class="form-control" value="{{$tableQty}}">
                            </div>
                            <div class="form-group col-md-4">
                                <small>Status</small><span class="text-warning">*</span>
                                <select  name="zactive" class="form-control">
                                    <option>{{$status[0]}}</option>
                                    <option>{{$status[1]}}</option>

                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="save" class="btn btn-primary form-control">Update</button>
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
