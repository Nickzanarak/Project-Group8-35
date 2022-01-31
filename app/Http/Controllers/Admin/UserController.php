<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $validateDate = $request->validate(
            [
                'name' => 'required|unique:categories|max:255',
            ],
            [
                'name' => 'required',
                'phone' => 'required',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อ',
                'phone.required' => 'กรุณาป้อนเบอร์โทรศัพท์',
                
            ]
        );
        $users = User::find($id);
        $users->name = $request->name;
        $users->phone = $request->phone;
        $users->update();
        return redirect()->route('user.index')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index')->with('delete', 'บันทึกข้อมูลเรียนร้อยแล้ว');
    }
}
