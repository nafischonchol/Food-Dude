@extends('iamrestaurant.mainmenu')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('main_content')
    <div class="container-fluid">
       
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Order List </h3>
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
                    <form action='update-order-status' method="post">
                        @csrf
                        <div class="row mb-4">
                            <div class="col">
                                <p  class="btn btn-success form-control" name="print" id="print">Print</p>
                            </div>
                            <div class="col">
                                <input type='submit' class="btn btn-danger form-control action_submit" value='Cancel' name="submit">
                            </div>
                            <div class="col">
                                <input type='submit' class="btn btn-warning form-control action_submit" value='CSV Download' name="submit">
                            </div>
                            <div class="col">
                                <input type='submit' class="btn btn-info form-control" value='All not printed' name="submit">
                            </div>
                            {{-- <div class="col">
                                <input type='submit' class="btn btn-info form-control" value='All not confirmed' name="submit">
                            </div> --}}
                        </div>
                        <table id="example" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Date</th>
                                    <th>Invoice</th>
                                    <th>Brand Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($data)
                                    
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->xdate}}</td>
                                            <td>{{$item->invoice}}</td>
                                            <td>{{$item->xbrand}}</td>
                                            <td>{{$item->xamount}}</td>
                                            @php
                    
                                                switch($item->xflag)
                                                {
                                                    case '1':
                                                        $flag='New Order';
                                                        break;
                                                    case '2':
                                                        $flag='Confirmed';
                                                        break;
                                                    case '3':
                                                        $flag='Printed';
                                                        break;
                                                    case '4':
                                                        $flag='Shipped';
                                                        break;
                                                    case '5':
                                                        $flag='Delivered';
                                                        break;
                                                   
                                                    case '6':
                                                        $flag='Cancel';
                                                        break;
                                                    case '7':
                                                        $flag='Returned';
                                                        break;
                                                    case '8':
                                                        $flag='Partial';
                                                        break;
                                                    default:
                                                        $flag='Other';
                                                        break;
                                                }
                                               
                                            @endphp
                                            {{-- <td>{{$flag}}</td> --}}
                                            @if ($item->xflag==1)
                                                <td><a class="btn btn-warning" href="{{ url('confirm-order/'.$item->invoice) }}"> Confirm </a> </td>
                                            @elseif ($item->xflag==2)
                                                <td><input type="checkbox" value="{{$item->invoice}}" name="xflag[]" class='check_class'/></td>
                                            @elseif($item->xflag==6)
                                                <td><h3 class='text-danger'>X</h3></td>
                                            @else
                                                
                                                <td>{{$flag}}</td>

                                            @endif
                                            <td>
                                                <a class="btn btn-outline-primary" href="{{ url('order-details/'.$item->invoice) }}"> Details </a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </form>

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

    <script src="{{ asset('js/order/index.js') }}"></script>
    <script src="{{ asset('js/jquery.print.js') }}"></script>

    {{-- data table --}}
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection