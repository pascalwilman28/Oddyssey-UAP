<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ManageCategoryController extends Controller
{
    public function index(){
        $categoryList = Categories::orderBy('id','desc')->paginate(5);
        return view('admin.managecategory', ["Categories"=>$categoryList]);
    }

    public function addCategory(){
        return view('admin.addcategory');
    }

    public function updateCategory($id){
        $categoryfind = Categories::find(decrypt($id));
        return view('admin.updatecategory', ["Category"=>$categoryfind]);
    }

    public function deleteCategoryProcess($id){
        Categories::find(decrypt($id))->delete();
        return redirect('/admin/managecategory')->with('message', 'Delete Category Success');
    }

    public function addCategoryProcess(Request $request){
        $request->validate([
            //unique:table,coloumn
            'categoryName' => 'required|unique:categories,categoryName',
        ]);

        Categories::create([
            'categoryName' => $request->input('categoryName'),
        ])->save();

        return redirect('/admin/managecategory')->with('message', 'Add Category Success');
    }

    public function updateCategoryProcess(Request $request){
        $request->validate([
            //unique:table,coloumn
            'categoryName' => 'required|unique:categories,categoryName',
        ]);

        Categories::where('id','=',$request->categoryId)
            ->update([
                'categoryName' => $request->categoryName,
            ]);

        return redirect('/admin/managecategory')->with('message', 'Update Category Success');
    }
}
