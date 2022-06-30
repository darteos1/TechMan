@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Olá Administrador, bom dia!</h3>

                <p>Para cadastrar um usuário <a href="{{ route('create-user') }}"> Clique aqui</a></p> 
            </div>
        </div>
    </div>
    
    <div class="text-center h-100 w-100 d-flex align-items-center justify-content-center">
        <a href="#" class="shadow btn mb-4 btn-style1" data-bs-toggle="modal" data-bs-target="#modalContactForm">
            Cadastrar Equipamento
        </a>
    </div>

    <table class="table m-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Foto do Equipamento</th>
                <th scope="col">Nome do Equipamento</th>
                <th scope="col">Descrição do Equipamento</th>
                <th scope="col">Status</th>
                <th scope="col">Data/Hora do Cadastro</th>
                <th scope="col">...</th>
            </tr>
        </thead>

        <tbody>
            @foreach($equipamentos as $equipamento)
                <tr>
                    <td>{{ $equipamento->id }}</td>
                    <td><img width="250px" src="images/{{ $equipamento->foto_equipamento }}"></td>
                    <td>{{ $equipamento->nome_equipamento }}</td>
                    <td>{{ $equipamento->descricao_equipamento }}</td>
                    <td>{{ $equipamento->switch_equipamento }}</td>
                    <td>{{ $equipamento->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    

    <form action="{{ route('store-equip') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="foto_equipamento" class="form-label">Foto</label>
                            <input onchange="enableBtn()" type="file" class="form-control" id="foto_equipamento" name="foto_equipamento">
                        </div>

                        <div class="mb-3">
                            <label for="nome_equipamento" class="form-label">Nome</label>
                            <input onchange="enableBtn()" type="text" class="form-control" id="nome_equipamento" name="nome_equipamento" placeholder="Digite o nome do equipamento...">
                        </div>
                        <div class="mb-3">
                            <label for="descricao_equipamento" class="form-label">Descrição</label>
                            <textarea onchange="enableBtn()" class="form-control" id="descricao_equipamento" name="descricao_equipamento" rows="3"></textarea>
                        </div>

                        <div class="mb-3">                           
                            <label class="form-check-label" for="switch_equipamento">Status</label><br>
                            <select name="switch_equipamento" id="switch_equipamento">
                                <option value="ativo">Ativo</option>
                                <option value="desativo">Desativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button disabled id="btn-modal" class="shadow btn btn-style1">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>

@endsection