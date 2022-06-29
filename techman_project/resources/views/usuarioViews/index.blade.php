@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Olá Usuário, bom dia!</h3>
            </div>
        </div>


        <table class="table m-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome do Equipamento</th>
                    <th scope="col">Descrição do Equipamento</th>
                    <th scope="col">...</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($equipamentos as $equipamento)
                    @if($equipamento->switch_equipamento == 'ativo')
                        <tr>
                            <td>{{ $equipamento->id }}</td>
                            <td>{{ $equipamento->nome_equipamento }}</td>
                            <td>{{ $equipamento->descricao_equipamento }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection