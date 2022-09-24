<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use App\Models\Job;
use App\Models\Customer;
use App\Models\CusCustomer;
use App\Models\CustomerJob;

class InvoiceController extends Controller
{

    public function InvoiceAll(){

    //     $job = Job::latest()->get();
    //    return view('backend.invoice.invoice_all',compact('job'));

    return view('backend.invoice.invoice_all');

} // End Method

}
