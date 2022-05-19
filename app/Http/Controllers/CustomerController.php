<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function register()
    {
    return view('/customer/register');
    }
      public function store(Request $request)
      
      {
        $customer =new customer();
        $customer->id = $request->id;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->sex = $request->sex;
        $customer->phoneNo = $request->phoneNo;
        $customer->bank_account = $request->bank_account;
        $customer->house_No = $request->house_No;
       $is_saved = $customer->save();
      if($is_saved){
      echo "  Record saved successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
}
public function get_all()
    {
     $customers = customer::all();
     return view('customer.list', compact('customers'));
    } 
    public function edit($id)
 {
 $customer = customer::find($id);
 return view('customer.edit', compact('customer'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $customer= customer::find($request->id);
    $customer->firstname = $request->firstname;
    $customer->lastname = $request->lastname;
    $customer->sex = $request->sex;
    $customer->phoneNo = $request->phoneNo;
    $customer->bank_account = $request->bank_account;
    $customer->house_No = $request->house_No;
    $customer->save();
    return redirect('customer/list');
    }
    public function delete($id)
 {
 customer::where('id', $id)->delete();
 return redirect('customer/list');
   
}

public function search($id)
    {
     $customer = customer::where('id',$id)->first();
     return view('customer.search', compact('customer'));
    } 
/*public function addservice()
{

}
public function paybill()
{
    
}
*/
}