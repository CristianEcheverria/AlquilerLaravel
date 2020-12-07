<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeStatuse as TypeStatuse;

class TypeStatuseController extends Controller
{

	public function index()
	{
		$typeStatuses = TypeStatuse::all();
		return \View::make('typeStatuses/list',compact('typeStatuses'));
	}

	public function create()
	{
		return \View::make('typeStatuses/new');
	}

	public function edit($id)
	{
		$typeStatuse = TypeStatuse::find($id);
		return \View::make('typeStatuses/update', compact('typeStatuse'));
	}

	public function update($id, Request $request) {
		$typeStatuse = TypeStatuse::find($id);
		$typeStatuse->name = $request->name;
		$typeStatuse->save();
		return redirect('typeStatuse');
	}

    public function store(Request $request)
    {
    	$typeStatuse = new TypeStatuse;
    	$typeStatuse->name = $request->name;
    	$typeStatuse->save();
    	return redirect('typeStatuse');
    }

    public function show(Request $request)
    {
    	$typeStatuses = TypeStatuse::where('name','like','%'.$request->name.'%')->get();
    	return \View::make('typeStatuses/list', compact('typeStatuses'));
    }

    public function destroy($id)
    {
    	$typeStatuse = TypeStatuse::find($id);
    	$typeStatuse-> delete();
    	return redirect()->back();
    }
}
