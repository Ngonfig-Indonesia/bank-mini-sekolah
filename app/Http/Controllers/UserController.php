<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin/user/index', compact('data'));
    }
    public function create(Request $request)
    {
        // $rules = [
        //     'name'                  => 'required|min:5|max:30',
        //     'email'                 => 'required|email|unique:users,email',
        //     'password'              => 'required|confirmed'
        // ];
        // $messages = [
        //     'name.required'         => 'Nama Lengkap wajib',
        //     'name.min'              => 'Nama lengkap minimal 5 karakter',
        //     'name.max'              => 'Nama lengkap maksimal 30 karakter',
        //     'email.required'        => 'Email wajib diisi',
        //     'email.email'           => 'Email tidak valid',
        //     'email.unique'          => 'Email sudah terdaftar',
        //     'password.required'     => 'Password wajib diisi',
        //     'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        //     ];
        //     $validator = Validator::make($request->all(), $rules, $messages);
        //     if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($request->all);
        //     }
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->email_verified_at = \Carbon\Carbon::now();
            $user->role = $request->role;
            $simpan = $user->save();

            if($simpan){
                return back()->with('success', 'Tambah User Berhasil');
            } else {
                return back()->with('error', 'Tambah User Tidak Berhasil, Silahkan Coba Lagi');
            }
    }
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user, 200);
    }
    public function update(Request $request)
    {
            $user = User::where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            if($user){
                return back()->with('success', 'Update User Berhasil');
            } else {
                return back()->with('error', 'Update User Tidak Berhasil, Silahkan Coba Lagi');
            }
    }
    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        if($delete){
            return back()->with('success', 'Delete User Berhasil');
        } else {
            return back()->with('error', 'Delete User Tidak Berhasil, Silahkan Coba Lagi');
        }
    }
}
