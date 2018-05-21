<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Afiliate;
use App\Http\Requests\AfiliateRequest;

class AfiliaController extends Controller
{
    public function index()
	{
		$afiliates = Afiliate::orderBy('id', 'ASC')->get();
    	return view('admin.afiliates.home', compact('afiliates'));
    }

    public function show($id)
    {
    	$afiliate = Afiliate::find($id);
    	return view('admin.afiliates.show', compact('afiliate'));
    }

    public function destroy($id)
    {
    	$afiliate = Afiliate::find($id);
    	$afiliate->delete();

    	return back()->with('info', 'El Afiliado fue eliminado');
    }

    public function edit($id)
    {
    	$afiliate = Afiliate::find($id);
    	return view('admin.afiliates.edit', compact('afiliate'));
    }

    public function create()
    {
    	return view('admin.afiliates.create');
    }

    public function store(AfiliateRequest $irequest)
    {
    	$afiliate = new Afiliate;

    	$afiliate->name = $irequest->name;
    	$afiliate->image = $irequest->image;
    	$afiliate->biography = $irequest->biography;
    	$afiliate->save();

    	return redirect()->route('afiliates.index')->with('info', 'El Afiliado fue guardado');
    }

     public function update(AfiliateRequest $irequest, $id)
    {
    	$afiliate = Afiliate::find($id);

    	$afiliate->name = $irequest->name;
    	$afiliate->image = $irequest->image;
    	$afiliate->biography = $irequest->biography;
    	$afiliate->save();


    	//return 'producto actualizado' . $id;
    	return redirect()->route('afiliates.index')->with('info', 'El afiliado fue actualizado');
    }
}
