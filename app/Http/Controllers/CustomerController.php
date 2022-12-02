<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function addCustomer(Request $req){
        $customerObj=new Customer();
        $customerObj->name=$req->name;
        $customerObj->email=$req->email;
        $customerObj->address=$req->address;
        $customerObj->save();

        return redirect()->route('view');


    }
    public function destroy($id){
        $data=Customer::find($id);
        $data->delete();
        return redirect()->route('view');
    }
    public function edit($id){
        $data=Customer::find($id);
        return view('edit', ['data'=>$data]);
    }
    public function updateRecord(Request $req){
        $customerObj=Customer::find($req->id);
        $customerObj->name=$req->name;
        $customerObj->email=$req->email;
        $customerObj->address=$req->address;
        $customerObj->save();
        return redirect()->route('view');
    }
}
