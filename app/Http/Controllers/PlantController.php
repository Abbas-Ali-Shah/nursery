<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function addplant(){
        $plants=Category::all();
   
        return view('AddPlants')->with('plants',$plants);
    }
    public function Insertplant(Request $request)
    {
        
        $Plant = new Plant();
        $idnurseries =  session('nurid');

        $Plant->name = $request->name;
        $Plant->nur_id = $idnurseries;
       
        $Plant->family = $request->family;
        
        $Plant->price = $request->price;
        $Plant->quantity_in_stock = $request->quantity_in_stock;
        $Plant->cat_id = (int)$request->cat_id;
         
    //////multiple images//////
    $images = array();
    if($files = $request->file('image'))
    {
     foreach($files as $file){
        $filename = time().'.'.$file->getClientOriginalName();
        $path = "uploads/category/";
        $file->move($path,$filename);
        $images[] = $filename;
     }

     $Plant->image = implode(',', $images); 
       
    }
    
        $Plant->save();
          if ($request->ajax()) {
        // If the request is AJAX, return a JSON response
        return response()->json(['success' => true, 'message' => 'Data inserted successfully']);
    }
    
        session()->flash('success', 'Data Has Been Submitted Successfully');
        
    }
    public function list_plant(){


        $plant = Plant::join('categories', 'plants.cat_id', '=', 'categories.id')
        ->join('nurseries', 'plants.nur_id', '=', 'nurseries.id')
        ->select('plants.*', 'categories.name as category_name', 'nurseries.name as nursery_name')
        ->get();
    
        
        
          return view('list_plant')->with('plant',$plant); 	  

          
     
          
         }
         public function deleteplants($id){

            $plant =Plant::find($id);
            
            
            $plant->deleted_at = 1;
            $plant->update();
            
            return redirect('list_plant')->with('success','Data Has Been deleted Successfully');
            
               }
    
}
