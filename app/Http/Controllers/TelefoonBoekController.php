<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// importeer TelefoonBoek model
use App\TelefoonBoek;

class TelefoonBoekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefoon_boeks = TelefoonBoek::all();

        return view('pages/index', compact('telefoon_boeks'));
        // $telefoon_boeks = DB::table('telefoon_boeks')->select('id','voornaam','achternaam', 'telefoonnummer')->get();

        // return view('pages/index', compact('telefoon_boeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/telefoon_boeks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'id'=>'required',
            'voornaam'=>'required',
            'achternaam'=>'required',
            'telefoonnummer'=>'required'
        ]);

        $telefoonboek = new TelefoonBoek
        ([
            'id' => $request->get('id'),
            'voornaam' => $request->get('voornaam'),
            'achternaam' => $request->get('achternaam'),
            'telefoonnummer' => $request->get('telefoonnummer')
        ]);

        $telefoonboek->save();
        return redirect('/telefoonboek')->with('succes', 'Gegevens opgeslagen!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telefoonboek = TelefoonBoek::find($id);
        $telefoonboek->delete();

        return redirect('/telefoonboek')->with('succes', 'Verwijderen was succesvol!');
    }
}
