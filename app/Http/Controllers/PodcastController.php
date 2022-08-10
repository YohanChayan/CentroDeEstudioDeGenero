<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcast = Podcast::orderby('id','desc')->where('activo','=',1)->get();
        return view ('Podcast.index',compact('podcast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Podcast.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request, [
            'link' => 'required',
        ]);

        $podcast = new Podcast();
        $podcast->link = $request->input('link');

        $podcast->save();
        //
        // $log = new Log();
        // $log->tabla = "podcast";
        // $mov = "";
        // $mov = $mov . " titulo" . $podcast->titulo . " tipo" . $podcast->tipo . " descripcion" . $podcast->descripcion. " donde_aplica" . $podcast->donde_aplica . " solucion" . $podcast->solucion . " link" . $podcast->link. " fecha_creacion" . $podcast->fecha_creacion . " fecha_actualizacion" . $podcast->fecha_actualizacion . " autor" . $podcast->autor;
        // $log->movimiento = $mov;
        // $log->usuario_id = Auth::user()->id;
        // $log->acciones = "Insercion";
        // $log->save();
        //
        return redirect('podcast')->with(array(
            'message' => 'El podcast se guardó Correctamente'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $podcast = Podcast::find($id);
        return view('Podcast.edit')->with('podcast', $podcast);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $this->validate($request, [
            'link' => 'required',
        ]);

        $podcast = Podcast::find($id);
        $podcast->link = $request->input('link');

        $podcast->update();
        //
        // $log = new Log();
        // $log->tabla = "llaves";
        // $mov = "";
        // $mov = $mov . " nombre" . $llaves->nombre . " num_copias" . $llaves->num_copias . " comentarios" . $llaves->comentarios;
        // $log->movimiento = $mov;
        // $log->usuario_id = Auth::user()->id;
        // $log->acciones = "Insercion";
        // $log->save();
        //
        return redirect('podcast')->with(array(
            'message' => 'El podcast se actualizó Correctamente'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }

    public function delete_podcast($id)
    {
        $podcast = Podcast::find($id);
        if ($podcast) {
            $podcast->activo = 0;
            $podcast->update();
            //
            // $mov = $mov . " titulo" . $problema_solucion->titulo . " tipo" . $problema_solucion->tipo . " descripcion" . $problema_solucion->descripcion. " donde_aplica" . $problema_solucion->donde_aplica . " solucion" . $problema_solucion->solucion . " link" . $problema_solucion->link. " fecha_creacion" . $problema_solucion->fecha_creacion . " fecha_actualizacion" . $problema_solucion->fecha_actualizacion . " autor" . $problema_solucion->autor;
            // $log->movimiento = $mov;
            // $log->usuario_id = Auth::user()->id;
            // $log->acciones = "Borrado";
            // $log->save();
            //
            return redirect()->route('podcast.index')->with(array(
                "message" => "El podcast se ha eliminado correctamente"
            ));
        } else {
            return redirect()->route('welcome')->with(array(
                "message" => "El podcast que trata de eliminar no existe"
            ));
        }
    }
}
