<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //buat fungsi Index
    function index(){
    //  echo "asaoy geboyu";
    $customer = customer::get(['customer_id','name','address']);
    //var_dump($customer);
    return view('customer.index', compact('customer'));
    }
    function create(){
    //  echo "telo";
    return view('customer.create');
    }
    public function store(Request $request){
      //echo 'coba';
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      echo $txtId." <br />".$txtName." <br />".$txtAddress;
      customer::create([
        'customer_id'=>$txtId,
        'name'=>$txtName,
        'address'=>$txtAddress
      ]);
      return redirect('customer');
    }
    public function show($id){

      //$customer = Customer::where('customer_id', $id);
    //  var_dump($customer);

    //return view('customer.show',['customer' => customer::where('customer_id', $id)]);
    $customer = customer::where('customer_id', $id)->get();
    return view('customer.show', compact('customer'));

    }
    public function edit($id){
      $customer = customer::where('customer_id', $id)->get();
      return view('customer.edit', compact('customer'));
    }
    public function update(Request $request, $id){
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      echo $txtId." <br />".$txtName." <br />".$txtAddress;
      customer::where('customer_id', $id)->update([
        'name'=>$txtName,
        'address'=>$txtAddress
      ]);
      return redirect('customer');
    }
    public function destroy($id){
      $customer = customer::where('customer_id', $id)->first();
      $customer->delete();
      return redirect('/customer');
    }
}
