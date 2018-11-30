<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialDetail;
use App\Measurement;

class MaterialDetailController extends Controller
{
    
	public function index() {

		$details = MaterialDetail::all();
		return view('material.index', compact('details'));

	}


	public function create() {

		$measurements = Measurement::all();
		return view('material.create', compact('measurements'));

	}

	public function store(Request $request) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'mat_code' => 'required',
			'mat_name' => 'required',
			'mat_category' => 'required',
			'mat_price' => 'required|numeric'
		]);

		MaterialDetail::create([
			'user_id' => $request->user_id,
            'mat_code' => $request->mat_code,
            'measurement_id' => $request->measurement_id,
            'mat_name' => $request->mat_name,
            'mat_category' => $request->mat_category,
            'mat_price' => $request->mat_price,
        ]);

        return redirect('/material-detail/create')->with('success', 'Successfully Added!');


	}

	public function show(MaterialDetail $material) {

		$material = MaterialDetail::findorfail($material->id);
		return view('material.show', compact('material'));

	}


	public function edit(MaterialDetail $material) {

		$measurements = Measurement::all();
		$material = MaterialDetail::findorfail($material->id);
		return view('material.edit', compact('material','measurements'));

	}

	public function update(MaterialDetail $material, Request $request) {

		$attributes = request()->validate([
			'user_id' => 'required',
			'mat_code' => 'required',
			'mat_name' => 'required',
			'mat_category' => 'required',
			'mat_price' => 'required|numeric'
		]);

		$material->update([
			'user_id' => $request->user_id,
            'mat_code' => $request->mat_code,
            'measurement_id' => $request->measurement_id,
            'mat_name' => $request->mat_name,
            'mat_category' => $request->mat_category,
            'mat_price' => $request->mat_price,
        ]);

		return back()->with('success', 'Successfully Updated!');

	}

	public function destroy (MaterialDetail $material) {


		$material->delete();
		return redirect('/material-detail');

	}

}
