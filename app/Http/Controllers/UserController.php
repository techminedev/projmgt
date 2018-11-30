<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;


class UserController extends Controller
{
    //

	public function index(){
		$users = User::all();
		return view('user.index', compact('users'));
	}

	public function create(){
		return view('user.create');
	}

	public function show(User $user) {

			$user = User::findorfail($user->id);
			return view('user.show', compact('user'));

	}
	
	public function update(User $user) {

		$attributes = request()->validate([
			'name' => 'required',
			'email' => 'required',
			'password' => 'required',
			'supplier_bank_no' => 'required',
			'supplier_bank_branch' => 'required',
		]);

		$user->update($attributes);

		return redirect('/users/register');

	}

	public function search(Request $request) {

		
		$users = User::where('name', 'LIKE','%'.$request->s.'%' )->paginate();
		return view('user.search', compact('users'));

	}




}
