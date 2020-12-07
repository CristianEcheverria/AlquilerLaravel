<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role as Role;

class RoleController extends Controller
{

	public function index()
	{
		$roles = Role::all();
		return \View::make('roles/list',compact('roles'));
	}

	public function create()
	{
		return \View::make('roles/new');
	}

	public function edit($id)
	{
		$role = Role::find($id);
		return \View::make('roles/update', compact('role'));
	}

	public function update($id, Request $request) {
		$role = Role::find($id);
		$role->name = $request->name;
		$role->status_id = $request->status_id;
		$role->save();
		return redirect('role');
	}

    public function store(Request $request)
    {
    	$role = new Role;
    	$role->name = $request->name;
    	$role->status_id = $request->status_id;
    	$role->save();
    	return redirect('role');
    }

    public function show(Request $request)
    {
    	$roles = Role::where('name','like','%'.$request->name.'%')->get();
    	return \View::make('roles/list', compact('roles'));
    }

    public function destroy($id)
    {
    	$role = Role::find($id);
    	$role-> delete();
    	return redirect()->back();
    }
}
