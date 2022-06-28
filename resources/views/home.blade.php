@extends('layouts.app')

@section('content')
<div class="container-fluid ms-5">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-secondary" role="alert">
                    <div class="row">
                        <div class="col-md-10 text-center d-flex align-items-center d-flex justify-content-center shadow p-1 mb-1 bg-body rounded">
                            <p class="fs-1"><strong>{{ __('Seja bem vindo,') }}
                                    {{ Auth::user()->name }}!</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
