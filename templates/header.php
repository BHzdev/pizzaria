<?php
include("process/conn.php");

$msg = "";

if (isset($_SESSION['msg'])) {
  $msg = $_SESSION['msg'];
  $status = $_SESSION['status'];

  $_SESSION['msg'] = "";
  $_SESSION['status'] = "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faça seu Pedido!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <a href="index.php" class="navbar-brand">
        <img src="img/pizza.svg" alt="pizzaria" id="brand-logo">
      </a>
      <div class="collapse navbar-collapse" id="navBarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="index.php" class="nav-link">Peça sua pizza</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php if ($msg != "") : ?>
    <div class="alert alert-<?= $status ?>">
      <p><?= $msg ?></p>
    </div>
  <?php endif; ?>