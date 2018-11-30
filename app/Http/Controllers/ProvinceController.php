<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;

class ProvinceController extends Controller
{
    //

	public function index() {

		$provinces = Province::all();
		return view('province.index', compact('provinces'));

	}


	public function create() {

		return view('province.create');

	}

	public function show(Province $province) {

		$province = Province::findorfail($province->id);
		return view('province.show', compact('province'));

	}


	public function store(Province $province) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'prov_code' => 'required',
			'prov_name' => 'required'
		]);


		Province::create($attributes);
		return redirect('/province/create')->with('success', 'Successfully Added!');

	}


	public function edit(Province $province) {

		$province = Province::findorfail($province->id);
		return view('province.edit', compact('province'));

	}

	public function update(Province $province, Request $request) {
		

		$attributes = request()->validate([
			'user_id' => 'required',
			'prov_code' => 'required',
			'prov_name' => 'required'
		]);

		$province->update([
			'user_id' => $request->user_id,
            'prov_code' => $request->prov_code,
            'prov_name' => $request->prov_name
        ]);

		return back()->with('success', 'Successfully Updated!');

	}




	public function destroy(Province $province) {

		$province->delete();
		return redirect('/province');

	}

}
