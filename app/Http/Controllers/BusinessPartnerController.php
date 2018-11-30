<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessPartner;

class BusinessPartnerController extends Controller
{
    

	public function index(){

		$businesspartners = BusinessPartner::all();
		return view('billings.businesspartner.index', compact('businesspartners'));

	}

	public function create(){

		return view('billings.businesspartner.create');

	}

	public function show(BusinessPartner $business_partner) {

		$business = BusinessPartner::findorfail($business_partner->id);
		return view('billings.businesspartner.show', compact('business'));
	}

	public function store(){

		$attributes = request()->validate([
			'user_id' => 'required',
			'supplier_name' => 'required',
			'supplier_address' => 'required',
			'supplier_bank_account_name' => 'required',
			'supplier_bank_no' => 'required',
			'supplier_bank_branch' => 'required',
		]);

		BusinessPartner::create($attributes);


		return redirect('/business-partner/create')->with('success', 'Successfully Added!');

	}

	public function edit(BusinessPartner $business_partner){

		$business = BusinessPartner::findorfail($business_partner->id);
		return view('billings.businesspartner.edit', compact('business'));

	}



	public function update(BusinessPartner $business_partner){


		$attributes = request()->validate([
			'user_id' => 'required',
			'supplier_name' => 'required',
			'supplier_address' => 'required',
			'supplier_bank_account_name' => 'required',
			'supplier_bank_no' => 'required',
			'supplier_bank_branch' => 'required',
		]);

		$business_partner->update($attributes);

		return back()->with('success', 'Successfully Updated!');

	}



	public function destroy(BusinessPartner $business_partner){

		$business_partner->delete();
		return redirect('/business-partner');

	}




	public function search(Request $request) {

		$businesspartners = BusinessPartner::where('supplier_name', 'LIKE','%'.$request->s.'%' )->paginate();
		return view('billings.businesspartner.index', compact('businesspartners'));

	}



}
