@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="container container_box_pai">
                                    <div onclick="insert('1')" class="container_box_filho">1</div>
                                    <div onclick="insert('2')" class="container_box_filho">2</div>
                                    <div onclick="insert('3')" class="container_box_filho">3</div>
                                    <div onclick="insert('4')" class="container_box_filho">4</div>
                                    <div onclick="insert('5')" class="container_box_filho">5</div>
                                    <div onclick="insert('6')" class="container_box_filho">6</div>
                                    <div onclick="insert('7')" class="container_box_filho">7</div>
                                    <div onclick="insert('8')" class="container_box_filho">8</div>
                                    <div onclick="insert('9')" class="container_box_filho">9</div>
                                    <div onclick="insert('0')" class="container_box_filho">0</div>
                                    <div onclick="clean('')" class="container_box_filho">C</div>
                                </div>
                            </div>
                            
                            <div class="container" id="container_box_button">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <a id="ver-senha" onclick="mostrarSenha()">👁‍🗨</a>
                            </div>
                                                        
                            <button class="button" id="botao">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                                </svg>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
