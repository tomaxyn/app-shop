<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use App\Http\Requests\NewslRequest;

class NewsLetController extends Controller
{
    
   public function index()
	{
		$newslets = Newsletter::orderBy('id', 'ASC')->paginate(10);
    	return view('admin.newsletters.home', compact('newslets'));
    }

    public function show($id)
    {
    	$newsle = Newsletter::find($id);
    	return view('admin.newsletters.show', compact('newsle'));
    }

    public function destroy($id)
    {
    	$newslet = Newsletter::find($id);
    	$newslet->delete();

    	return back()->with('info', 'El boletín fue eliminado');
    }

    public function edit($id)
    {
    	$bolet = Newsletter::find($id);
    	return view('admin.newsletters.edit', compact('bolet'));
    }

    public function create()
    {
    	return view('admin.newsletters.create');
    }

    public function store(NewslRequest $irequest)
    {
    	$bolet = new Newsletter;

    	$bolet->name = $irequest->name;
    	$bolet->content = $irequest->content;
    	
    	$bolet->save();

    	return redirect()->route('newsletters.index')->with('info', 'El boletín fue guardado');
    }

     public function update(NewslRequest $irequest, $id)
    {
    	$bolet = Newsletter::find($id);

    	$bolet->name = $irequest->name;
    	$bolet->content = $irequest->content;
    	
    	$bolet->save();


    	//return 'producto actualizado' . $id;
    	return redirect()->route('newsletters.index')->with('info', 'El boletín '.$id.' fue actualizado');
    }
}
