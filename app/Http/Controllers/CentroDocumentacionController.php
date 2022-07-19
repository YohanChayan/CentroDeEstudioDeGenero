<?php

namespace App\Http\Controllers;

use App\Models\CentroDocumentacion;
use Illuminate\Http\Request;

class CentroDocumentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = CentroDocumentacion::all();
        $documentacion = $this->cargarDT($libros);
        return view('Centro-de-Documentacion')->with('documentacion', $documentacion)->with('libros', $libros);
    }

    public function cargarDT($consulta)
    {
        $documentacion = [];

        foreach ($consulta as $key => $value){


            $documentacion[$key] = array(
                $value['titulo'],
                $value['autor'],
                $value['editorial'],
                $value['lugar'],
                $value['anio'],
                $value['ejemplares']
            );

        }

        return $documentacion;
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
     * @param  \App\Models\CentroDocumentacion  $centroDocumentacion
     * @return \Illuminate\Http\Response
     */
    public function show(CentroDocumentacion $centroDocumentacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CentroDocumentacion  $centroDocumentacion
     * @return \Illuminate\Http\Response
     */
    public function edit(CentroDocumentacion $centroDocumentacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CentroDocumentacion  $centroDocumentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentroDocumentacion $centroDocumentacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CentroDocumentacion  $centroDocumentacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentroDocumentacion $centroDocumentacion)
    {
        //
    }
}
