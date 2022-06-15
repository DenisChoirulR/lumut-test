<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\CategoryRequest;
use Session;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      $akuns = User::all();

      return view('akun/index', compact('akuns'));
  }

  public function create()
  {
      return view('akun/form');
  }

  public function store(Request $request)
  {
      $akun = User::create([
          'id' => substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 100),
          'name' => $request->name,
          'username' => $request->username,
          'password' => Hash::make($request->password),
          'role' => $request->role
      ]);

      Session::flash('success','Successfully created akun data');

      return redirect()->route('akun.index');
  }

  public function edit(Request $request)
  {
      $akun = User::find($request->id);
      return view('akun/form', compact('akun'));
  }

  public function update(CategoryRequest $request, User $akun)
  {
      $akun->update([
        'name' => $request->name,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'role' => $request->role
    ]);

      Session::flash('success','Successfully updated akun data');

      return redirect()->route('akun.index');
  }

  public function delete(Request $request)
  {
      $akun = User::find($request->id);
      $akun->delete();

      return redirect()->route('akun.index');
  }
}
