<?php

namespace App\Http\Controllers;
use App\Models\Nursery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NurseryController extends Controller
{
    public function nursarysigup()
    {
        return view('NursaryLogin');
    }
    public function Sign_Up()
    {
        return view('sign_up_nursery');
    }
    public function sigupInsert(Request $request)
    {
    
    
    
    
    $Nursery=new Nursery;
 
    
  

    $Nursery->name=$request->name;
    $Nursery->loction=$request->loction;
    $Nursery->phone=$request->phone;
    $Nursery->whatappno=$request->whatappno;

    $Nursery->password=$request->password;
    $Nursery->email=$request->email;
    
   
    
   
    
    
    $Nursery->save();
    
    
    
             Session()->flash('data','Data Has Been Deleted Successfully');
         return redirect('loginnursery')->with('success','Data Has Been Submited Successfully');
    
    }
    public function nursery_login(Request $request)
    {
       $email = $request->email;
       $password = $request->password;

       $user= Nursery::where('email',$email)
       ->where('password',$password)
       ->where('status',1)
       ->get(); 
       
       $userData = json_decode($user);
 


       if(empty($userData))
       {


        return redirect('loginnursery')->with('error','fail');

       }

       else
       {
       
 
   $sessionArray = array('email'=>$user[0]->email,'nurid' =>$user[0]->id,'name'=>$user[0]->name,'role'=>'USER');
   //create session

   if(session()->put($sessionArray));
  
   {
  
      return redirect('dashboard')->with('success','Success');
  
   }
       }
    

        //
    }
    public function list_nursery(){


       
        $Nursery = Nursery::orderby('id','desc')->where('status',1)->get();
       
        
          return view('list_nursery')->with('Nursery',$Nursery); 	  

          
     
          
         }
         public function logout()
         {
             Auth::logout();
     
             return redirect('loginnursery');
         }

}
