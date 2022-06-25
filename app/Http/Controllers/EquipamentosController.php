<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EquipamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::all();
        return view('equipamentos.equipamentos', ['equipamentos' => $equipamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageDB = null;

        if($request->hasFile('imagem')){
            $image = $request->file('imagem');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagens');
            $image2 = $destinationPath."/".$name;
            $imaged = Str::after($image2, 'public');
            $imageDB = substr($imaged, 1);
            $image->move($destinationPath, $name);
        }

        Equipamento::create([
            'imagem' => $imageDB,
            'nome' => $request['nome'],
            'descricao'=> $request['descricao'],
        ]);

        // return redirect() -> route('home');

        $equipamentos = Equipamento::all();
        return view('equipamentos.equipamentos', compact('equipamentos'));

        // Paciente::create($request->all());
        // return redirect()->route('pacientes-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipamentos = Equipamento::where('id', $id)->first();
        if (!empty($equipamentos))
        {
            return view('equipamentos.show', ['equipamentos'=>$equipamentos]);
        }
        else
        {
            return redirect()->route('equipamentos-index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipamentos = Equipamento::where('id', $id)->first();
        if (!empty($equipamentos)) {
            return view('equipamentos.edit', ['equipamentos' => $equipamentos]);
        } else {
            return redirect()->route('equipamentos-index');
        }
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
        $data = [
            'imagem'=> $request->imagem,
            'nome'=> $request->nome,
            'descricao'=> $request->descricao,
        ];
        Equipamento::where('id', $id)->update($data);
        return redirect()->route('equipamentos-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipamento::where('id', $id)->delete();
        return redirect()->route('equipamentos-index');
    }
}
