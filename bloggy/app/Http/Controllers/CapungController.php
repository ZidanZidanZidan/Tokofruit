<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapungController extends Controller
{
    function index(){
      echo "ini dari controler";
    }
    function pujangga(){
      return "bebek goreng by pujangga";
    }
    function siti(){
      return view ('mamamlia/kucing');
    }
}
