<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function addcatrgory()
    {
        return view('admin.category.add');
    }
    public function create(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:categories|max:255',
            ],
            [
                'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
                'name.unique' => 'มีชื่อประเภทนี้อยู่ในฐานข้อมูลแล้ว',
                'name.max' => 'กรอกข้อมูลได้สูงสุด 255 อักษร',
            ]
        );
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category')->with('success', 'บันทึกข้อมูลเรียนร้อยแล้ว');
    }
    public function edit($category_id)
    {
        $category = Category::find($category_id);
        //dd($category);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $category_id)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:categories|max:255',
            ],
            [
                'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
                'name.unique' => 'มีชื่อประเภทนี้อยู่ในฐานข้อมูลแล้ว',
                'name.max' => 'กรอกข้อมูลได้สูงสุด 255 อักษร',
            ]
        );
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/index')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }
    public function delete($category_id)
    {
        Category::destroy($category_id);
        return redirect('admin/category/index')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
}
