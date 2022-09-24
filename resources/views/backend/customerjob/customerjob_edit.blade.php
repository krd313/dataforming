@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">Customer Job Edit</h4>



                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('customerjob.all') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-level-up-alt">   Customer Job List</i></a> <br>
            <h4 class="card-title">Edit Customer Job</h4><br><br>



            <form method="post" action="{{route('customerjob.update',$customerjob->id)}}" id="myForm" >
                @csrf

            <input type="hidden" name="id" value="{{ $customerjob->id }}">

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Description</label>
                        <input name="name" type="text" value="{{ $customerjob->name }}" class="form-control" >
                    @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    </div>
                </div>

            </div><!-- end row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Order No</label>
                        <input name="order" type="text" value="{{ $customerjob->order }}" class="form-control" >
                    @error('order')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    </div>
                </div>

            </div><!-- end row -->


<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Customer Job">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>





@endsection
