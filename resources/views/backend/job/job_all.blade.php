@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Customer All</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Job </i></a> <br>  <br>

                    <h4 class="card-title">Job List </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Customer</th>
                            <th>Cus Customer</th>
                            <th>Description</th>
                            <th>Order No</th>
                            <th>Action</th>

                        </thead>


                        <tbody>
                            @foreach($job as $key => $item)
                        <tr>
                            <td>{{ $key+1}} </td>
                            <td> {{ $item['customer']['name'] }} </td>
                            <td> {{ $item['cuscustomer']['name'] }} </td>
                            <td> {{ $item['customerjob']['name'] }} </td>
                            <td> {{ $item['customerjoborder']['order'] }} </td>
                            <td>

   <a href="{{ route ('job.edit',$item->id)}}" class="btn btn-warning sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="{{ route ('job.delete',$item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection
