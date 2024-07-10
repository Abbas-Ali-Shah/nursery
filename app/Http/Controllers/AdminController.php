<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Nursery;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function admin_dashboard()
    {
        return view('dashboard');

    }
    public function sigup(Request $request)
    {
    
    
    
    
    $Admin=new Admin;
 
    
  

    $Admin->name=$request->name;
    $Admin->email=$request->email;
    $Admin->password=$request->password;
 
    
   
    
   
    
    
    $Admin->save();
    
    
    
             Session()->flash('data','Data Has Been Deleted Successfully');
         return redirect('Login')->with('success','Data Has Been Submited Successfully');
    
    }
      public function make_login(Request $request)
    {
       $email = $request->email;
       $password = $request->password;

       $user= Admin::where('email',$email)->where('password',$password)->get(); 
       
       $userData = json_decode($user);
 


       if(empty($userData))
       {


        return redirect('/')->with('error','fail');

       }

       else
       {
       
 
   $sessionArray = array('email'=>$user[0]->email,'id' =>$user[0]->id,'name'=>$user[0]->name,'role'=>'ADMIN');
   //create session
   if(session()->put($sessionArray));
  
   {
    
      return redirect('dashboard')->with('success','Success');
  
   }
       }
    

        //
    }
    public function nurseryInsert(Request $request)
    {
    
     
    
    $Nursery=new Nursery;
 
    
   $idadmin =  session()->get('id');

    $Nursery->name=$request->name;
    $Nursery->loction=$request->loction;
    $Nursery->admin_id =  $idadmin;
    $Nursery->phone=$request->phone;
    $Nursery->whatappno=$request->whatappno;

    $Nursery->password=$request->password;
    $Nursery->email=$request->email;
    
   
    
   
    
    
    $Nursery->save();
    if ($request->ajax()) {
        // If the request is AJAX, return a JSON response
        return response()->json(['success' => true, 'message' => 'Data inserted successfully']);
    }

    // If it's a regular form submission, redirect as before
    
    
             Session()->flash('data','Data Has Been Deleted Successfully');
         return redirect('add_nursery')->with('success','Data Has Been Submited Successfully');
    
    }
    public function addnursery()
    {
     
        return view('add_nursery');
    }
   
    public function list_admin(){

        $Nursery = Nursery::select('nurseries.*')
        ->leftjoin('admins', 'admins.id', 'nurseries.admin_id')
        ->get();
      
          return view('admin_listnursery')->with('Nursery',$Nursery); 	  
         }
         public function status($id)
         {
             $status = Nursery::select('status')->where('id', $id)->first();
             if($status->status == 1)
             {
                 $status = 0;
             }
             else
             {
                 $status = 1;
             }
             Nursery::where('id', $id)->update(['status'=>$status]);
             return redirect()->back();
         }


         public function deleteNursery(Request $request, $id)
         {
             $nursery = Nursery::find($id);
         
             if (!$nursery) {
                 return response()->json(['success' => false, 'message' => 'Nursery not found']);
             }
         
             $nursery->delete();
         
             return response()->json(['success' => true, 'message' => 'Nursery has been deleted successfully']);
         }
               public function logout()
               {
                   Auth::logout();
           
                   return redirect('/');
               }
}
