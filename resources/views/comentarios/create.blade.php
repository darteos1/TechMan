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
        <textarea name="comentario" id="comentario" cols="50" rows="5" class="form-control" onchange="toggleButtom();"></textarea>

        <!-- <textarea id="comentario" cols="30" rows="10" class="form-control" placeholder="Digite seu comentário" onchange="toggleButtom()"></textarea> -->
        <label for="floatingInput">Comentário: </label>
    </div>
    <div class="container mt-1" style="width: 440px;">
        <div class="form-group">
            <input type="submit" class="btn btn-primary m-2 text-light" name="submit" id="cadastrar" value="Cadastrar" disabled>
            <a href="{{ route('home')}}" class="btn btn-success m-2 text-light">Voltar</a>
            <!-- <button id="cadastrar">Enviar</button> -->
        </div>
    </div>
</form>

<script>
    function toggleButtom() {
        const comentario = document.querySelector("#comentario").value;

        if (comentario === "") {
            document.querySelector("#cadastrar").disabled = true;
        }
        document.querySelector("#cadastrar").disabled = false;
    }
</script>
@endsection
