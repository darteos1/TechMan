<?php

namespace App\Http\Controllers;

use App\Models\model_equipamentos;
use Illuminate\Http\Request;

class controller_equipamentos extends Controller
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
        $foto = $request->hasFile('foto_equipamento');
        
        $fotoName = time().'.'.$request->foto_equipamento->extension();
        $upload = $request->foto_equipamento->move(public_path('images'), $fotoName);

        if(!$upload)
        {
            return redirect()->back()->with('error', 'upload falhou')->withInput();
        }

        model_equipamentos::create([
            'foto_equipamento' => $fotoName,
            'nome_equipamento' => $request-> nome_equipamento,
            'descricao_equipamento' => $request->descricao_equipamento,
            'switch_equipamento' => $request->switch_equipamento
        ]);
        
        return redirect() -> route('home');
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
