<?php

namespace App\Http\Controllers;

use App\Models\Encuestas;
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Encuestas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function show(Encuestas $encuestas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuestas $encuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuestas $encuestas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuestas $encuestas)
    {
        //
    }
}
