<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Promotion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;
use App\Category;

class PromotionController extends Controller
{
    public function index()
    {
        $Promotion = Promotion::all();
        return view('admin.promotion.index', compact('Promotion'));
    }
    public function addpromotion()
    {
        $addPromotion = Promotion::all();
        return view('admin.promotion.add', compact('addPromotion'));
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
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อโปรโมชั่น',
                'Detail.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'category_id.required' => 'กรุณาป้อนประเภทสินค้า',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        // dd($request);
        $Promotion = new Promotion();
        $Promotion->name = $request->name;
        $Promotion->Detail = $request->Detail;
        $Promotion->id_users = Auth::user()->id;

        if ($request->hasFile('image')) {
            $filemane =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filemane);
            Image::make(public_path() . '/admin/img/' . $filemane);
            $Promotion->image = $filemane;
        } else {
            $Promotion->image = 'nopic.png';
        }
        $Promotion->save();
        return redirect()->route('promotion.index')->with('success', 'บันทึกข้อมูลเรียนร้อยแล้ว');
    }
    public function edit($id)
    {
        $editpromotion = Promotion::find($id);
        return view('admin.promotion.edit', compact('editpromotion'));
    }
    public function update(Request $request, $Promotion_id)
    {
        $validateDate = $request->validate(
            [
                'name' => 'required',
                'Detail' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อโปรโมชั่น',
                'Detail.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        if ($request->hasFile('image')) {
            $Promotion = Promotion::find($Promotion_id);
            if ($Promotion->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/img/' . $Promotion->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $Promotion->image = $filename;
            $Promotion->name = $request->name;
            $Promotion->Detail = $request->Detail;
            $Promotion->id_users = Auth::user()->id;
        } else {
            $Promotion = Promotion::find($Promotion_id);
            $Promotion->name = $request->name;
            $Promotion->Detail = $request->Detail;
            $Promotion->id_users = Auth::user()->id;
        }

        $Promotion->save();
        return redirect()->route('promotion.index')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }
    public function delete($id)
    {
        $delete = Promotion::find($id);
        if ($delete->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/img/' . $delete->image);
        }
        $delete->delete();
        return redirect()->route('promotion.index')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
}
