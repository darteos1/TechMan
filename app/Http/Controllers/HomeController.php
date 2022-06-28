<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Equipamento;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comentarios = Comentario::orderby('id', 'desc')->where('id_equipamento',36)->get()->take(4);
        $equipamentos = Equipamento::all();
        $permissao = auth()->user()->permissao;
        return view('equipamentos.equipamentos', compact('permissao', 'comentarios', 'equipamentos'));
    }
}
