<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use App\Http\Requests\InstructorRequest;

class InstructorController extends Controller
{
	public function index()
	{
		$instructors = Instructor::orderBy('id', 'ASC')->paginate(10);
    	return view('admin.instructors.home', compact('instructors'));
    }

    public function show($id)
    {
    	$instructor = Instructor::find($id);
    	return view('admin.instructors.show', compact('instructor'));
    }

    public function destroy($id)
    {
    	$instructor = Instructor::find($id);
    	$instructor->delete();

    	return back()->with('info', 'El Instructor fue eliminado');
    }

    public function edit($id)
    {
    	$instructor = Instructor::find($id);
    	return view('admin.instructors.edit', compact('instructor'));
    }

    public function create()
    {
    	return view('admin.instructors.create');
    }

    public function store(InstructorRequest $irequest)
    {
    	$instruct = new Instructor;

    	$instruct->name = $irequest->name;
    	$instruct->image = $irequest->image;
    	$instruct->biography = $irequest->biography;
    	$instruct->save();

    	return redirect()->route('instructors.index')->with('info', 'El Instructor fue guardado');
    }

     public function update(InstructorRequest $irequest, $id)
    {
    	$instruct = Instructor::find($id);

    	$instruct->name = $irequest->name;
    	$instruct->image = $irequest->image;
    	$instruct->biography = $irequest->biography;
    	$instruct->save();


    	//return 'producto actualizado' . $id;
    	return redirect()->route('instructors.index')->with('info', 'El Instructor fue actualizado');
    }
}
