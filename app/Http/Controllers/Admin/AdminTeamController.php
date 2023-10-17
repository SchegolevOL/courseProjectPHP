<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title='Teams Table';
        $teams = Team::all();

        return view('admin.team.index',['teams'=>$teams, 'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::all();
       return view('admin.team.create',['posts'=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'age'=>'required|integer',
        ]);
        $team = Team::create($request->all());
        $team->posts()->attach($request->input('posts'));
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
