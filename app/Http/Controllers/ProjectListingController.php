<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectListing;

class ProjectListingController extends Controller
{
    

	public function index(){

		$projects = ProjectListing::paginate(20);
		return view('billings.project.index', compact('projects'));

	}

	public function create(){

		return view('billings.project.create');

	}

	public function store(){

		$attributes = request()->validate([
			'user_id' => 'required',
			'project_name' => 'required',
			'project_location' => 'required'
		]);

		ProjectListing::create($attributes);


		return redirect('/project-listing')->with('success', 'Successfully Added!');

	}

	public function edit(ProjectListing $project_listing){

		$project = ProjectListing::findorfail($project_listing->id);
		return view('billings.project.edit', compact('project'));

	}



	public function update(ProjectListing $project_listing){


		$attributes = request()->validate([
			'user_id' => 'required',
			'project_name' => 'required',
			'project_location' => 'required',
		]);

		$project_listing->update($attributes);

		return back()->with('success', 'Successfully Updated!');

	}



	public function destroy(ProjectListing $project_listing){

		$project_listing->delete();
		return redirect('/project-listing');

	}
}
