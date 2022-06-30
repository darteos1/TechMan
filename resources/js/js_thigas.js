  // Desabilita o botão.
  document.getElementById("botao_submit").disabled = true;
  var colorButtonSubmit = document.getElementById('botao_submit');
  colorButtonSubmit.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';


  function insert(num) {

    // numero recebe o conteúdo do elemento HTML 'button' atráves do id 'input-2'.
    var numero = document.getElementById('input-2').value;

    // 'O conteúdo de 'input-2' é alterado pela soma de numero + num.
    document.getElementById('input-2').value = numero + num;
    numero = numero + 1

    // Se numero for diferente de null, de '' e o tamanho de numero for maior ou igual a seis
    if (numero !== null && numero !== '' && numero.length >= 6) {

      //Hábilita o botão
      document.getElementById("botao_submit").disabled = false;

      // colorButton recebe pega o id do elemento 'button' e altera a cor de fundo de cinza para verde.
      var colorButton = document.getElementById('botao_submit');
      colorButton.style.backgroundColor = '#35797d';

    } else {
      //Desabilita o botão.
      document.getElementById("botao_submit").disabled = true;
    }

  }

  function clean() {

    //Altera o background do elemento "button"
    colorButtonSubmit.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';

    // //Desabilita o botão.
    document.getElementById("botao_submit").disabled = true;

    //Altera o conteúdo existente no 'resultado' por ''.
    document.getElementById('input-2').value = '';

  }
  