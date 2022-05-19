<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{

    public function delete($id)
    {
    Admin::where('id', $id)->delete();
    return redirect('Admin/list');
      
   }
   public function register()
    {
    return view('/Admin/register');
    }
      public function store(Request $request)
      
      {
        $Admin =new Admin();
        $Admin->username = $request->username;
        $Admin->password = $request->password;
        
       $is_saved = $Admin->save();
      if($is_saved){
      echo "  Record saved successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
}
public function get_all()
    {
     $Admin = Admin::all();
     return view('Admin.list', compact('Admin'));
    } 
public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $Admin->firstname = $request->username;
    $Admin->lastname = $request->password;
    $Admin->save();
    return redirect('Admin/list');
    }
}


