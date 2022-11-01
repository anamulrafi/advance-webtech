<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Validator;
//use Illuminate\Support\Facades\Validator;

use Session;

class CustomerController extends Controller
{
    //Home page
public function home(){
    return view('customer.Home');  
}
///Gallery
public function gallery(){
    return view('customer.gallery'); 

}
}