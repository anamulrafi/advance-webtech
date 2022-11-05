<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use App\Models\Bookedroom;

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
///-----------------------------------Sign up-------------------------------------- 
public function addCustomer(){
    return view('customer.addcustomer');
}

public function addCustomerSubmit(Request $req){

    $this->validate($req,
        [
            'name' => 'required',
            'userName' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'nidNo' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'age' => 'required'
        ],
        [
            'name.required' => 'Please provide your name',
            'userName.required' => 'Please provide your user name',
            'password.required' => 'Please enter password',
            'confirm_passworde.required' => 'Password did not match!',
            'email.required' => 'Please provide your email',
            'phoneNumber.required' => 'Please provide your contact number',
            'nidNo.required' => 'Please provide your nid number',
            'address.required' => 'Please provide your address',
            'gender.required' => 'Please provide your gender',
            'age.required' => 'Please provide your age'
        ]
    );

    $filename= $req->name.'.'.$req->file('image')->getClientOriginalExtension();
    $req->file('image')->storeAs('/public/image/',$filename);

    $customer = new Customer();
    $customer->name = $req->name;
    $customer->userName = $req->userName;
    $customer->password = md5($req->password);
    $customer->email = $req->email;
    $customer->phoneNumber = $req->phoneNumber;
    $customer->nidNO = $req->nidNo;
    $customer->address = $req->address;
    $customer->gender = $req->gender;
    $customer->age = $req->age;
    $customer->image = "storage/images/".$filename;
    $customer->save();

    return redirect()->route('customer.login.submit');
}


//------------------------------------Login---------------------------------
public function login(){
    return view('customer.login');
}

public function loginsubmit(Request $req){
    $this->validate($req,
        [
            'name'=>'required|regex:/^[A-Z a-z]+$/',
            'password'=>'required|min:4',
        ],
        [
            'name.required'=>'Please provide name',
            'password.required'=>'Please provide password',
            'password.min'=>'Atleast 4 characters required'
        ]
    );
    $customer = Customer::where('name', $req->name)->where('password', md5($req->password))->first();
    

    //return $customer;
    if($customer){
        session()->put('logged_name', $customer->name);
        session()->put('logged_password', $customer->password);
        return redirect()->route('customer.panel');
    }

    return redirect()->route('customer.login.submit'); 

}

///Profile
public function customerProfile(){
    $name =  Session::get('logged_name');
    $password = Session::get('logged_password');
    $customer = Customer::where('name', $name)->where('password', $password)->first();
    //return $customer;
    return view('customer.profile')->with('customer', $customer);
}

public function customerPanel(){
    return view('customer.customerpanel');
}

public function cusotmerLogout(){
    session::flush();
    return redirect()->route('customer.login.submit');
}
}