{{-- @extends('layouts.app')

@section('content') --}}


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Techman</title>
</head>

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row" id="sec-1">
                <div class="col col-md-8 h-100 order-2 order-md-1 d-flex flex-column">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="./image/imgLogin/techman.png" alt="Techman Logo" id="logo">
                        </div>
                    </div>
                    <div class="row">
                        <h1 class="ms-5 gerenciamento"><span class="auto-type"></span></h1>
                    </div>
                    <div class="row flex-grow-1">
                        <div class="col col-md-12 d-flex align-items-center justify-content-center">
                            <img src="./image/imgLogin/ilustration.png" alt="Ilustração" id="ilustration">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 h-100 order-1 order-md-2" id="sec-2">
                    <div class="row">
                        <div class="col col-md-12 text-center">
                            <h1 class="w-75 mx-auto" id="texto-entrar">ENTRAR</h1>
                        </div>
                    </div>
                    <div class="row" id="sec-2-row-2">
                        <div class="col col-md-10 text-center mx-auto">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div>
                                        <i id="icone-1" class="bi bi-person-fill"></i>
                                    </div>
                                    <input id="input-1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="EMAIL" value="{{ old('email') }}" required autocomplete="email" autofocus>                     
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                
                                <div class="container form-group" id="container_box_button">
                                    <div>
                                        <i id="icone-2" class="bi bi-lock-fill"></i>
                                    </div>
                                    
                                    
                                    <input id="input-2" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <a id="ver-senha" onclick="mostrarSenha()">👁‍🗨</a>
                                </div>
                                
                                {{-- <div class="form-group">
                                    <div>
                                        <i id="icone-2" class="bi bi-lock-fill"></i>
                                    </div>

                                    <input id="input-2" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="SENHA" required autocomplete="current-password">
                                    <a id="ver-senha" onclick="mostrarSenha()">👁‍🗨</a>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror                           
                                        
                                    
                                </div>    --}}
                                
                                
                                                        

                                <div class="row">
                                    <div class="col col-md-12 text-center mx-auto">
                                        <div class="calculator mx-auto">
            
                                            <div class="calculator-keys mx-auto container_box_pai">
            
                                                <button type="button" value="7" class="btn rounded-0"
                                                    onclick="insert('7')" class="container_box_filho">7</button>
                                                <button type="button" value="8" class="btn rounded-0"
                                                    onclick="insert('8')" class="container_box_filho">8</button>
                                                <button type="button" value="9" class="btn rounded-0"
                                                    onclick="insert('9')" class="container_box_filho">9</button>
            
            
                                                <button type="button" value="4" class="btn rounded-0"
                                                onclick="insert('4')" class="container_box_filho">4</button>
                                                <button type="button" value="5" class="btn rounded-0"
                                                    onclick="insert('5')" class="container_box_filho">5</button>
                                                <button type="button" value="6" class="btn rounded-0"
                                                    onclick="insert('6')" class="container_box_filho">6</button>
            
            
                                                <button type="button" value="1" class="btn rounded-0"
                                                    onclick="insert('1')" class="container_box_filho">1</button>
                                                <button type="button" value="2" class="btn rounded-0"
                                                    onclick="insert('2')" class="container_box_filho">2</button>
                                                <button type="button" value="3" class="btn rounded-0"
                                                    onclick="insert('3')" class="container_box_filho">3</button>
            
            
                                                <button type="button" class="btn rounded-0"
                                                    onclick="document.getElementById('input-2').value='';"><i class="bi bi-x-lg"></i></button>
                                                <button type="button" value="0" class="btn rounded-0"
                                                    onclick="document.getElementById('input-2').value=document.getElementById('input-2').value + '0';">0</button>
                                                <button type="submit" class="btn rounded-0" id="botao"><i class="bi bi-arrow-return-right"></i></button>        
                                            </div>

                                           

                                           
                                            
                                        </div>
                                    </div>
                                </div> 
                                
                                
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <script src="./js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: ["GERENCIAMENTO"],
            typeSpeed: 30
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
</body>

</html>







