<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //buat fungsi Index
    function index(){
    //  echo "asaoy geboyu";
    $employee = employee::get(['employee_id','employee_name','employee_address','employee_phone_number']);
    //var_dump($customer);
    return view('employee.index', compact('employee'));
    }
    function create(){
    //  echo "telo";
    return view('employee.create');
    }
    public function store(Request $request){
      //echo 'coba';
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      $txtPhoneNumber = $request->input('txt_phone');
      echo $txtId." <br />".$txtName." <br />".$txtAddress." <br />".$txtPhoneNumber;
      employee::create([
        'employee_id'=>$txtId,
        'employee_name'=>$txtName,
        'employee_address'=>$txtAddress,
        'employee_phone_number'=>$txtPhoneNumber
      ]);
      return redirect('employee');
    }
    public function show($id){

      //$customer = Customer::where('customer_id', $id);
    //  var_dump($customer);

    //return view('customer.show',['customer' => customer::where('customer_id', $id)]);
    $employee = employee::where('employee_id', $id)->get();
    return view('employee.show', compact('employee'));

    }
    public function edit($id){
      $employee = employee::where('employee_id', $id)->get();
      return view('employee.edit', compact('employee'));
    }
    public function update(Request $request, $id){
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      $txtPhoneNumber = $request->input('txt_phone');
      echo $txtId." <br />".$txtName." <br />".$txtAddress." <br />".$txtPhoneNumber;
      employee::where('employee_id', $id)->update([
        'employee_name'=>$txtName,
        'employee_address'=>$txtAddress,
        'employee_phone_number'=>$txtPhoneNumber
      ]);
      return redirect('employee');
    }
    public function destroy($id){
      $employee = employee::where('employee_id', $id)->first();
      $employee->delete();
      return redirect('/employee');
    }
}
