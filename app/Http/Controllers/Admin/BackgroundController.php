<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\background;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;


class BackgroundController extends Controller
{
    public function index()
    {
        $background = background::all();
        return view('admin.background.index', compact('background'));
    }
    public function addbackground()
    {
        $addbackground = background::all();
        return view('admin.background.add');
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
        // dd($request);
        $background = new background();
        $background->name = $request->name;
        $background->Detail = $request->Detail;
        $background->id_users = Auth::user()->id;

        if ($request->hasFile('image')) {
            $filemane =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filemane);
            Image::make(public_path() . '/admin/img/' . $filemane);
            $background->image = $filemane;
        } else {
            $background->image = 'nopic.png';
        }
        $background->save();
        return redirect()->route('background.index')->with('success', 'บันทึกข้อมูลเรียนร้อยแล้ว');
    }
    public function edit($id)
    {
        $editbackground = background::find($id);
        return view('admin.background.edit', compact('editbackground'));
    }
    public function update(Request $request, $id_background)
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
            $background = background::find($id_background);
            if ($background->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/img/' . $background->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $background->image = $filename;
            $background->name = $request->name;
            $background->Detail = $request->Detail;
            $background->id_users = Auth::user()->id;
        } else {
            $background = background::find($id_background);
            $background->name = $request->name;
            $background->Detail = $request->Detail;
            $background->id_users = Auth::user()->id;
        }

        $background->save();
        return redirect()->route('background.index')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }
}
