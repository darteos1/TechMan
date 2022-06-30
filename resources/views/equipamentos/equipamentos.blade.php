@extends('layouts.app')

@section('title', 'Lista de Equipamentos')

@section('content')

<div class="container-fluid">
    <div class="row alert alert-success bg-secondary">
        <div class="col-sm-10 position-relative">
            <h1 class="position-absolute top-50 start-50 translate-middle fs-3 text-light">Lista de Equipamentos</h1>
        </div>
        @if($permissao =='Administrador')
        
        <div class="col-sm-2">
            
            
            

            
            <form action="{{ route('equipamentos-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content rounded-0">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Cadastro de Equipamentos</h4>
                                <button type="button" class="close btn-close d-flex align-items-center justify-content-center text-center" data-bs-dismiss="modal" aria-label="Close">
                                    <span class="d-flex align-items-center justify-content-center text-center" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="mb-3">
                                    <label for="imagem" class="form-label" >Foto do Equipamento</label>
                                    <input class="form-control" type="file" id="formFile" name="imagem" placeholder="Insira a imagem do equipamento...">
                                </div>
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="Digite o nome do equipamento...">
                                </div>
                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="" cols="48" rows="5"></textarea>     
                                </div>                                                                
                                <div class="mb-3">                           
                                    <label class="form-check-label" for="status">Status</label><br>                                    
                                    <select  type="select" name="status" id="switch_equipamento">
                                        <option value="ativo">Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mt-2 btn-style1">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
           
        </div>
        @endif
    </div>
    
    @foreach($equipamentos as $equipamento)
    @if($equipamento->status == 'ativo')

    <div class="container">
        <div class="row">
            <div class="d-flex">
                <div class="d-flex">
                    <img class="me-3" src='{{ url($equipamento->imagem) }}' alt="Imagem de um equipamento">
                    <div class="flex-column flex-grow-1" style="margin-right: 6rem;">
                        <h3 class="fs-5 fw-semibold" style="color: #44babc;">{{ $equipamento->nome }}</h3>
                    </div>
                    <div>
                        <textarea class="ms-2" name="descricao" id="" cols="50" rows="5">
                        {{$equipamento->descricao}}
                        </textarea>
                    </div>
                <div class="row">
                    <div class="col-md-4">
                        <form class="d-flex justify-content-start" action="{{ route('equipamentos-destroy', ['id'=>$equipamento->id]) }}" method="POST">
                            @csrf
                            <div class="col-md-2 mx-3">
                                {{-- comentar --}}
                                <button type="button" class="btn btn-secondary ms-3 bg-light border border-0" data-bs-toggle="modal" data-bs-target="#comentarios">
                                    <img src="/img/comentario.png" alt="icon" style="width: 30px;">
                                </button>
                                {{-- Excluir --}}                                    
                                <a href="" class="btn btn-secondary ms-3 bg-light border border-0" data-bs-toggle="modal" data-bs-target="#modalExcluir">
                                    <img style="width: 30px;" src="/img/deletar.png" alt="icon">
                                </a>
                                {{-- Modal Comentario --}}
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
                                {{-- Modal exluir --}}
                                <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content rounded-0">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 fw-bold">Exclusão</h4>
                                                
                                                <button type="button" class="close btn-close d-flex align-items-center justify-content-center text-center" data-bs-dismiss="modal" aria-label="Close">
                                                    <span class="d-flex align-items-center justify-content-center text-center" aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <div class="mb-3 text-center">
                                                    <span class="text-center">Tem certeza que dejesa excluir este item?</span>
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                @method('DELETE')
                                                <button class="shadow btn btn-style1" type="submit">
                                                    Exlcuir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>   
                        </form>
                        
                    </div>
                </div>
            </div><br>
        </div>
    </div>
        <hr class="border border-primary border-2">
    
        @endif
        @endforeach
        
        
    



@endsection
