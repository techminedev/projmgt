<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangay;
use App\Municipality;

class BarangayController extends Controller
{
    

	public function index() {

		$barangays = Barangay::all();
		return view('barangay.index', compact('barangays'));

	}


	public function create() {

		$municipalities = Municipality::all();
		return view('barangay.create', compact('municipalities'));

	}

	public function show(Barangay $barangay) {

		$barangay = Barangay::findorfail($barangay->id);
		return view('barangay.show', compact('barangay'));

	}


	public function store(Barangay $barangay, Request $request) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'brgy_code' => 'required',
			'brgy_name' => 'required',
			'municipality_id' => 'numeric'
		]);


		Barangay::create([
			'user_id' => $request->user_id,
			'brgy_code' => $request->brgy_code,
			'brgy_name' => $request->brgy_name,
			'municipality_id' => $request->municipality_id
		]);

		return redirect('/barangay/create')->with('success', 'Successfully Added!');

	}


	public function edit(Barangay $barangay) {

		$municipalities = Municipality::all();
		$barangay = Barangay::findorfail($barangay->id);
		return view('barangay.edit', compact('barangay', 'municipalities'));

	}

	public function update(Barangay $barangay, Request $request) {
		

		$attributes = request()->validate([
			'user_id' => 'required',
			'brgy_code' => 'required',
			'brgy_name' => 'required',
			'municipality_id' => 'numeric'
		]);

		$barangay->update([
			'user_id' => $request->user_id,
			'brgy_code' => $request->brgy_code,
			'brgy_name' => $request->brgy_name,
			'municipality_id' => $request->municipality_id
		]);

		return back()->with('success', 'Successfully Updated!');

	}


	public function destroy(Barangay $barangay) {

		$barangay->delete();
		return redirect('/barangay');

	}

}
