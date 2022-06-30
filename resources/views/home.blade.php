@extends('layouts.app')

@section('content')
<div class="container-fluid ms-5">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-secondary" role="alert">
                    <div class="row">
                        <div class="col-md-2 border border-right border-1">
                            <button type="button" class="btn btn-secondary ms-3 bg-light" data-bs-toggle="modal" data-bs-target="#comentarios">
                                <img src="/img/comment.png" alt="icon" style="width: 30px;">
                            </button>
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
                                                    </ul>
                                                    @endforeach
                                                    <hr class="border border-primary">
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
                        <div class="col-md-10 text-center d-flex align-items-center d-flex justify-content-center shadow p-1 mb-1 bg-body rounded">
                            <p class="fs-1"><strong>{{ __('Seja bem vindo,') }}
                                    {{ Auth::user()->name }}!</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
