<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Request\EmpresaStoreRequest;
use App\Http\Controllers\Request\CreditoStoreRequest;
use App\User;
use App\Empresa;
use App\Credito;



class ClienteController extends Controller
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

    public function empresa()
    {
        return view('deleyes.cliente.cliente-empresa');
    }

    public function dataCredito()
    {
        return view('deleyes.cliente.cliente-dataCredito');
    }

        public function listar()
    {
        $user = auth()->user();
        $empresas = $user->empresas()->get();
        $creditos = $user->creditos()->get();

        return view('deleyes.cliente.cliente-listar',compact('empresas','creditos'));


    }

        public function crearEmpresa(EmpresaStoreRequest $request)
    {
        $id = auth()->user()->PK_id;
        Empresa::create([
            'nombreEmpresa' => $request->nombreEmpresa,
            'tipoEmpresa' => $request->tipoEmpresa,
            'numAccionistas' => $request->numAccionistas,
            'capital' => $request->capital,
            'departamento' => $request->departamento,
            'ciudad' => $request->ciudad,
            'FK_UsuarioId' => $id,

        ]);
        return view('deleyes.cliente.cliente-empresa');
    }

        public function crearCredito(CreditoStoreRequest $request)
    {
        if($request->hasFile('soporte')){
            $file = $request->file('soporte');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/soportes/',$nombre);
        };

        $id = auth()->user()->PK_id;
        Credito::create([
            'suceso' => $request->suceso,
            'fecha' => $request->fecha,
            'soporte' => $nombre,
            'departamento' => $request->departamento,
            'ciudad' => $request->ciudad,
            'FK_UsuarioId' => $id,

        ]);
        return view('deleyes.cliente.cliente-dataCredito');
    }
}
