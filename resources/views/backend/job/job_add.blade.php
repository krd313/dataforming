@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">


                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">Job Add</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('job.all') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-level-up-alt">   Job List</i></a> <br>  <br>
            <h4 class="card-title">Job Add </h4><br>



            <form method="post" action="{{route('job.store')}}" id="myForm" >
                @csrf





              <!-- end row -->
                <div class="row mb-3">
                    <div class="col-md-12">
                    <label class="form-label">Customer</label>
                        <div class="mb-3">
                        <select name="customer_id" class="form-select" aria-label="Default select example">
                            <option selected="">Open this select menu</option>
                            @foreach($customer as $cus)
                            <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div><!-- end row -->

             <div class="row mb-3">
                <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Customer Customer</label>
                    <div class="mb-3">
                    <select name="cuscustomer_id" class="form-select" aria-label="Default select example">
                        <option selected="">Open this select menu</option>
                        @foreach($cuscustomer as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div><!-- end row -->

         <div class="row mb-3">
            <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Job Description</label>
                <div class="mb-3">
                <select name="customerjob_id" class="form-select" aria-label="Default select example">
                    <option selected="">Open this select menu</option>
                    @foreach($customerjob as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row mb-3">
            <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Order No</label>
                <div class="mb-3">
                <select name="customerjob_order" class="form-select" aria-label="Default select example">
                    <option selected="">Open this select menu</option>
                    @foreach($customerjob as $item)
                    <option value="{{$item->id}}">{{$item->order}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div><!-- end row -->









<input type="submit" class="btn btn-info waves-effect waves-light" value="Add Job ">
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
                customer_id: {
                    required : true,
                },

            },
            messages :{
                customer_id: {
                    required : 'Please Enter Name',
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
