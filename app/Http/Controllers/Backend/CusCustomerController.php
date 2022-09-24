<?php

namespace App\Http\Controllers\Backend;

use App\Models\CusCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CusCustomerController extends Controller
{

    public function CusCustomerAll(){

         $cuscustomer = CusCustomer::latest()->get();
        return view('backend.cuscustomer.cuscustomer_all',compact('cuscustomer'));

    } // End Method

    public function CusCustomerAdd(){

       return view('backend.cuscustomer.cuscustomer_add');

   } // End Method

   public function CusCustomerStore(Request $request){

    CusCustomer::insert([
        'name' => $request->name,
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),

    ]);

     $notification = array(
        'message' => 'Customers Customer Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('cuscustomer.all')->with($notification);

} // End Method

public function CusCustomerEdit($id){

    $cuscustomer = CusCustomer::findOrFail($id);
   return view('backend.cuscustomer.cuscustomer_edit',compact('cuscustomer'));

} // End Method

public function CusCustomerUpdate(Request $request){

    $cuscustomer_id = $request->id;

    CusCustomer::findOrFail($cuscustomer_id)->update([
        'name' => $request->name,
        'updated_by' => Auth::user()->id,
        'updated_at' => Carbon::now(),

    ]);

     $notification = array(
        'message' => 'Customers Customer Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('cuscustomer.all')->with($notification);

}// End Method

public function CusCustomerDelete($id){

    CusCustomer::findOrFail($id)->delete();

 $notification = array(
      'message' => 'Customer Deleted Successfully',
      'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);

} // End Method

}
