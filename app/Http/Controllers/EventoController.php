<?php

namespace App\Http\Controllers;

use App\Evento;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        $evento->paquete;
        $evento->compromiso;
        $evento->filmadores;


        return view('evento.show',compact('evento'));
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

    }

    public function api(){

        $data = array();
        $id = Evento::all()->lists('id');
        $lugar = Evento::all()->lists('lugar');
        $fecha = Evento::all()->lists('fecha');
        $desc = Evento::all()->lists('descripcion');
        $count = count($id);

        for($i=0;$i<$count;$i++){
            $data[$i] = array(
                "title"=>$lugar[$i],
                "start"=>$fecha[$i],
                "description"=>$desc[$i],
                "url"=>"http://localhost/proyectos/tesis/public/evento/".$id[$i]
            );
        }

        return response()->json($data);
    }

    public function date(){
        $fecha = Evento::all()->lists('fecha')->first();
        $date = date_create($fecha);
        $newdate = date_format($date,'d-m-y');
        dd($newdate);
    }
}
