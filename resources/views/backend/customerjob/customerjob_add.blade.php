@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">


                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">Customer Job Add</h4>



                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('customerjob.all') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-level-up-alt">   Customer Job List</i></a> <br>  <br>
            <h4 class="card-title">Customers Job Add </h4><br><br>



            <form method="post" action="{{route('customerjob.store')}}" id="myForm" >
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Description</label>
                            <input name="name" type="text" class="form-control" >

                        </div>
                    </div>

                </div><!-- end row -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Order No</label>
                            <input name="order" type="text" class="form-control" >
                        @error('order')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                        </div>
                    </div>



                </div><!-- end row -->








<input type="submit" class="btn btn-info waves-effect waves-light" value="Add Customers Job">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },

            },
            messages :{
                name: {
                    required : 'Please Enter Your Name',
                },

            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>



@endsection
