@extends('layouts.app')

@section('title', 'Novo Equipamento')

@section('content')
<div class="container" style="width: 440px;">
    <h1 class="m-2 fs-3 alert alert-dark bg-dark text-light text-center">Cadastrar Novo Paciente</h1>
</div>
<div class="container mt-1 bg-dark rounded" style="width: 400px;">
    <form action="{{ route('equipamentos-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label class="text-light" for="imagem">Imagem: </label>
                <input type="file" class="form-control" name="imagem" id="" placeholder="Insira a imagem do equipamento...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="" placeholder="Digite o nome do equipamento...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="descricao">Descrição: </label><br>
                <textarea name="descricao" id="" cols="48" rows="5"></textarea>
                <!-- <input type="text" class="form-control" name="descricao" id="" placeholder="Descreva o equipamento..."> -->
            </div><br>
        </div>
        <div class="container mt-1" style="width: 440px;">
            <div class="form-group">
                <input type="submit" class="btn btn-primary m-2 text-light" name="submit">
                <a href="{{ route('equipamentos-index')}}" class="btn btn-success m-2 text-light">Voltar</a>
            </div>
        </div>
    </form>
</div>


@endsection
