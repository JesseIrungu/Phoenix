<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Enquiries;
use Session;
use Hash;
use Validator;
use Auth;
use DB;

class ClientsController extends Controller
{
    public function userLogin(){
        return view("userlogin");
    }

    public function registration(){
        return view("registration");
    }

    public function services(){
        return view("services");
    }

    public function phoenixtech(){
        return view("phoenixtech");
    }

    public function registerClient(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4|max:10',
        ]);
    
    $clients = new clients();

    $clients ->name = $request -> name;
    $clients ->email = $request ->email;
    $clients ->password = Hash::make($request ->password);

    $res = $clients ->save();
    if($res){
        return back()->with('success','Registered Successfully');
    }
    else{
        return back()->with('fail','Something was wrong');
    }

    }

    public function loginClient(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:10',
        ]);
        $clients = Clients::where('email','=',$request->email) ->first();
        if($clients){
            if(Hash::check($request->password,$clients->password)){
                $request->session()->put('loginId', $clients->id);
                return redirect('phoenixtech');
            }
            else{
                return back()->with('fail','Wrong Password !!');
            }
        }else{
            return back()->with('fail','This email is not registered');
        }
    }

    public function enquiries(){
        return view("request");
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'enquiry'=>'required',
        ]);
    
    $enquiries = new enquiries();

    $enquiries -> name = $request -> name;
    $enquiries -> email = $request -> email;
    $enquiries -> phone = $request -> phone;
    $enquiries -> enquiry = $request -> enquiry;

    $res = $enquiries ->save();
    if($res){
        return back()->with('success','Request Received Successfully');
    }
    else{
        return back()->with('fail','Something was wrong');
    }

    }

    public function showMessages()
    {
        $enquiries = DB::table('enquiries') ->get();
        return view ('messages', compact ('enquiries'));
    }

    public function logout(){
        if (Session::get('loginId')) {
            Session::pull('loginId');
            return redirect('homepage');
        }
    }
    

}
