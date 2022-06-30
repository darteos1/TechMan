<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css_thigas.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Teste de função</title>
</head>

<body>
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
    <div class="container" id="container_box_button">
        <input id="resultado" type="password">
        <a onclick="mostrarSenha()">👁‍🗨</a>
        </input>
        <button class="button" id="botao">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>
        </button>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="/js_thigas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</html>
