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
                        <span   class="text-muted">Excel Import</span>
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
                                <form action="">
                                    <div class="row input-daterange">
                                        <div class="col-md-4">
                                            <input type="file" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                                        </div>

                                        <div class="col-md-4">

                                             <button type="submit"   class="btn-sm btn btn-default">Upload</button>
                                        </div>
                                    </div>

                                </form>


                                <hr>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')



@endsection
