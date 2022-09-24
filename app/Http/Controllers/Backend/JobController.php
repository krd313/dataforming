<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Customer;
use App\Models\CusCustomer;
use App\Models\CustomerJob;

class JobController extends Controller
{

    public function JobAll(){

         $job = Job::latest()->get();
        return view('backend.job.job_all',compact('job'));

} // End Method

public function JobAdd(){
    $customer = Customer::all();
    $cuscustomer = CusCustomer::all();
    $customerjob = CustomerJob::all();

    return view('backend.job.job_add',compact('customer','cuscustomer','customerjob'));
   }    // End Method

public function JobStore(Request $request){

        Job::insert([

            'customer_id' => $request->customer_id,
            'cuscustomer_id'=> $request->cuscustomer_id,
            'customerjob_id' => $request->customerjob_id,
            'customerjob_order' => $request->customerjob_order,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

       ]);

       $notification = array(
       'message' => 'Job Inserted Successfully',
       'alert-type' => 'success'
    );

    return redirect()->route('job.all')->with($notification);


    } // End Method

public function JobEdit($id){
    $customer = Customer::all();
    $cuscustomer = CusCustomer::all();
    $customerjob = CustomerJob::all();
    $job = Job::findOrFail($id);
    return view('backend.job.job_edit',compact('job','customer','cuscustomer','customerjob'));

    } // End Method

    public function JobUpdate(Request $request){

        $job_id = $request->id;

        Job::findOrFail($job_id)->update([

            'customer_id' => $request->customer_id,
            'cuscustomer_id'=> $request->cuscustomer_id,
            'customerjob_id' => $request->customerjob_id,
            'customerjob_order' => $request->customerjob_order,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

       ]);

       $notification = array(
       'message' => 'Job Updated Successfully',
       'alert-type' => 'success'
    );

    return redirect()->route('job.all')->with($notification);


    } // End Method

    public function JobDelete($id){

        Job::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Job Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Method

}
