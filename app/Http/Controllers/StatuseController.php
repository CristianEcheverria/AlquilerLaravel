<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statuse as Statuse;

class StatuseController extends Controller
{

	public function index()
	{
		$statuses = Statuse::all();
		return \View::make('statuses/list',compact('statuses'));
	}

	public function create()
	{
		return \View::make('statuses/new');
	}

	public function edit($id)
	{
		$statuse = Statuse::find($id);
		return \View::make('statuses/update', compact('statuse'));
	}

	public function update($id, Request $request) {
		$statuse = Statuse::find($id);
		$statuse->name = $request->name;
		$statuse->type_status_id = $request->type_status_id;
		$statuse->save();
		return redirect('statuse');
	}

    public function store(Request $request)
    {
    	$statuse = new Statuse;
    	$statuse->name = $request->name;
    	$statuse->type_status_id = $request->type_status_id;
    	$statuse->save();
    	return redirect('statuse');
    }

    public function show(Request $request)
    {
    	$statuses = Statuse::where('name','like','%'.$request->name.'%')->get();
    	return \View::make('statuses/list', compact('statuses'));
    }

    public function destroy($id)
    {
    	$statuse = Statuse::find($id);
    	$statuse-> delete();
    	return redirect()->back();
    }
}
