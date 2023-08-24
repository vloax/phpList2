<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista 2 - Vitor Melo</title>
  <script type="text/javascript">
    const form = document.querySelector(".outlined");

    form.addEventListener("submit", (e) => {
      e.preventDefault();
    });
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1 class="fs-1 titleMaster" style="display: flex; justify-content: center; margin: 1rem;">Lista de Atividades - 2
  </h1>
  <section class="app-container">
    <form class="outlined" method="post">
      <div id="quest1" class="mb-3">
        <h2>Questão 1</h2>
        <label for="exampleInputPassword1" class="form-label fs-5">Insira um número</label>
        <input type="number" class="form-control" id="campo1" name="campo1" value="<?= $_POST['campo1'] ?? "" ?>">
      </div>
      <button name="atv-1" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-1'])) {
            $campo1 = $_POST['campo1'];

            if ($campo1 > 0) {
              echo "O número é positivo.";
            } else if ($campo1 < 0) {
              echo "O número é negativo.";
            } else {
              echo "O número é igual a 0.";
            }
          }
          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post">
      <div id="quest2" class=" mb-3">
        <h2>Questão 2</h2>
        <label for="exampleInputPassword1" class="form-label fs-5">Insira um número</label>
        <input type="number" class="form-control" id="campo2" name="campo2" value="<?= $_POST['campo2'] ?? "" ?>">
      </div>
      <button name="atv-2" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">

          <?php
          if (isset($_POST['atv-2'])) {
            $campo2 = $_POST['campo2'];

            if ($campo2 === "") {

            } else {
              ?>
              <strong>Resultado:</strong>
              <?php
              for ($i = 1; $i <= 10; $i++) {
                echo "<br> $campo2 * $i = " . ($campo2 * $i) . ";";
              }
            }
          }
          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest3">
      <div id="quest3" class="mb-3">
        <h2>Questão 3</h2>
        <label for="exampleInputPassword1" class="form-label fs-5">Insira um número</label>
        <input type="number" class="form-control" id="campo3" name="campo3" value="<?= $_POST['campo3'] ?? "" ?>">
      </div>
      <button name="atv-3" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-3'])) {
            $campo3 = $_POST['campo3'];

            for ($i = $campo3 - 1; $i > 0; $i--) {
              $campo3 *= $i;
            }

            echo $campo3;
          }
          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest4">
      <div id="quest4" class="mb-3">
        <h2>Questão 4</h2>

        <div class="ma-2">
          <input type="radio" class="btn-check" value="soma" name="options" id="option1" autocomplete="off">
          <label class="btn btn-primary" for="option1">Soma</label>

          <input type="radio" class="btn-check" value="subtracao" name="options" id="option2" autocomplete="off">
          <label class="btn btn-primary" for="option2">Subtração</label>

          <input type="radio" class="btn-check" value="multiplicacao" name="options" id="option3" autocomplete="off">
          <label class="btn btn-primary" for="option3">Multiplicação</label>

          <input type="radio" class="btn-check" value="divisao" name="options" id="option4" autocomplete="off">
          <label class="btn btn-primary" for="option4">Divisão</label>
        </div>


        <label for="exampleInputPassword1" class="form-label fs-5 ">Insira os números</label>
        <div class="row g-0">
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo4" name="campo4" value="<?= $_POST['campo4'] ?? "" ?>">
          </div>
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo5" name="campo5" value="<?= $_POST['campo5'] ?? "" ?>">
          </div>
        </div>

      </div>
      <button name="atv-4" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-4'])) {
            $campo4 = $_POST['campo4'];
            $campo5 = $_POST['campo5'];

            $operacao = $_POST['options'];

            if ($operacao === "soma") {
              echo $campo4 + $campo5;
            } else if ($operacao === "subtracao") {
              echo $campo4 - $campo5;
            } else if ($operacao === "multiplicacao") {
              echo $campo4 * $campo5;
            } else if ($operacao === "divisao") {
              echo $campo4 / $campo5;
            }

          }

          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest5">
      <div id="quest5" class="mb-3">
        <h2>Questão 5</h2>
        <label for="exampleInputPassword1" class="form-label fs-5">Insira um número</label>
        <input type="number" class="form-control" id="campo6" name="campo6" value="<?= $_POST['campo6'] ?? "" ?>">
      </div>
      <button name="atv-5" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-5'])) {
            $campo6 = $_POST['campo6'];

            if ($campo6 % 2 === 0) {
              echo "O número é par";
            } else {
              echo "O número é ímpar";
            }
          }
          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest6">
      <div id="quest6" class="mb-3">
        <h2>Questão 6</h2>

        <label for="exampleInputPassword1" class="form-label fs-5 ">Insira os números</label>
        <div class="row g-0">
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo7" name="campo7" value="<?= $_POST['campo7'] ?? "" ?>">
          </div>
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo8" name="campo8" value="<?= $_POST['campo8'] ?? "" ?>">
          </div>
        </div>

      </div>
      <button name="atv-6" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-6'])) {
            $campo7 = $_POST['campo7'];
            $campo8 = $_POST['campo8'];

            if ($campo7 > $campo8) {
              echo $campo7 . " " . $campo8;
            } else {
              echo $campo8 . " " . $campo7;
            }

          }

          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest7">
      <div id="quest7" class="mb-3">
        <h2>Questão 7</h2>

        <label for="exampleInputPassword1" class="form-label fs-5 ">Insira os números</label>
        <div class="row g-0">
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo9" name="campo9" value="<?= $_POST['campo9'] ?? "" ?>">
          </div>
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo10" name="campo10"
              value="<?= $_POST['campo10'] ?? "" ?>">
          </div>
        </div>

      </div>
      <button name="atv-7" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-7'])) {
            $campo9 = $_POST['campo9'];
            $campo10 = $_POST['campo10'];

            if ($campo9 > $campo10) {
              echo $campo9 . " é maior que " . $campo10;
            } else {
              echo $campo10 . " é maior que " . $campo9;
            }

          }

          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest8">
      <div id="quest8" class="mb-3">
        <h2>Questão 8</h2>

        <label for="exampleInputPassword1" class="form-label fs-5 ">Insira os números</label>
        <div class="row g-0">
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo11" name="campo11"
              value="<?= $_POST['campo11'] ?? "" ?>">
          </div>
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo12" name="campo12"
              value="<?= $_POST['campo12'] ?? "" ?>">
          </div>
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo13" name="campo13"
              value="<?= $_POST['campo13'] ?? "" ?>">
          </div>
        </div>

      </div>
      <button name="atv-8" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-8'])) {
            array(
              $campo11 = $_POST['campo11'],
              $campo12 = $_POST['campo12'],
              $campo13 = $_POST['campo13']
            );

            $media = ($campo11 + $campo12 + $campo13) / 3;

            if ($media >= 6) {
              echo "A média é: " . $media . " - Aprovado";
            } else {
              echo "A média é: " . $media . " - Reprovado";
            }

          }

          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest9">
      <div id="quest9" class="mb-3">
        <h2>Questão 9</h2>

        <label for="exampleInputPassword1" class="form-label fs-5 ">Insira seu nome e idade</label>
        <div class="row g-0">
          <div class="col mx-2">
            <input placeholder="Digite seu nome" type="text" class="form-control" id="nome" name="nome"
              value="<?= $_POST['nome'] ?? "" ?>">
          </div>
          <div class="col mx-2">
            <input type="number" class="form-control" id="campo15" name="campo15"
              value="<?= $_POST['campo15'] ?? "" ?>">
          </div>
        </div>

      </div>
      <button name="atv-9" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-9'])) {
            $nome = $_POST['nome'];
            $campo15 = $_POST['campo15'];

            if ($campo15 < 18) {
              echo $nome . " é menor de idade e tem" . $campo15 . " anos";
            } else {
              echo $nome . " é maior de idade e tem" . $campo15 . " anos";
            }

          }

          ?>
        </p>
      </div>
    </form>

    <form class="outlined" method="post" action="#quest10">
      <div id="quest10" class="mb-3">
        <h2>Questão 10</h2>
        <label for="exampleInputPassword1" class="form-label fs-5">Insira um número</label>
        <input type="number" class="form-control" id="mesDoAno" name="mesDoAno" value="<?= $_POST['mesDoAno'] ?? "" ?>">
      </div>
      <button name="atv-10" type="submit" class="btn btn-primary">Enviar</button>
      <div class="resultado">
        <p class="fs-7">
          <strong>Resultado:</strong>
          <?php
          if (isset($_POST['atv-10'])) {
            $mesDoAno = $_POST['mesDoAno'];

            switch ($mesDoAno) {
              case 1:
                echo "Janeiro";
                break;
              case 2:
                echo "Fevereiro";
                break;
              case 3:
                echo "Março";
                break;
              case 4:
                echo "Abril";
                break;
              case 5:
                echo "Maio";
                break;
              case 6:
                echo "Junho";
                break;
              case 7:
                echo "Julho";
                break;
              case 8:
                echo "Agosto";
                break;
              case 9:
                echo "Setembro";
                break;
              case 10:
                echo "Outubro";
                break;
              case 11:
                echo "Novembro";
                break;
              case 12:
                echo "Dezembro";
                break;
              default:
                echo "Mês inválido";
            }
          }
          ?>
        </p>
      </div>
    </form>


  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</body>

</html>