@extends('layouts.app')

@section('title', 'Lista de Equipamentos')

@section('content')

<div class="container mt-1">
    <div class="row alert alert-success bg-secondary">
        <div class="col-sm-10 position-relative">
            <h1 class="position-absolute top-50 start-50 translate-middle fs-3 text-light">Lista de Equipamentos</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('equipamentos-create')}}" class="btn btn-dark mt-2">Novo Equipamento</a>
        </div>
    </div>
    <div>

    </div>

    <!-- <thead class="table table-secondary">
            <tr>
                <th scope="col">Imagem</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th class="bg-light text-dark text-center" scope="col">Menu</th>
            </tr>
        </thead> -->

    @foreach($equipamentos as $equipamento)
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="{{ url($equipamento->imagem) }}" alt="imagem" style="width: 200px;">
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="row">
                        {{$equipamento->nome}}
                    </div>
                    <div class="row p-0">
                        <textarea name="descricao" id="" cols="20" rows="5" class="text-start mx-0 p-0">
                        {{$equipamento->descricao}}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container flex-wrap">
            <th class="m-auto">
                <a href="{{ route('equipamentos-edit', ['id'=>$equipamento->id]) }}" class="btn btn-dark me-2">Editar
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </a>
                <a href="{{ route('equipamentos-show', ['id'=>$equipamento->id]) }}" class="btn btn-primary me-2">Ver
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </a>
            </th>
        </div>
    </div>

    @endforeach

</div>


@endsection
