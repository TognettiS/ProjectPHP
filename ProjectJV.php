<?php

do {
  $j1 = readline("Por favor digite seu nome: ");
  $j2 = readline("Por favor digite seu nome: ");
  $fim = 1;

  $jogador = 'X';

  $campo = [
    '','','',
    '','','',
    '','','',
  ];

  $vencedor = null;

  while ($vencedor === null) {
    echo "

      Posições: | Tabuleiro
                |
        0|1|2   | $campo[0]|$campo[1]|$campo[2]
        3|4|5   | $campo[3]|$campo[4]|$campo[5]
        6|7|8   | $campo[6]|$campo[7]|$campo[8]

    ";
    $escolha = (int) readline("Jogador {$jogador}, digite a posição que deseja jogar:");

    if (!in_array($escolha,[0, 1, 2, 3, 4, 5, 6, 7, 8])) {
      echo "\n Posição inexistente.\n";
      continue;
    }

    if ($campo[$escolha] !== '') {
      echo "\n Posição já ocupada.\n";
      continue;
    }

    $campo[$escolha] = $jogador;

    if (
      ($campo[0] === 'X' && $campo[1] === 'X' && $campo[2] === 'X' || $campo[3] === 'X' && $campo[4] === 'X' && $campo[5] === 'X') ||
      ($campo[6] === 'X' && $campo[7] === 'X' && $campo[8] === 'X' || $campo[0] === 'X' && $campo[3] === 'X' && $campo[6] === 'X') ||
      ($campo[1] === 'X' && $campo[4] === 'X' && $campo[7] === 'X' || $campo[2] === 'X' && $campo[5] === 'X' && $campo[8] === 'X') ||
      ($campo[0] === 'X' && $campo[4] === 'X' && $campo[8] === 'X' || $campo[2] === 'X' && $campo[4] === 'X' && $campo[6] === 'X')
    ) {
      $vencedor = 'X';
      break;
    }

    if (
      ($campo[0] === 'O' && $campo[1] === 'O' && $campo[2] === 'O' || $campo[3] === 'O' && $campo[4] === 'O' && $campo[5] === 'O') ||
      ($campo[6] === 'O' && $campo[7] === 'O' && $campo[8] === 'O' || $campo[0] === 'O' && $campo[3] === 'O' && $campo[6] === 'O') ||
      ($campo[1] === 'O' && $campo[4] === 'O' && $campo[7] === 'O' || $campo[2] === 'O' && $campo[5] === 'O' && $campo[8] === 'O') ||
      ($campo[0] === 'O' && $campo[4] === 'O' && $campo[8] === 'O' || $campo[2] === 'O' && $campo[4] === 'O' && $campo[6] === 'O')
    ) {
      $vencedor = 'O';
      break;
    }

    if (!in_array('', $campo)) {
      break;
    }

    if ($jogador === 'X') {
      $jogador = 'O';
    } else {
      $jogador = 'X';
    }

  };

  echo"

    Posições: | Tabuleiro
              |
      0|1|2   | $campo[0]|$campo[1]|$campo[2]
      3|4|5   | $campo[3]|$campo[4]|$campo[5]
      6|7|8   | $campo[6]|$campo[7]|$campo[8]

  ";

if ($vencedor ==='X') {
  echo "Vencedor: {$j1}.\n";
}elseif ($vencedor === 'O') {
  echo "Vencedor: {$j2}.\n";
}else {
  echo "Empate!\n";
}

$fim = readline("\n Deseja jogar novamente? (1-Sim 2-Não):");


} while ($fim == 1);




?>
