<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function editar(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required'
        ]);
        $category = Category::find($request->id);
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function eliminar(Request $request){
        $category = Category::find($request->id);
        $category->delete();
        return redirect()->route('categories.index');
    }

    // public function update(Category $category, Request $request){
    //     $request->validate([
    //         'name' => 'required'
    //     ]);
    //     $category->update($request->all());
    //     return redirect()->route('categories.index');
    // }

    // public function destroy(Category $category){
    //     $category->delete();
    //     return redirect()->route('categories.index');
    // }
}
