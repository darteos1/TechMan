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

    @foreach($equipamentos as $equipamento)
    <div class="container">
        <div class="row border border-dark">
            <div class="col-sm-3">
                <img src="{{ url($equipamento->imagem) }}" alt="imagem" style="width: 200px;margin: 20% 10%">
            </div>
            <div class="col-sm-9">
                <div class="row position-relative">
                    <div class="row mb-3 fs-4 fw-bold">
                        {{$equipamento->nome}}
                    </div>
                    <textarea name="descricao" id="" cols="20" rows="5">
                    {{$equipamento->descricao}}
                    </textarea>
                    <div class="row">
                        <div class="col-md-4 border border-right border-1">
                            <button type="button" class="btn btn-secondary ms-3 bg-light" data-bs-toggle="modal" data-bs-target="#comentarios">
                                <img src="/img/comentario.png" alt="icon" style="width: 30px;">
                            </button>
                            <a href="{{ route('equipamentos-edit', ['id'=>$equipamento->id]) }}" class="btn btn-dark">Editar
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <a href="{{ route('equipamentos-show', ['id'=>$equipamento->id]) }}" class="btn btn-primary">Ver
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <div class="modal fade" id="comentarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <h1 class="fs-4 text-primary">Comentários</h1>
                                                <hr class="border border-primary">
                                                <div class="row d-flex flex-row mb-3">
                                                    @foreach($comentarios as $comentario)
                                                    <ul class="list-group">
                                                        <li class="list-group-item border-0 fw-bold">{{$comentario->permissao}} - {{date('d/m/Y', strtotime($comentario->data))}}</li>
                                                        <li class="list-group-item fst-italic border-0">{{$comentario->comentario}}</li>
                                                        <hr class="border border-primary">
                                                    </ul>

                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-sm-12 d-grid gap-2 d-md-flex justify-content-md-start">
                                                <a href="{{ route('comentarios-create')}}" class="btn btn-dark mt-2">Adicionar Comentário</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        <div class="col-md-4 mt-3 mb-2">


                        </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

        @endforeach

    </div>


    @endsection
