<?php

namespace App\Http\Controllers\Backend;

use App\Models\CustomerJob;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerJobController extends Controller
{

    public function CustomerJobAll(){
         $customerjob = CustomerJob::latest()->get();
        return view('backend.customerjob.customerjob_all',compact('customerjob'));

} // End Method

   public function CustomerJobAdd(){
   return view('backend.customerjob.customerjob_add');

} // End Method

public function CustomerJobStore(Request $request){

    CustomerJob::insert([
        'name' => $request->name,
        'order' => $request->order,
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),

    ]);

     $notification = array(
        'message' => 'Customer Job Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('customerjob.all')->with($notification);

} // End Method

public function CustomerJobEdit($id){

    $customerjob = CustomerJob::findOrFail($id);
    return view('backend.customerjob.customerjob_edit',compact('customerjob'));

 } // End Method

 public function CustomerJobUpdate(Request $request){

    $customerjob_id = $request->id;

    CustomerJob::findOrFail($customerjob_id)->update([
        'name' => $request->name,
        'order' => $request->order,
        'updated_by' => Auth::user()->id,
        'updated_at' => Carbon::now(),

    ]);

     $notification = array(
        'message' => 'Customer Job Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('customerjob.all')->with($notification);

}// End Method


public function CustomerJobDelete($id){

    CustomerJob::findOrFail($id)->delete();

     $notification = array(
          'message' => 'Customer Job Deleted Successfully',
          'alert-type' => 'success'
      );

      return redirect()->back()->with($notification);

  } // End Method




}
