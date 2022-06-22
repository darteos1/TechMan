@extends('layouts.app')

@section('title', 'Exibir')

@section('content')
<div class="container col-md-12">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="m-2 fs-3 alert text-center text-dark">Comentário</h1>
        </div>
    </div>
</div>
<div>
    <div class="card container shadow p-1 mb-1 bg-body rounded" style="width: 350px;">
        <div class="card-body mx-auto">
            <ul class="list-group border border-dark border-2">

                <li class="list-group-item"><strong>Usuário:</strong> {{ $comentarios->usuario }}</li>
                <li class="list-group-item"><strong>Perfil:</strong> {{ $comentarios->perfil }}</li>
                <li class="list-group-item"><strong>Data:</strong> {{ $comentarios->data }}</li>
                <li class="list-group-item"><strong>Comentário:</strong> {{ $comentarios->comentario }}</li>

            </ul>
        </div>
        <div class="card container-fluid border-0">
            <form class="d-flex justify-content-center" action="{{ route('comentarios-destroy', ['id'=>$comentarios->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger m-2" type="submit">Deletar</button>
                <a class="btn btn-secondary m-2 text-light" href="{{ route('comentarios-index') }}">Voltar</a>
            </form>
        </div>
    </div>

</div>

@endsection
