@extends('layouts.app')

@section('title', 'Lista de Comentarios')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary ms-3 bg-light" data-bs-toggle="modal" data-bs-target="#comentarios">
    <img src="/img/comment.png" alt="icon" style="width: 30px;">

</button>

<!-- Modal -->
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
                            <li class="form-control list-group-item bg-secondary text-light fs-5">{{ $comentario->permissao }}</li>
                            <li class="list-group-item border-0 fw-bold"> {{date('d/m/Y', strtotime($comentario->data))}}</li>
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
                    <div class="container-fluid">
                        <div class="row">
                            @if(session('msg'))
                            <p class="msg">{{ session('msg')}}</p>
                            @endif
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
