<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Measurement;

class MeasurementController extends Controller
{
    //
	public function index() {

		$measurements = Measurement::all();
		return view('measurement.index', compact('measurements'));

	}


	public function create() {

		return view('measurement.create');

	}

	public function show(Measurement $measurement) {

		$measurement = Measurement::findorfail($measurement->id);
		return view('measurement.show', compact('measurement'));

	}


	public function edit(Measurement $measurement) {

		$measurement = Measurement::findorfail($measurement->id);
		return view('measurement.edit', compact('measurement'));

	}



	public function store(Measurement $measurement) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'uom_code' => 'required',
			'uom_acroname' => 'required',
			'uom_description' => 'required'
		]);

		Measurement::create($attributes);

		return redirect('/measurement/create')->with('success', 'Successfully Added!');

	}

	

	public function update(Measurement $measurement, Request $request) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'uom_code' => 'required',
			'uom_acroname' => 'required',
			'uom_description' => 'required'
		]);

		$measurement->update($attributes);

		return back()->with('success', 'Successfully Updated!');

	}


	public function destroy(Measurement $measurement) {

		$measurement->delete();
		return redirect('/measurement');

	}



}

