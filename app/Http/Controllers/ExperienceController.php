<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    function __construct()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.experience.index', [
            'title' => 'Experience',
            'histories' => History::where('type', 'experience')->orderBy('end_date', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.experience.create', [
            'title' => 'Add Experience'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $history = $request->validate([
            'title' => 'required|max:225',
            'body' => 'required',
            'info_st' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable',
            'type' => 'experience'
        ]);

        History::create($history);
        return redirect('/dashboard/experience/')->with('success', 'Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = History::where('id', $id)->where('type', 'experience')->first();
        return view('dashboard.experience.edit', [
            'title' => 'Edit',
            'history' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $history = $request->validate([
            'title' => 'required|max:225',
            'body' => 'required',
            'info_st' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable',
            'type' => 'experience'
        ]);

        History::where('id', $id)->where('type', 'experience')->update($history);
        return redirect('/dashboard/experience/')->with('success', 'Your page has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        History::where('id', $id)->where('type', 'experience')->delete();
        return redirect('dashboard/experience/')->with('success', 'Your data has been deleted');
    }
}
