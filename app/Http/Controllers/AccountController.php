<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
class AccountController extends Controller
{
    public function delete($id)
    {
    Account::where('id', $id)->delete();
    return redirect('Account/list');
      
   }
   public function register()
    {
    return view('/Account/register');
    }
      public function store(Request $request)
      
      {
        $Account =new Account();
        $Account->username = $request->username;
        $Account->department = $request->department;
        
       $is_saved = $Account->save();
      if($is_saved){
      echo "  Record saved successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
}
}

