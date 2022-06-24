<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
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
        $comentarios = Comentario::orderby('id', 'desc')->get();
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

        return view('comentarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comentario::create([
            'permissao' => $request['permissao'],
            'data'=> $request['data'],
            'comentario'=> $request['comentario'],
        ]);
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentarios = Comentario::where('id', $id)->first();
        if (!empty($comentarios))
        {
            return view('comentarios.show', ['comentarios'=>$comentarios]);
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
