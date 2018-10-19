<?php

namespace App\Http\Controllers;

use App\User;
use App\UserTemp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usuarios()
    {
        $usuarios = User::all();
        $peticiones = UserTemp::all();
        return view('deleyes.admin.admin-usuarios',compact('usuarios','peticiones'));
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

        return $request;
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
        $user = UserTempo::find($id);
        dd($user);
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
        $userTemp = UserTemp::findOrFail($id);

        User::create([
            'nombre' => $userTemp->nombre,
            'tipoDocumento' => $userTemp->tipoDocumento,
            'documento' => $userTemp->documento,
            'email' => $userTemp->email,
            'telefono' => $userTemp->telefono,
            'role' => $userTemp->role,
            'password' => $userTemp->password,

        ]);
        $userTemp->delete();

        $usuarios = User::all();
        $peticiones = UserTemp::all();
        return view('deleyes.admin.admin-usuarios',compact('usuarios','peticiones'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userTemp = UserTemp::findOrFail($id);

        $userTemp->delete();

        $usuarios = User::all();
        $peticiones = UserTemp::all();
        return view('deleyes.admin.admin-usuarios',compact('usuarios','peticiones'));
    }
}
