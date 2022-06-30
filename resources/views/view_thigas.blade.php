<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
    <title>Techman</title>
</head>

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row" id="sec-1">
                <div class="col col-md-8 h-100 order-2 order-md-1 d-flex flex-column">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="./public/img/techman.png" alt="Techman Logo" id="logo">
                        </div>
                    </div>
                    <div class="row">
                        <h1 class="ms-5 gerenciamento"><span class="auto-type"></span></h1>
                    </div>
                    <div class="row flex-grow-1">
                        <div class="col col-md-12 d-flex align-items-center justify-content-center">
                            <img src="./public/image/ilustration.png" alt="Ilustração" id="ilustration">
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
                            <form>
                                <div class="form-group">
                                    <div>
                                        <i id="icone-1" class="bi bi-person-fill"></i>
                                    </div>
                                    <input id="input-1" type="text" class="form-control" placeholder="USUÁRIO" required>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <i id="icone-2" class="bi bi-lock-fill"></i>
                                    </div>
                                    <input id="input-2" type="password" class="form-control" placeholder="SENHA"
                                        required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 text-center mx-auto">
                            <div class="calculator mx-auto">

                                <div class="calculator-keys mx-auto">

                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('7')">7</button>
                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('8')">8</button>
                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('9')">9</button>


                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('4')">4</button>
                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('5')">5</button>
                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('6')">6</button>


                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('1')">1</button>
                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('2')">2</button>
                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('3')">3</button>


                                    <button type="button" class="btn rounded-0"
                                    onclick="clean('')"><i>C</i></button>
                                    <button type="button" class="btn rounded-0"
                                    onclick="insert('0')">0</button>
                                    <button type="button" class="btn rounded-0" id="botao_submit"><i class="bi bi-arrow-return-right"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: ["GERENCIAMENTO"],
            typeSpeed: 30
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./js/js_thigas.js"></script>
</body>

</html>
