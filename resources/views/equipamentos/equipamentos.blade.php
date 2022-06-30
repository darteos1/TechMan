@extends('layouts.app')

@section('title', 'Lista de Equipamentos')

@section('content')

<div class="container-fluid">
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
            <div class="col-md-3 border border-dark">
                <img src="{{ url($equipamento->imagem) }}" alt="imagem" style="width: 150px;height: 100px;margin: 20% 10%">
            </div>
            <div class="col-md-8">
                <div class="">
                    <div class="ms-2 fs-4 fw-bold">
                        {{$equipamento->nome}}
                    </div>
                    <div>
                        <textarea class="ms-0 text-left" name="descricao" id="" cols="100" rows="5">
                        {{$equipamento->descricao}}
                        </textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <form class="d-flex justify-content-start" action="{{ route('equipamentos-destroy', ['id'=>$equipamento->id]) }}" method="POST">
                                @csrf
                                <div class="col-md-2">
                                    <!-- Modal para Visualizar os comentários -->
                                    <button type="button" class="mx-2 bg-light border border-0" data-bs-toggle="modal" data-bs-target="#comentarios">
                                        <img src="/img/comentario.png" alt="icon" style="width: 30px;">
                                    </button>
                                    <div class="modal fade" id="comentarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="background-color: #44BABC ;">
                                                <div class="modal-header border border-0" style="text-align: center;">
                                                    <div class="mx-auto">
                                                        <h1 class="fs-4 text-light" style="background-color: #44BABC;">COMENTÁRIOS</h1>
                                                    </div>
                                                    <button type="button" class="btn-close light mx-0" data-bs-dismiss="modal" aria-label="Close" style="background-color: #ffff ;"></button>
                                                </div>
                                                <div class="modal-body" style="background-color: #44BABC ;">
                                                    <div class="container">
                                                        <div class="row d-flex flex-row mb-3" style="background-color: #44BABC ;">
                                                            @foreach($comentarios as $comentario)
                                                            <ul class="list-group">
                                                                <li class="list-group-item border-0 fw-bold text-light text-center" style="background-color: #44BABC ;">{{$comentario->permissao}} </li>
                                                                <li class="list-group-item fst-italic border-0 text-light text-center" style="background-color: #44BABC ;">{{$comentario->comentario}}</li>
                                                                <li class="list-group-item border-0 fw-bold text-light text-center" style="background-color: #44BABC ;">{{date('d/m/Y', strtotime($comentario->data))}}</li>
                                                                <hr class="border border-1 border-light">
                                                            </ul>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border border-0">
                                                    <div class="col-sm-12 d-grid gap-2 d-md-flex justify-content-md-center ">
                                                        <a href="{{ route('comentarios-create')}}" class="btn text-light mt-2" style="background-color: #35797D;">Adicionar Comentário</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @method('DELETE')
                                <button class="mx-2 bg-light border-0" type="submit">
                                    <img src="/img/deletar.png" alt="icon" style="width: 30px;">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><br>

        </div>
        <hr class="border border-primary border-2">

        @endforeach

    </div>
</div>



@endsection
