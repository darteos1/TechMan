@extends('layouts.app')

@section('title', 'Novo Comentário')

@section('content')
<div class="container-fluid">
    <h3 id="comentario">Cadastrar Comentário</h3>
</div>

<form class="form-control" action="{{ route('comentarios-store') }}" method="POST">
    @csrf
    <div class="form-floating">
        <input name="permissao" type="text" class="form-control" id="floatingInput" value={{ auth()->user()->permissao }} hidden><br>
    </div>
    <div class="form-floating">
        <input name="data" type="date" class="form-control" id="floatingInput" value={{ now() }} hidden>
    </div>
    <div class="form-floating">
        <textarea name="comentario" id="" cols="30" rows="10" class="form-control" id="floatingInput" placeholder="Digite seu comentário"></textarea>
        <label for="floatingInput">Comentário: </label>
    </div>

    <div class="container mt-1" style="width: 440px;">
        <div class="form-group">
            <input type="submit" class="btn btn-primary m-2 text-light" name="submit">
            <a href="{{ route('home')}}" class="btn btn-success m-2 text-light">Voltar</a>
        </div>
    </div>
</form>
@endsection
