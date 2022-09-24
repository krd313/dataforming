@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">Customer Add</h4>



                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('customer.all') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-level-up-alt"> Customer List</i></a> <br>  <br>

            <h4 class="card-title">Add Customer </h4> <br>

            {{-- <form > --}}

            <form method="post" action="{{ route('customer.store') }}" id="myForm">
                    @csrf


                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Company Name</label>
                            <input name="name" type="text" class="form-control" >
                        @error('company_name')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Contact Name</label>
                            <input name="contact_name" type="text" class="form-control" >
                        @error('contact_name')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Company Email</label>
                            <input name="email" type="email" class="form-control" >
                        @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Company ABN</label>
                            <input name="abn" type="text" class="form-control" >
                        @error('abn')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                        </div>
                    </div>
                </div>



                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control" >
                                @error('phone')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Mobil Phone</label>
                                    <input name="mobile_no" type="text" class="form-control" >
                                @error('mobile_no')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="inputState" class="form-label">State</label>
                                <select name="state_id" id="inputState" class="form-select">
                                    <option selected="">Choose...</option>
                                    @foreach($state as $supp)
                                    <option value="{{ $supp->id }}">{{ $supp->state }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Code</label>
                                    <input name="code" type="text" class="form-control" >
                                @error('mobile_no')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                </div>
                            </div>


                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Address 1</label>
                                    <input name="address_1" type="text" class="form-control" >
                                @error('address_1')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Address 2</label>
                                    <input name="address_2" type="text" class="form-control" >
                                @error('address_2')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">City</label>
                                    <input name="city" type="text" class="form-control" >
                                @error('city')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                </div>
                            </div>



                        </div>

                    {{-- </div> --}}

                {{-- </div> --}}

                {{-- ////////////////////// --}}

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-12">
                            <label for="validationCustom01" class="form-label">Notes</label>
                            <div class="col-sm-12">
                                {{-- <textarea id="elm1" name="company_notes">

                                </textarea> --}}
                                <textarea required="" name="note"  class="form-control" rows="5">
                                </textarea>
                            </div>
                            {{-- <input name="notes" type="text" class="form-control" > --}}
                        @error('note')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                        </div>
                    </div>

                </div>
                <br>

                {{-- <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                    <div class="col-sm-10">
                        <textarea required="" name="short_description"  class="form-control" rows="5">
                     {{ $aboutpage->short_description }}
                        </textarea>
                    </div>
                </div> --}}






<input type="submit" class="btn btn-info waves-effect waves-light" value="Add Customer">
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

