<?php

namespace App\Http\Controllers\Backend;

use App\Models\Customer;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function CustomerAll(){

        $customers = Customer::latest()->get();
       return view('backend.customer.customer_all',compact('customers'));

   } // End Method

   public function CustomerAdd(){
    $state = State::all();

    return view('backend.customer.customer_add',compact('state'));
   }    // End Method

   public function CustomerStore(Request $request){

    $request->validate([
       'name' => 'required'

   ],[

       'name.required' => 'Name is Required',

   ]);


       Customer::insert([
           'name' => $request->name,
           'abn' => $request->abn,
           'phone' => $request->phone,
           'mobile_no' => $request->mobile_no,
           'email' => $request->email,
           'contact_name' => $request->contact_name,
           'address_1' => $request->address_1,
           'address_2' => $request->address_2,
           'city' => $request->city,
           'state_id' => $request->state_id,
           'code' => $request->code,
           'note' => $request->note,
           'created_by' => Auth::user()->id,
           'created_at' => Carbon::now(),

       ]);

       $notification = array(
       'message' => 'Company Name Inserted Successfully',
       'alert-type' => 'success'
    );

    return redirect()->route('customer.all')->with($notification);


} // End Method

public function CustomerShow($id){
    $state = State::all();
    $customer = Customer::findOrFail($id);
    return view('backend.customer.customer_show',compact('customer','state'));


} // End Method

public function CustomerEdit($id){

    $state = State::all();
    $customer = Customer::findOrFail($id);
    return view('backend.customer.customer_edit',compact('customer','state'));


} // End Method

public function CustomerUpdate(Request $request,$id){

    $request->validate([
       'name' => 'required'

   ],[

       'name.required' => 'Name is Required',

   ]);


       Customer::findOrFail($id)->update([
           'name' => $request->name,
           'abn' => $request->abn,
           'phone' => $request->phone,
           'mobile_no' => $request->mobile_no,
           'email' => $request->email,
           'contact_name' => $request->contact_name,
           'address_1' => $request->address_1,
           'address_2' => $request->address_2,
           'city' => $request->city,
           'state_id' => $request->state_id,
           'code' => $request->code,
           'note' => $request->note,
           'updated_by' => Auth::user()->id,
           'updated_at' => Carbon::now(),

       ]);

       $notification = array(
       'message' => 'Company Name Inserted Successfully',
       'alert-type' => 'success'
    );

    return redirect()->route('customer.all')->with($notification);


} // End Method

public function CustomerDelete($id){

    Customer::findOrFail($id)->delete();

     $notification = array(
        'message' => 'Customer Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

} // End Method

}
