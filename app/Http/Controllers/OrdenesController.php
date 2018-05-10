<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrdenesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario = $request->user();
        $pedidos = \App\Pedido::all();
        $users = \App\User::all()->pluck('email','id');
        $nombreComida = 
            \App\ElementoPedido::all()->pluck('nombreComida','id');
        $cantidadComida = 
            \App\ElementoPedido::all()->pluck('cantidad','id');
        $estadosPedido =
            \App\EstadoPedido::all()->pluck('descripcion','id');
        $argumentos = array();
        $argumentos["pedidos"] = $pedidos;
        $argumentos["estadosPedido"] = $estadosPedido;
        $argumentos["users"] = $users;
        $argumentos["nombres"] = $nombreComida;
        $argumentos["cantidades"] = $estadosPedido;
        return view('ordenes.index', $argumentos);

        /*
        $ordenes = 
        \App\EstadoPedido::where('idPedido','=',$usuario->id)->get();
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comidas = \App\Comida::all();
        $argumentos = array();
        $argumentos['comidas'] = $comidas;
        return view('ordenes.create', $argumentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $estadosPedido->descripcion = $request['asdf'];

        // Save/update user. 
        // This will will update your the row in ur db.
        $estadosPedido->save();

        return redirect()->route('ordenes.index');
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
        //
    }
}
