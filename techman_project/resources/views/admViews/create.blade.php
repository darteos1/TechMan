@extends('layouts.app')

@section('content')

<h1 class="m-5">Adicionar cadastro</h1>

<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="m-5">
        <div>
            <label for="name">Nome:</label><br>
            <input class="w-25" type="text" name="name" placeholder="Digite aqui o nome do usuário">
        </div><br>
        
        <div>
            <label for="email">Email:</label><br>
            <input class="w-25" type="email" name="email" placeholder="Digite aqui o email do usuário">
        </div><br>
        
        <div>
            <label for="password">Senha:</label><br>
            <input class="w-25" type="text" name="password" placeholder="Digite aqui a senha do usuário">
        </div><br>

        <div>
            <label for="permission">Permissão:</label><br>
            <select id="permission" name="permission">
                <option value="adm">Administrador</option>
                <option value="usuario">Usuário</option>
            </select>
        </div><br>
        
        <div>
            <input class="btn btn-success" type="submit" name="submit" value="Enviar">
        </div>
    </div>
</form>

@endsection