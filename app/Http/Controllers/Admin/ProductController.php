<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
use Auth;

class ProductController extends Controller
{
    public function showproduct()
    {
        $product = Product::all();
        return view('admin.product.productform', compact('product'));
    }

    public function addproduct()
    {
        $addproduct = Product::all();
        return view('admin.product.add',compact('addproduct'))->with('categories',Category::all());
    }
    public function create(Request $request)
    {
        $validateDate = $request->validate(
            [
                'name' => 'required|unique:categories|max:255',
            ],
            [
                'name' => 'required',
                'Detail' => 'required',
                'category_id' => 'required',
                'Price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'Detail.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'category_id.required' => 'กรุณาป้อนประเภทสินค้า',
                'Price.required' => 'กรุณาป้อนราคาสินค้า',
                'Price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        // dd($request);
        $product = new Product();
        $product->name = $request->name;
        $product->Price = $request->Price;
        $product->Detail = $request->Detail;
        $product->category_id = $request->category_id;
        $product->id_users = Auth::user()->id;

        if($request->hasFile('image')){
            $filemane =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filemane);
            Image::make(public_path().'/admin/img/'.$filemane);
            $product->image = $filemane;
        }else{
            $product->image = 'nopic.png';
        }
        $product->save();
        return redirect()->route('productform')->with('success', 'บันทึกข้อมูลเรียนร้อยแล้ว');
    }
    public function edit($id)
    {
        $editproduct = Product::find($id);
        return view('admin.product.edit',compact('editproduct'))->with('categories',Category::all());
    }
    public function update(Request $request, $id_product)
    {
        $validateDate = $request->validate(
            [
                'name' => 'required',
                'Detail' => 'required',
                'category_id' => 'required',
                'Price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'Detail.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'category_id.required' => 'กรุณาป้อนประเภทสินค้า',
                'Price.required' => 'กรุณาป้อนราคาสินค้า',
                'Price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        if ($request->hasFile('image')) {
            $product = Product::find($id_product);
            if ($product->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/img/' . $product->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $product->image = $filename;
            $product->name = $request->name;
            $product->Price = $request->Price;
            $product->Detail = $request->Detail;
            $product->category_id = $request->category_id;
            $product->id_users = Auth::user()->id;
        } else {
            $product = Product::find($id_product);
            $product->name = $request->name;
            $product->Price = $request->Price;
            $product->Detail = $request->Detail;
            $product->category_id = $request->category_id;
            $product->id_users = Auth::user()->id;
        }

        $product->save();
        return redirect()->route('productform')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }

    public function delete($id)
    {
        $delete = Product::find($id);
        if ($delete->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/img/' . $delete->image);
        }
        $delete->delete();
        return redirect('/admin/product/productform')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
}
