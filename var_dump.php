<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  require __DIR__ . '/vendor/autoload.php';

  use Alura\Leilao\Model\Usuario;
  use Alura\Leilao\Model\Leilao;

  $usuario = new Usuario('Filipe Leuch');
  $leilao = new Leilao('Fiat 147 0km');

  var_dump('<pre>', $usuario, $leilao);

  ?>

</body>

</html>