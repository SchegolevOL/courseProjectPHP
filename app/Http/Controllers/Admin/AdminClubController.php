<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Club;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title= 'Club';
        $clubs= Club::all();
        return view('admin.club.index',['title'=>$title, 'clubs'=>$clubs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams=Team::all();
        return view('admin.club.create', ['teams'=>$teams]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'emblem' => 'nullable|image',

        ]);

        if ($request->hasFile('emblem'))
        {
            $folder = date('Y-m-d');
            $emblem = $request->file('emblem')->store("images/emblem/{$folder}");

        }
// php artisan storage:link

       $club=Club::query()->create(
           [
               'title' => $request->get('title'),
               'emblem'=>$emblem ?? null,
           ]
       );
        $club->teams()->attach($request->input('teams'));
        return redirect()->route('admin.index');
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
    public function edit(Club $club)
    {
        return view('admin.club.edit',['club'=>$club, 'teams'=>Team::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        $request->validate([
            'title' => 'required',
            'emblem' => 'nullable|image',


        ]);

        if ($request->hasFile('emblem'))
        {
            $club->deleteFile();

            $folder = date('Y-m-d');
            $emblem = $request->file('emblem')->store("images/emblem/{$folder}");

        }
// php artisan storage:link

        $club->update([
                'title' => $request->get('title'),
                'emblem'=>$emblem ?? $club->emblem,

            ]
        );
        $club->teams()->sync($request->input('teams'));
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        $club->teams()->detach();
        $club->delete();
        return redirect()->route('club.index');
    }
}
