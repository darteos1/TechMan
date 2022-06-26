@extends('layouts.app')

@section('title', 'Lista de Equipamentos')

@section('content')


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
    <div class="row">
        <div class="col-sm-3 border border-dark" style="width: 200px;">
            <img src="{{ url($equipamento->imagem) }}" alt="imagem" style="width: 150px;height: 100px;margin: 20% 10%">
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="row ms-2 mb-3 fs-4 fw-bold">
                    {{$equipamento->nome}}
                </div>

                <textarea class="ms-2" name="descricao" id="" cols="20" rows="5">
                {{$equipamento->descricao}}
                </textarea><br>

                <div class="row">
                    <div class="col-md-4">
                        <form class="d-flex justify-content-start" action="{{ route('equipamentos-destroy', ['id'=>$equipamento->id]) }}" method="POST">
                            <button type="button" class="btn btn-secondary ms-3 bg-light border-0" data-bs-toggle="modal" data-bs-target="#comentarios">
                                <img src="/img/comentario.png" alt="icon" style="width: 30px;">
                            </button>

                            @csrf
                            @method('DELETE')
                            <button class="btn btn-secondary ms-0 bg-light border-0" type="submit">
                                <img src="/img/deletar.png" alt="icon" style="width: 30px;">
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <hr class="border border-primary border-2">

    @endforeach

</div>


@endsection
