  // Desabilita o botão.
  document.getElementById("botao").disabled = true;

  function insert(num) {

    // numero recebe o conteúdo do elemento HTML 'div' atráves do id 'resultado'.
    var numero = document.getElementById('resultado').value;

    // 'O conteúdo de 'resultado' é alterado pela soma de numero + num.
    document.getElementById('resultado').value = numero + num;
    numero = numero + 1

    // Se numero for diferente de null, de '' e o tamanho de numero for maior ou igual a seis
    if (numero !== null && numero !== '' && numero.length >= 6) {

      //Hábilita o botão
      document.getElementById("botao").disabled = false;

      // colorButton recebe pega o id do elemento 'button' e altera a cor de fundo de cinza para verde.
      var colorButton = document.getElementById('botao');
      colorButton.style.backgroundColor = '#00c800';

    } else {

      //Desabilita o botão.
      document.getElementById("botao").disabled = true;
    }
    //Se o tamanho do numero for maior que seis
    if (numero.length < 6) {

      //colorTexRed recebe o id do elemnto 'div' e altera o cor da string de preto para vermelho.
      var colorTextRed = document.getElementById('resultado');
      colorTextRed.style.color = 'red';

    } else {

      //colorTexBlack recebe o id do elemnto 'div' e altera o cor da string de vermelho para preto.
      var colorTextBlack = document.getElementById('resultado');
      colorTextBlack.style.color = 'black';

    }

  }

  function clean() {

    //colorCleanButton recebe o id do elemnto 'button' e altera o cor de fundo para um cinza mesclado.
    var colorCleanButton = document.getElementById('botao');
    colorCleanButton.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';


    // //Desabilita o botão.
    document.getElementById("botao").disabled = true;

    //Altera o conteúdo existente no 'resultado' por ''.
    document.getElementById('resultado').value = '';

  }

  function mostrarSenha(){
    document.getElementById('password').type == 'password' ? document.getElementById('password').type = 'number' : document.getElementById('password').type = 'password'

  }
