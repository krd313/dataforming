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

                    <a href="{{ route('customer.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Customer </i></a> <br>  <br>

                    <h4 class="card-title">Customer All List </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Phone </th>
                            <th>Email</th>
                            <th>Action</th>

                        </thead>


                        <tbody>
                            @php($i = 1)
                        	@foreach($customers as $key => $item)
                        <tr>
                            <td> {{ $i++}} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->phone }} </td>
                            <td> {{ $item->email }} </td>
                            <td>
    <a href="{{ route('customer.show',$item->id) }}" class="btn btn-info sm" title="Show Data">  <i class="fas fa-eye"></i> </a>
   <a href="{{ route('customer.edit',$item->id) }}" class="btn btn-warning sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="{{ route('customer.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

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
