@extends('layouts.app')

@section('title', 'Editar')

@section('content')
<div class="container" style="width: 300px;">
    <h1 class="m-2 fs-3 alert text-center">Editar Comentário</h1>
</div>
<div class="container mt-3 bg-secondary shadow p-1 mb-1 bg-body rounded" style="width: 335px;">
<form class="form-group bg-secondary" action="{{ route('comentarios-update',['id'=>$comentarios->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group bg-secondary mx-4">
            <div class="form-group">
                <label class="text-light" for="usuario">Usuário: </label>
                <input type="text" class="form-control" name="usuario" id="" value="{{$comentarios->usuario}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="perfil">Perfil: </label>
                <input type="text" class="form-control" name="perfil" id="" value="{{$comentarios->perfil}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="data">Data: </label>
                <input type="date" class="form-control" name="data" id="" value="{{$comentarios->data}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="comentario">Comentário: </label>
                <textarea rows="4" cols="50" class="form-control" name="comentario" id="" >{{$comentarios->comentario}}</textarea>
            </div>
        </div>
        <div class="container d-flex justify-content-center" style="width: 300px;">
            <input type="submit" class="btn btn-light m-2 text-dark" name="submit" value="Atualizar">
            <a href="{{ route('comentarios-index')}}" class="btn btn-success m-2 text-light">Voltar</a>
        </div>
    </form>

</div>
@endsection
