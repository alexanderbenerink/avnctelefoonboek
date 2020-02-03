<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/telefoonboek.create');
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

        $telefoonboek = new Telefoonboek
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
