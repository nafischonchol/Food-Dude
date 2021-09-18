@extends('iamrestaurant.mainmenu')
@section('main_content')

    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Create Table</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ route('your-table') }}">Table list</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action='{{ route('create-table')}}'>
                    @csrf

                    <div class="card-body">
                        @if (session('warning'))
                        <span class="alert alert-danger d-block" role="alert">
                            <strong>{{ session('warning') }}</strong>
                        </span>
                    @endif
                       
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Hours</small><span class="text-warning">*</span>
                                <select name="hours" class="form-control">
                                    <option>7 PM</option>
                                    <option>7.30 PM</option>
                                    <option>8 PM</option>
                                    <option>8.30 PM</option>
                                    <option>9 PM</option>
                                    <option>9.30 PM</option>
                                    <option>10 PM</option>
                                    <option>10.30 PM</option>
                                    <option>11 PM</option>
                                    <option>11.30 PM</option>
                                    <option>12 PM</option>
                                    <option>12.30 PM</option>
                                    <option>1 AM</option>
                                    <option>1.30 AM</option>
                                    <option>2 AM</option>
                                    <option>2.30 AM</option>
                                    <option>3 AM</option>
                                    <option>3.30 AM</option>
                                    <option>4 AM</option>
                                    <option>4.30 AM</option>
                                    <option>5 AM</option>
                                    <option>5.30 AM</option>
                                    <option>6 AM</option>
                                    <option>6.30 AM</option>
                                    <option>7 AM</option>
                                    <option>7.30 AM</option>
                                    <option>8 AM</option>
                                    <option>8.30 AM</option>
                                    <option>9 AM</option>
                                    <option>9.30 AM</option>
                                    <option>10 AM</option>
                                    <option>10.30 AM</option>
                                    <option>11 AM</option>
                                    <option>11.30 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>1.30 PM</option>
                                    <option>2 PM</option>
                                    <option>2.30 PM</option>
                                    <option>3 PM</option>
                                    <option>3.30 PM</option>
                                    <option>4 PM</option>
                                    <option>4.30 PM</option>
                                    <option>5 PM</option>
                                    <option>5.30 PM</option>
                                    <option>6 PM</option>
                                    <option>6.30 PM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <small>Table Qty</small><span class="text-warning">*</span>
                               <input type="number" name="tableQty" class="form-control">
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

