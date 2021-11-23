@extends('layouts.master')
@section('title', 'Forwarder')
@section('content')

    <div class="container">
        <div class="row mb-6">
            <div class="col-lg-12">
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                    <li class="breadcrumb-item">
                        <a href=""><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" class="text-muted">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span   class="text-muted">Forwarders</span>
                    </li>

                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom gutter-b">

                    <div class="card card-custom gutter-b">
                        <div class="card card-custom gutter-b">
                            <div class="card-header flex-wrap border-0 pt-6 pb-0">


                            <div class="card-body">


                                <div class="row input-daterange">
                                    <div class="col-md-4">
                                        <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" name="filter" id="filter" class="btn-sm btn btn-primary">Filter</button>
                                         <button type="button" name="refresh" id="refresh" class="btn-sm btn btn-default">Refresh</button>
                                    </div>
                                </div>

                                <hr>
                                <!--begin: Datatable-->
                                <table class="table table-separate table-head-custom table-checkable" id="order_table">
                                    <thead>
                                     <tr>
                                         <th>Order ID</th>
                                         <th>First Name</th>
                                         <th>Last Name</th>
                                         <th>Email</th>
                                         <th>Reservation Id</th>
                                         <th>Entry Id</th>
                                         <th>Product</th>
                                         <th>SHOPIFY ORDER ID</th>
                                         <th>Created At</th>

                                     </tr>
                                    </thead>
                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
<script>
    $(document).ready(function(){
     $('.input-daterange').datepicker({
      todayBtn:'linked',
      format:'yyyy-mm-dd',
      autoclose:true
     });

     load_data();

     function load_data(from_date = '', to_date = '')
     {
      $('#order_table').DataTable({
       dom: 'lBfrtip',
       buttons: [
        'excel',
        ],
       processing: true,
       serverSide: true,
       ajax: {
        url:'{{ route("daterange2") }}',
        data:{from_date:from_date, to_date:to_date}
       },
       columns: [
        {
         data:'id',
         name:'order_id'
        },
        {
         data:'first_name',
         name:'name'
        },
        {
         data:'last_name',
         name:'last'
        },
        {
         data:'email',
         name:'email'
        },
        {
         data:'reservation_id',
         name:'reservation'
        },
        {
         data:'entry_id',
         name:'Entry'
        },
        {
         data:'products',
         name:'Pro'
        },
        {
         data:'shopify_order_id',
         name:'Shopifys'
        },
        {
         data:'created_at',
         name:'createds'
        },

       ]
      });
     }

     $('#filter').click(function(){
      var from_date = $('#from_date').val();
      var to_date = $('#to_date').val();
      if(from_date != '' &&  to_date != '')
      {
       $('#order_table').DataTable().destroy();
       load_data(from_date, to_date);
      }
      else
      {
       alert('Both Date is required');
      }
     });

     $('#refresh').click(function(){
      $('#from_date').val('');
      $('#to_date').val('');
      $('#order_table').DataTable().destroy();
      load_data();
     });

    });




    </script>


@endsection
