<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mode;

class ModesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modes = Mode::all();

        return view('modes.index', ['modes' => $modes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('modes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mode = Mode::create(['name' => $request->name]);
        $mode->save();
        return redirect()->route('modes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mode = Mode::find($id);

        return view('modes.show', ['mode' => $mode]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mode = Mode::find($id);

        return view('modes.edit', ['mode' => $mode]);
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
        $mode = Mode::find($id);
        $mode->name = $request->name;
        $mode->update();

        return redirect()->route('modes.show', ['id' => $mode->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mode::find($id)->delete();
        return redirect()->route('modes');
    }
}
