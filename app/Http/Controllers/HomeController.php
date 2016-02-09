<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Evento;
use App\Http\Requests;
use App\Contrato;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $event = DB::table('eventos')
            ->select(DB::raw('id, fecha, lugar'))
            ->where('fecha','>',Carbon::now())
            ->limit(4)
            ->get();
        $clientes = Cliente::select('id')->count();
        $eventos = Evento::select('id')->count();
        $contratos = Contrato::select('id')->count();

        return view('home',compact('event','clientes','eventos','contratos'));
    }
}
