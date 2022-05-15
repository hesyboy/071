<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        if($request->search){
            $users=User::sortable()->where('phone','like','%'.$request->search.'%')
            ->orWhere('name','like','%'.$request->search.'%')
            ->orWhere('last_name','like','%'.$request->search.'%')
            ->paginate(10);
        }
        else{
            $users=User::sortable()->paginate(10);
        }

        return view('admin.users.index',compact('users'));
    }


    public function create(){
        return view('admin.users.create');
    }

    public function edit(User $user){
        return view('admin.users.edit',compact('user'));
    }

    public function store(Request $request){
        $validated=$request->validate([
            'name' => ['max:15'],
            'last_name' => ['max:20'],
            'address' => ['max:80'],
            'phone' => ['required','unique:users,phone','numeric','digits:11',''],
            'email' => ['nullable','unique:users,email','email'],
            'password' => ['required','min:8','confirmed'],
            'password_confirmation' => ['required','same:password']
        ]);
        $user=User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'state_id' => $request->state_id,
            'address' => $request->address,
            'is_admin' => $request->is_admin,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admin.users.index')->with('msg','کاربر جدید با موفقیت ساخته شد');
    }

    public function update(User $user,Request $request){
        $validated=$request->validate([
            'name' => ['max:15'],
            'last_name' => ['max:20'],
            'address' => ['max:80'],
            'phone' => ['required','unique:users,phone,'.$user->id,'numeric','digits:11',''],
            'email' => ['nullable','unique:users,email,'.$user->id,'email'],
            'password' => ['confirmed'],
            'password_confirmation' => ['same:password']
        ]);

        if($request->password){
            $user->update([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'state_id' => $request->state_id,
                'address' => $request->address,
                'is_admin' => $request->is_admin,
                'status' => $request->status,
                'password' => Hash::make($request->password),
            ]);
        }
        else{
            $user->update([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'state_id' => $request->state_id,
                'address' => $request->address,
                'is_admin' => $request->is_admin,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('admin.users.index')->with('msg','تغییرات کاربر با موفقیت انجام شد');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('admin.users.index')->with('msg','کاربر مورد نظر با موفقیت حذف شد');
    }
}
