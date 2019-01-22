<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    function index(){
      $supplier = supplier::get(['supplier_id','supplier_name','supplier_address']);
      //var_dump($supplier);
      return view('supplier.index', compact('supplier'));
    }
    function andre(){
      return "bebek goreng by pujangga";
    }
    function siti(){
      return view ('mamamlia/kucing');
    }
    function create(){
    //  echo "telo";
    return view('supplier.create');
    }
    public function store(Request $request){
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      echo $txtId." <br />".$txtName." <br />".$txtAddress;
      supplier::create([
        'supplier_id'=>$txtId,
        'supplier_name'=>$txtName,
        'supplier_address'=>$txtAddress
      ]);
      return redirect('supplier');

    }

}
