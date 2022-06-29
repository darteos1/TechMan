@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Olá Administrador, bom dia bro!</h3>

                <p>Para cadastrar um usuário <a href="{{ route('create') }}"> Clique aqui</a></p>
                <p>Para cadastrar um novo equipamento <a href=""> Clique aqui</a></p>
            </div>
        </div>
    </div>
@endsection