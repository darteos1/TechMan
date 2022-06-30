<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::orderby('data', 'asc')->get();
        return view('comentarios.comentarios', ['comentarios' => $comentarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $permissao =User::all();
        // $id = auth()->user()->id;
        // $user = User::findorfail($id);

        $equipamentos = Equipamento::all();
        $comentarios = Comentario::all();
        return view('comentarios.create',['equipamentos' => $equipamentos], ['comentarios' => $comentarios]);;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $filler = $request->only('id');
        // $equipamento = Equipamento::where($filler);
        // $filler['id_equipamento'] = $equipamento->id;
        // Comentario::create($filler);
        Equipamento::all();
        Comentario::create([
            'permissao' => $request['permissao'],
            'data'=> $request['data'],
            'comentario'=> $request['comentario'],
            'id_equipamento'=> $request['id_equipamento'],
        ]);
        return redirect()->route('home')->with('msg', "Sucesso! Comentário cadastrado para o equipamento.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipamentos = Equipamento::all();
        $comentarios = Comentario::where('id', $id)->first();
        if (!empty($comentarios))
        {
            return view('comentarios.show', ['comentarios'=>$comentarios],['equipamentos'=>$equipamentos]);
        }
        else
        {
            return redirect()->route('comentarios-index');
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
        $comentarios = Comentario::where('id', $id)->first();
        if (!empty($comentarios)) {
            return view('comentarios.edit', ['comentarios' => $comentarios]);
        } else {
            return redirect()->route('home');
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
            'permissao'=> $request->permissao,
            'data'=> $request->data,
            'comentario'=> $request->comentario,
            'id_equipamento'=> $request->id_equipamento,
        ];
        Comentario::where('id', $id)->update($data);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comentario::where('id', $id)->delete();
        return redirect()->route('home');
    }
}
