@extends('layouts.app')

@section('title', 'Novo Comentário')

@section('content')
<div class="container-fluid">
    <h3 id="comentario">Cadastrar Comentário</h3>
</div>

<form class="form-control" action="{{ route('comentarios-store') }}" method="POST">
    @csrf
    <div class="form-floating">
        <input name="permissao" type="text" class="form-control" id="floatingInput" value={{ auth()->user()->permissao }} hidden><br>
    </div>
    <div class="form-floating">
        <input name="data" type="date" class="form-control" id="floatingInput" value={{ now() }} hidden>
    </div>
    <div class="form-floating">
        <textarea name="comentario" id="comentario" cols="50" rows="5" class="form-control" oninput="toggleButtom()"></textarea>
        <label for="floatingInput">Comentário: </label>
    </div>
    <div class="form-floating">
        <input name="id_equipamento" type="text" class="form-control" id="floatingInput" value={{ Auth::user()->id }} hidden><br>
    </div>
    <div class="container mt-1" style="width: 440px;">
        <div class="form-group">

            <div class="col-md-2 border border-right border-1">
                <button type="button" class="btn btn-secondary ms-3 bg-light" data-bs-toggle="modal" data-bs-target="#mensagem">
                    <input type="submit" class="btn btn-primary m-2 text-light" name="submit" id="cadastrar" value="Cadastrar" disabled>
                </button>
                <div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p><strong>Sucesso! Comentário cadastrado para o equipamento.</strong> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="col-sm-12 d-grid gap-2 d-md-flex justify-content-md-start">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('home')}}" class="btn btn-success m-2 text-light">Voltar</a>
        </div>
    </div>
</form>

<script>
    function toggleButtom() {
        const comentario = document.querySelector("#comentario").value;

        if (comentario === "") {
            document.querySelector("#cadastrar").disabled = true;
        }
        document.querySelector("#cadastrar").disabled = false;
    }
</script>
@endsection
