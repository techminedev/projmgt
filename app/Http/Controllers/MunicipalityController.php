<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipality;
use App\Province;

class MunicipalityController extends Controller
{
    //

	public function index() {

		$municipalities = Municipality::all();
		return view('municipality.index', compact('municipalities'));

	}


	public function create() {

		$provinces = Province::all();
		return view('municipality.create', compact('provinces'));

	}

	public function show(Municipality $municipality) {

		$municipality = Municipality::findorfail($municipality->id);
		return view('municipality.show', compact('municipality'));

	}


	public function store(Municipality $municipality, Request $request) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'mun_code' => 'required',
			'mun_name' => 'required',
			'province_id' => 'numeric'
		]);


		Municipality::create([
			'user_id' => $request->user_id,
			'mun_code' => $request->mun_code,
			'mun_name' => $request->mun_name,
			'province_id' => $request->province_id
		]);

		return redirect('/municipality/create')->with('success', 'Successfully Added!');

	}


	public function edit(Municipality $municipality) {

		$provinces = Province::all();
		$municipality = Municipality::findorfail($municipality->id);
		return view('municipality.edit', compact('municipality', 'provinces'));

	}

	public function update(Municipality $municipality, Request $request) {
		

		$attributes = request()->validate([
			'user_id' => 'required',
			'mun_code' => 'required',
			'mun_name' => 'required',
			'province_id' => 'numeric'
		]);


		$municipality->update([
			'user_id' => $request->user_id,
			'mun_code' => $request->mun_code,
			'mun_name' => $request->mun_name,
			'province_id' => $request->province_id
		]);

		return back()->with('success', 'Successfully Updated!');

	}


	public function destroy(Municipality $municipality) {

		$municipality->delete();
		return redirect('/municipality');

	}

}
