@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($permissao == 'adm')
                @include('admViews.index')
            @endif

            @if($permissao == 'usuario')
                @include('usuarioViews.index')
            @endif
        </div>
    </div>
</div>
@endsection
