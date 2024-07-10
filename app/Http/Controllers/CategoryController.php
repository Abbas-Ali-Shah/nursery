<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addcategory(){
        
        return view('AddCategory');
        
        
    }
public function add(Request $request)
{
    
    
    $category = new Category();
    $id = session()->get('id');

    $category->name = $request->name;
    $category->admin_id = $id;
    $category->description = $request->description;

    // Handle multiple images
    $images = [];

    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = "uploads/category/";
            $file->move($path, $filename);
            $images[] = $filename;
        }

        $category->image = implode(',', $images);
    }

    $category->save();
    if ($request->ajax()) {
        // If the request is AJAX, return a JSON response
        return response()->json(['success' => true, 'message' => 'Data inserted successfully']);
    }
    
        session()->flash('success', 'Data Has Been Submitted Successfully');
}
public function list_category(request $request){

    $search = $request['search'] ?? "";
    if($search != "")
    
    {
        $category = Category::where('name', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
    }
    else
    {
        $category=Category::All();

    }

    return view('list_category', compact('category','search'));
   
   }
    
     public function deleteCategory(Request $request, $id)
     {
         $category = Category::find($id);
     
         if (!$category) {
             return response()->json(['success' => false, 'message' => 'Category not found']);
         }
     
         $category->delete();
     
         return response()->json(['success' => true, 'message' => 'Category has been deleted successfully']);
     }
     public function Edit($id, Request $request )
     {
         
         $edit=Category::find($id);
         
       
           return view('edit')->with('edit',$edit);
     
        }
      
}
