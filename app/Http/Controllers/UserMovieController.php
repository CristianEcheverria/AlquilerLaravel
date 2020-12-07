<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMovie as UserMovie;

class UserMovieController extends Controller
{

	public function index()
	{
		$userMovies = UserMovie::all();
		return \View::make('userMovies/list',compact('userMovies'));
	}

	public function create()
	{
		return \View::make('userMovies/new');
	}

	public function edit($id)
	{
		$userMovie = UserMovie::find($id);
		return \View::make('userMovies/update', compact('userMovie'));
	}

	public function update($id, Request $request) {
		$userMovie = UserMovie::find($id);
		$userMovie->name = $request->name;
		$userMovie->email = $request->email;
		$userMovie->password = $request->password;
		$userMovie->status_id = $request->status_id;
		$userMovie->role_id = $request->role_id;
		$userMovie->save();
		return redirect('userMovie');
	}

    public function store(Request $request)
    {
    	$userMovie = new UserMovie;
		$userMovie->name = $request->name;
		$userMovie->email = $request->email;
		$userMovie->password = $request->password;
		$userMovie->status_id = $request->status_id;
		$userMovie->role_id = $request->role_id;
    	$userMovie->save();
    	return redirect('userMovie');
    }

    public function show(Request $request)
    {
    	$userMovies = UserMovie::where('name','like','%'.$request->name.'%')->get();
    	return \View::make('userMovies/list', compact('userMovies'));
    }

    public function destroy($id)
    {
    	$userMovie = UserMovie::find($id);
    	$userMovie-> delete();
    	return redirect()->back();
    }
}