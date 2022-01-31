<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;


class ContentsController extends Controller
{
    public function index()
    {
        $Content = Content::all();
        return view('admin.contents.index',compact('Content'));
    }
    public function addcontents()
    {
        return view('admin.contents.add');
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
        $Content = new Content();
        $Content->name = $request->name;
        $Content->Detail = $request->Detail;
        $Content->id_users = Auth::user()->id;

        if ($request->hasFile('image')) {
            $filemane =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filemane);
            Image::make(public_path() . '/admin/img/' . $filemane);
            $Content->image = $filemane;
        } else {
            $Content->image = 'nopic.png';
        }
        $Content->save();
        return redirect()->route('contents.index')->with('success', 'บันทึกข้อมูลเรียนร้อยแล้ว');
    }
    public function edit($id)
    {
        $editcontents = Content::find($id);
        return view('admin.contents.edit', compact('editcontents'));
    }
    public function update(Request $request, $id_content)
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
            $Content = Content::find($id_content);
            if ($Content->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/img/' . $Content->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $Content->image = $filename;
            $Content->name = $request->name;
            $Content->Detail = $request->Detail;
            $Content->id_users = Auth::user()->id;
        } else {
            $Content = Content::find($id_content);
            $Content->name = $request->name;
            $Content->Detail = $request->Detail;
            $Content->id_users = Auth::user()->id;
        }

        $Content->save();
        return redirect()->route('contents.index')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }
    public function delete($id)
    {
        $delete = Content::find($id);
        if ($delete->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/img/' . $delete->image);
        }
        $delete->delete();
        return redirect()->route('contents.index')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
}
