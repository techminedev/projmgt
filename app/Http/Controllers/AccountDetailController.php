<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountDetail;

class AccountDetailController extends Controller
{
    
	public function index(){

		$accounts = AccountDetail::all();
		return view('account.index', compact('accounts'));

	}

	public function create() {

		return view('account.create');

	}

	public function store() {

		$attributes = request()->validate([
			'user_id' => 'required',
			'acc_code' => 'required',
			'acc_title' => 'required',
			'acc_description' => 'required'
		]);

		AccountDetail::create($attributes);
		return redirect('/account/create')->with('success', 'Successfully Added!');

	}

	public function show(AccountDetail $account) {

		$account = AccountDetail::findorfail($account->id);
		return view('account.show', compact('account'));

	}

	public function edit(AccountDetail $account) {

		$account = AccountDetail::findorfail($account->id);
		return view('account.edit', compact('account'));

	}

	public function update(AccountDetail $account) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'acc_code' => 'required',
			'acc_title' => 'required',
			'acc_description' => 'required'
		]);

		$account->update($attributes);
		return back()->with('success', 'Successfully Updated!');
	}

	public function destroy(AccountDetail $account) {

		$account->delete();
		return redirect('/account');

	}


}
