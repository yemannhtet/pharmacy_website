<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Admin\CategoryController;

class CategoryController extends Controller
{
    //direct category page
    public function list()
    {
        $data = Category::paginate(3);
        return view('admin.category', compact('data'));
    }


    // create function
    public function create(Request $request){

        $validator = $request->validate([
            'category' => 'required | unique:categories,name'
        ],[
            'category.required' => 'Category Field ကိုဖြည့်စွက်ရန် လိုအပ်ပါသည်။',
            'category.unique' =>'name အမျိုးအစား ကို အသုံးပြုပြီး ဖြစ်သည်။'
        ]);

        category::create([
            'name' =>$request->category
        ]);
        Alert::success('Create Success', 'Create Category Successfully');
        return back();
}
// delete category
        public function delete($id){
            Category::where('id',$id)->delete();
            Alert::success('Delete Success', 'Delete Category Successfully');
            return back();

        }
            //edit category
    public function edit($id){
        $data = Category:: where('id' , $id)->first();
        return view('admin.category.edit' ,compact('data'));
    }

     //update category
     public function update(Request $request){

        $validator = $request->validate([
            'category' => 'required | unique:categories,name,'.$request->id
        ],[
            'category.required' => 'Category Field ကိုဖြည့်စွက်ရန် လိုအပ်ပါသည်။',
            'category.unique' =>'name အမျိုးအစား ကို အသုံးပြုပြီး ဖြစ်သည်။'
        ] );
        Category::where('id' , $request->categoryId)->update([
            'name' => $request->category
        ]);
        Alert::success('Update Success', 'Update Category Successfully');
        return to_route('categoryList');
    }
}
